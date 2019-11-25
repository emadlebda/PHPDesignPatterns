<?php


class MscContent implements Content
{

    function view($data)
    {
        echo 'Msc Course Content : ' . $data.'</br>';

    }
}