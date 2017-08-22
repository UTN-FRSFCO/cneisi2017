<?php
namespace App\Entities;

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
}