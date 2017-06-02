<?php

namespace App\Entities;

use App\ValueObjects\Auditorium;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'slug',
        'date',
        'duration',
        'auditorium',
        'speaker_id',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug(string $slug)
    {
        $this->slug = $slug;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getTime()
    {
        return substr($this->date, 11, 5);
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    public function getAuditorium()
    {
        return $this->auditorium;
    }

    public function setAuditorium(Auditorium $auditorium)
    {
        $this->auditorium = $auditorium;
    }

    public function getSpeaker()
    {
        return $this->speaker;
    }

    public function setSpeaker(Speaker $speaker)
    {
        $this->speaker = $speaker;
    }

    /**
     * Each Conference HAS one auditorium
     *
     */
    public function auditorium()
    {
        return $this->belongsTo(Auditorium::class);
    }

    /**
     * Each Conference HAS one main Speaker
     *
     */
    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    /**
     * The users that will attend to the conference.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withTimestamps();;
    }
}
