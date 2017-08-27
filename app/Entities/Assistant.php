<?php
namespace App\Entities;

use App\Enums\AssistantType;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assistants';

    public function getJsonForQRCode()
    {
        $assistantJson = ['dni' => $this->dni];

        return json_encode($assistantJson);
    }

    public function getFullName()
    {
        $fullname = $this->firstname . " " . $this->lastname;

        if(strlen($fullname) > 20) {
            return substr($this->firstname, 0, 1) . ". " . $this->lastname;
        }

        return $fullname;
    }

    public static function getParsedType($type)
    {
        switch ($type) {
            case AssistantType::BUENOS_AIRES:
                return 'Buenos Aires';
            case AssistantType::CONCEPCION_URUGUAY;
                return 'Concepción del Uruguay';
            case AssistantType::CORDOBA:
                return 'Córdoba';
            case AssistantType::DELTA:
                return 'Delta';
            case AssistantType::LA_PLATA:
                return 'La Plata';
            case AssistantType::MENDOZA:
                return 'Mendoza';
            case AssistantType::RESISTENCIA:
                return 'Resistencia';
            case AssistantType::ROSARIO:
                return 'Rosario';
            case AssistantType::SAN_FRANCISCO:
                return 'San Francisco';
            case AssistantType::SANTA_FE:
                return 'Santa Fe';
            case AssistantType::TUCUMAN:
                return 'Tucumán';
            case AssistantType::VILLA_MARIA:
                return 'Villa María';
            case AssistantType::TRENQUE_LAUQUEN:
                return 'Trenque Lauquen';
            case AssistantType::GUEST:
                return 'Invitado';
            case AssistantType::GENERAL_PUBLIC:
                return 'Público General';
            default:
                return "";
        }
    }
}

