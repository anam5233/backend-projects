<?php


class DepartmentInfo {


	public $departmentName;
	public $chairman;
	public $classRoom;
	public $numberOfStudents;


	public function __construct($dept, $chair, $room, $stdNumber) {
		$this->departmentName = $dept;
		$this->chairman = $chair;
		$this->classRoom = $room;
		$this->numberOfStudents = $stdNumber;
	}


	public function departmentActivity() {
		echo "Deartment of " . $this->departmentName . " arrange a tour in every year" . "<br/>";
	}


}
class TeacherInfo{
	public $teacherName;
	public function __construct($tName) {
		$this->teacherName = $tName;
		}
	public function getTeacher(DepartmentInfo $dept){
		echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department";
	}
}

$dept = new DepartmentInfo("CSE", "Dr.Monirul Islam", 10, 250);
$tinfo = new TeacherInfo("Dr. M. Kaykobad");
$tinfo->getTeacher($dept);

?>
