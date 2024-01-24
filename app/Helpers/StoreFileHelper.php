<?php

namespace App\Helpers;

class StoreFileHelper
{
    public static function storeLogos($name, $extension)
    {
        return 'img/logos/' . $name . '.' . $extension;
    }

    public static function storeIco($name, $extension)
    {
        return 'ico/' . $name . '.' . $extension;
    }
}
