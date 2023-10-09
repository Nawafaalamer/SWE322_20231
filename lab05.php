<?php

class Courses
{
    public $courseCode;
    public $courseName;
    public $courseDescription;
    public $grade;

    public function setCourseCode($code)
    {
        $this->courseCode = $code;
    }

    public function getCourseCode()
    {
        return $this->courseCode;
    }

    public function setCourseName($name)
    {
        $this->courseName = $name;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseDescription($description)
    {
        $this->courseDescription = $description;
    }

    public function getCourseDescription()
    {
        return $this->courseDescription;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function isAPlusGrade()
    {
        return $this->grade === 'A+';
    }

    public function getCourseDetails()
    {
        return [
            'Course Code' => $this->courseCode,
            'Course Name' => $this->courseName,
            'Course Description' => $this->courseDescription,
            'Grade' => $this->grade
        ];
    }
}


$course1 = new Courses();
$course1->setCourseCode('MTH103');
$course1->setCourseName('caculus 1');
$course1->setCourseDescription('basic derivitaves.');
$course1->setGrade('B+');

$course2 = new Courses();
$course2->setCourseCode('CIS103');
$course2->setCourseName('PROGRAMMING fundementals');
$course2->setCourseDescription('basics of coding');
$course2->setGrade('C');

$course3 = new Courses();
$course3->setCourseCode('ENG101');
$course3->setCourseName('essay writing');
$course3->setCourseDescription('basic english essay writing.');
$course3->setGrade('A+');


$coursesArray = [$course1, $course2, $course3];


echo '<table>';
echo '<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th></tr>';
foreach ($coursesArray as $course) {
    echo '<tr' . ($course->isAPlusGrade() ? ' style="background-color: blue;"' : '') . '>';
    echo '<td>' . $course->getCourseCode() . '</td>';
    echo '<td>' . $course->getCourseName() . '</td>';
    echo '<td>' . $course->getCourseDescription() . '</td>';
    echo '<td>' . $course->getGrade() . '</td>';
    echo '</tr>';
}
echo '</table>';
?>