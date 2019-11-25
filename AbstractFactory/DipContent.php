<?php


class DipContent implements Content
{

    function view($data)
    {
        echo 'Dip Course Content : ' . $data.'</br>';
    }
}