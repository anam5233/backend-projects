<?php


interface Moveable {


	public function move();
}


class Man implements Moveable {


	public function move() {
		echo "A man can move<br/>";
	}


}


class Vehicle implements Moveable {


	public function move() {
		echo "A Vehicle also can move";
	}


}


$mans = new Man();
$mans->move();
$machine = new Vehicle();
$machine->move();
?>
