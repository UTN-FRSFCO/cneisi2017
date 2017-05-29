<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'speakers';

    public function getId()
    {
        return $this->id;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture(string $picture)
    {
        $this->picture = $picture;
    }

    public function hasPicture()
    {
        return !empty($this->picture);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug(string $slug)
    {
        $this->slug = $slug;
    }

    public function getTagline()
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline)
    {
        $this->tagline = $tagline;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo(string $video)
    {
        $this->video = $video;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore(int $score)
    {
        $this->score = $score;
    }

    public function conferences()
    {
        return $this->hasMany(Conference::class);
    }
}
