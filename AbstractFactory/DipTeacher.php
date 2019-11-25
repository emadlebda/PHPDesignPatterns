<?php


class DipTeacher implements  Teacher
{

    function view($data)
    {
        echo 'Dip Course Teacher : ' . $data.'</br>';

    }
}