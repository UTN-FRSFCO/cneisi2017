<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoadAssistantRequest;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class AssistantsPanelController
{
    const LOAD_VIEW = 'admin-panel.assistants.load';

    /**
     * Show the assistants load form.
     *
     * @return
     */
    public function loadAssistants()
    {
        return view(SELF::LOAD_VIEW);
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


        for ($i = 0; $i < count($assistantsArr); $i ++) {
            $this->storeAssistant($assistantsArr[$i], $assistantType);
        }
        dd('ok');
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

    private function storeAssistant(array $data, string $assistantType)
    {
        DB::table('assistants')->insert(
            [
                'dni' => $data['dni'],
                'lastname' => $data['nombre'],
                'firstname' => $data['apellido'],
                'email' => $data['email'],
                'phone' => $data['telefono'],
                'year' => $data['año'],
                'type' => $assistantType,
            ]
        );
    }
}
