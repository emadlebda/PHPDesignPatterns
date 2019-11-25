<?php


class PhdTeacher implements Teacher
{

    function view($data)
    {
        echo 'Phd Course Teacher : ' . $data.'</br>';

    }
}