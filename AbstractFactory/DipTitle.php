<?php


class DipTitle implements Title
{
    public function view($data){
        echo 'Dip Course Title : ' . $data.'</br>';
    }
}