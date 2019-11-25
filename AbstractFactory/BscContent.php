<?php


class BscContent implements  Content
{

    function view($data)
    {
        echo 'Bsc Course Content : ' . $data.'</br>';
    }
}