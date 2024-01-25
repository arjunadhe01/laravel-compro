<?php

namespace App\Helpers;

use App\Models\Backend\Home\About;
use App\Models\Backend\Home\Hero;
use App\Models\Backend\Home\Highlight;

class HomeHelper
{
    public static function getHero()
    {
        $hero = Hero::select('title', 'subtitle', 'image')->first();

        // Mengembalikan nilai-nilai tertentu
        return $hero ? $hero->toArray() : null;
    }

    public static function getAbout()
    {
        $about = About::latest()->where('status', true)->take(3)->get();

        return $about;
    }

    public static function getHighlight()
    {
        $highlight = Highlight::latest()->where('status', true)->take(2)->get();

        return $highlight;
    }
}
