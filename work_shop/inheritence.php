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


class StatisticsDept extends DepartmentInfo {

	public $labsNumber;

}


class CseDept extends DepartmentInfo {

	public $labsNumber;

	public function programmingActivity() {
		echo "Department of " . $this->departmentName . " should arrange programming contest like other university" . "<br/>";
	}

}


$statistics = new StatisticsDept("Statistics", "Dr. Rowshan Jahan", 6, 300);

echo "Chairman - " . $statistics->chairman . " * Students - " . $statistics->numberOfStudents . "<br/>";

$statistics->departmentActivity();

$cse = new CseDept("Computer Science and Engineering", "Dr.Jugal Krishna Das", 5, 300);

echo "Chairman - " . $cse->chairman . " * Students - " . $cse->numberOfStudents . "<br/>";

$cse->departmentActivity();

$cse->programmingActivity();

?>
