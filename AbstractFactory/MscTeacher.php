<?php


class MscTeacher implements Teacher
{

    function view($data)
    {
        echo 'Msc Course Teacher : ' . $data.'</br>';
    }
}