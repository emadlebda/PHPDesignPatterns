<?php
/**
 * Created by PhpStorm.
 * User: Emad A. Abu Lebda
 * Date: 10/16/2019
 * Time: 1:13 PM
 */

class Factory
{
    public static function getStudent($type) {
        if(strcasecmp($type, 'it') == 0 )
            return new ItStudent();
        else if (strcasecmp($type, 'eng') == 0 )
            return new EngStudent();
        else if (strcasecmp($type, 'art') == 0 )
            return new ArtStudent();
        else
            return new ItStudent();
    }
}