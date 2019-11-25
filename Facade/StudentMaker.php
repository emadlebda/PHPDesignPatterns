<?php


class StudentMaker
{
    private $itStudent;
    private $artStudent;
    private $engStudent;
    private $eduStudent;
    private static $maker;

    /**
     * StudentMaker constructor.
     * @param $itStudent
     * @param $artStudent
     * @param $engStudent
     * @param $eduStudent
     */
    public function __construct()
    {
        $this->itStudent = new itStudent();
        $this->artStudent = new artStudent();
        $this->engStudent = new engStudent();
        $this->eduStudent = new eduStudent();
    }


    public static function getMaker()
    {
        if (self::$maker == null)
            self::$maker = new StudentMaker();
        return self::$maker;
    }


    public function viewIt()
    {
        $this->itStudent->view();
    }

    public function viewEng()
    {
        $this->engStudent->view();
    }

    public function viewEdu()
    {
        $this->eduStudent->view();
    }

    public function viewArt()
    {
        $this->artStudent->view();
    }


}