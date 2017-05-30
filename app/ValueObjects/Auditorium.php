<?php

namespace App\ValueObjects;

class Auditorium
{
    private $name;

    const AUDITORIUM_1 = 'auditorium_1';
    const AUDITORIUM_2 = 'auditorium_2';
    const AUDITORIUM_3 = 'auditorium_3';

    const ALL_NAMES = [self::AUDITORIUM_1, self::AUDITORIUM_2, self::AUDITORIUM_3];

    public function __construct(string $name)
    {
        if (!in_array(strtolower($name), static::ALL_NAMES)) {
            throw new InvalidArgumentException("Invalid auditorium name: {$name}");
        } else{
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function conference()
    {
        return $this->hasMany(Conference::class);
    }
}
