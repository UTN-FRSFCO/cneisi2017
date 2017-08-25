<?php

namespace App\Entities;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assistances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'conference_id',
        'date',
        'dni',
        'catcher_name',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni(string $dni)
    {
        $this->dni = $dni;
    }

    public function getCatcherName()
    {
        return $this->catcher_name;
    }

    public function setCatcherName(string $catcherName)
    {
        $this->catcher_name = $catcherName;
    }

    /**
     * Each Assitance HAS one Conference
     *
     */
    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
