<?php


class BscTeacher implements  Teacher
{

    function view($data)
    {
        echo 'Bsc Course Teacher : ' . $data.'</br>';
    }
}