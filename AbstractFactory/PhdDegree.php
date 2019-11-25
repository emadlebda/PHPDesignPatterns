<?php


class PhdDegree implements Degree
{

    public function getTitle()
    {
        return new PhdTitle();
    }

    public function getContent()
    {
        return new PhdContent();
    }

    public function getTeacher()
    {
        return new PhdTeacher();
    }
}