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

    public function getParsedType()
    {
        switch ($this->type) {
            case AssistantType::BUENOS_AIRES:
                return 'Facultad Regional Buenos Aires';
            case AssistantType::CONCEPCION_URUGUAY;
                return 'F. R. Concepción del Uruguay';
            case AssistantType::CORDOBA:
                return 'Facultad Regional Córdoba';
            case AssistantType::DELTA:
                return 'Facultad Regional Delta';
            case AssistantType::LA_PLATA:
                return 'Facultad Regional La Plata';
            case AssistantType::MENDOZA:
                return 'Facultad Regional Mendoza';
            case AssistantType::RESISTENCIA:
                return 'Facultad Regional Resistencia';
            case AssistantType::ROSARIO:
                return 'Facultad Regional Rosario';
            case AssistantType::SAN_FRANCISCO:
                return 'Facultad Regional San Francisco';
            case AssistantType::SANTA_FE:
                return 'Facultad Regional Santa Fe';
            case AssistantType::TUCUMAN:
                return 'Facultad Regional Tucumán';
            case AssistantType::VILLA_MARIA:
                return 'Facultad Regional Villa María';
            case AssistantType::GUEST:
                return 'Invitado';
            case AssistantType::GENERAL_PUBLIC:
                return 'Público General';
            default:
                return "";
        }
    }
}
