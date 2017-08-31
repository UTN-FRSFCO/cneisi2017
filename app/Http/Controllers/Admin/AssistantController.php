<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Assistant;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssistantRequest;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoadAssistantRequest;

class AssistantController extends Controller
{

    const INDEX_VIEW = 'admin-panel.assistants.index';
    const LOAD_VIEW = 'admin-panel.assistants.load';
    const CREATE_VIEW = 'admin-panel.assistants.create';

    public function printCredentials()
    {
        return view('admin-panel.assistants.print-credentials');
    }

    public function qrCodes(Request $request)
    {
        if ($request->print == 'all') {

            $assistants = Assistant::where('type', '=', $request->input('type'))->get();

            $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => $assistants]);

            return $pdf->setPaper('a4', 'portrait')->stream($request->input('type') .'.pdf');
        } elseif ($request->print == 'individual') {
            $assistant = Assistant::where('dni', '=', $request->dni)->first();

            if ($assistant) {
                $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => [$assistant]]);

                return $pdf->setPaper('a4', 'portrait')->stream('codigo_qr_' . $assistant->dni . '.pdf');
            }
        }

        return back()->with('error', 'DNI EXISTENTE');
    }

    /**
     * Show the assistants load form.
     *
     * @return
     */
    public function index(string $type = null)
    {
        if (is_null($type) || $type == 'all') {
            $assistantList = DB::table('assistants')->paginate(150);
            $assistantCount = DB::table('assistants')->count();
        } else {
            $assistantList = DB::table('assistants')->where('type', '=', $type)->paginate(150);
            $assistantCount = DB::table('assistants')->where('type', '=', $type)->count();
        }

        return view(self::INDEX_VIEW)
            ->with('assistantsCount', $assistantCount)
            ->with('assistants', $assistantList);

    }

    public function loadAssistants()
    {
        return view(self::LOAD_VIEW);
    }

    /**
     * Load assistants from .csv file.
     *
     * @return
     */
    public function load(LoadAssistantRequest $request)
    {
        $assistantsFile = $request->file('file');
        $assistantType = $request->input('type');
        $assistantsArr = $this->csvToArray($assistantsFile);

        $notLoaded = 0;

        for ($i = 0; $i < count($assistantsArr); $i ++) {
            if (!$this->assistantExist($assistantsArr[$i]['DNI'])) {
                $this->storeAssistant($assistantsArr[$i], $assistantType);
            } else {
                ++ $notLoaded;
            }
        }

        $message = 'Lista de asistentes cargada satisfactoriamente.';

        if($notLoaded > 0)
        {
            $message = $message . ' Se omitieron ' . $notLoaded . ' registros por duplicación de dni.';
        }

        return back()->with('status', $message);
    }

    /**
     * Deletes an assistant.
     *
     * @return
     */
    public function delete(int $id)
    {
        try {
            DB::table('assistants')->where('id', '=', $id)->delete();

            $assistantList = DB::table('assistants')->paginate(5);

            return back()
                ->with('assistants', $assistantList)
                ->with('status', 'Asistente eliminado satisfactoriamente');
        } catch (Exception $ex) {
            return back()->with('status', $ex->getMessage());
        }
    }

    private function assistantExist(string $dni)
    {
        $assistant = DB::table('assistants')->where('dni', $dni)->first();

        return $assistant ? true : false;
    }

    private function storeAssistant(array $data, string $assistantType)
    {
        DB::table('assistants')->insert(
            [
                'firstname' => $data['Apellido'],
                'lastname' => $data['Nombre'],
                'dni' => $data['DNI'],
                'email' => $data['Email'],
                'phone' => $data['Celular'],
                'year' => $data['Año de cursado'],
                'type' => $assistantType,
            ]
        );
    }

    private function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }

    public function create()
    {
        return view(self::CREATE_VIEW);
    }

    public function store(StoreAssistantRequest $request)
    {
        $assistant = Assistant::create(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'dni' => $request->input('dni'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'year' => $request->input('year'),
                'type' => $request->input('type'),
            ]
        );

        if ($assistant) {
            $pdf = \PDF::loadView('admin-panel.assistants.qr-codes', ['assistants' => [$assistant]]);

            return $pdf->setPaper('a4', 'portrait')->stream('codigo_qr_' . $assistant->dni . '.pdf');
        }
    }
}
