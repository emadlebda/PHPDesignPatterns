<?php


class Course
{
    private static $course;
    private $title;
    private $content;
    private $teacher;
    private $degree;

    /**
     * Course constructor.
     */
    private function __construct()
    {
    }

    public static function getCourse()
    {
        if (is_null(self::$course))
            self::$course = new Course();
        return self::$course;
    }

    /**
     * @param mixed $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    public function view($title, $content, $teacher)
    {
        $this->title = $this->degree->getTitle($title);
        $this->content = $this->degree->getContent($content);
        $this->teacher = $this->degree->getTeacher($teacher);
        echo '<h3>viewing course data ........</h3>';
        echo '<ul>';
        echo '<li>';
        $this->title->view($title);
        echo '</li>';
        echo '<li>';
        $this->content->view($content);
        echo '</li>';
        echo '<li>';
        $this->teacher->view($teacher);
        echo '</li>';
        echo '</ul><hr>';
    }
}