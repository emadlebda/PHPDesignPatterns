<?php


class PhdContent implements  Content
{

    function view($data)
    {
        echo 'Phd Course Content : ' . $data.'</br>';
    }
}