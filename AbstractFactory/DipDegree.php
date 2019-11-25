<?php


class DipDegree implements Degree
{

    public function getTitle()
    {
        return new DipTitle();
    }

    public function getContent()
    {
        return new DipContent();
    }

    public function getTeacher()
    {
        return new DipTeacher();
    }
}