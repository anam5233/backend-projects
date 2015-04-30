<?php


class WebcoachbdProduct {


	public $title = "default value";
	public $length;


	public function getTutorial($name) {
		echo "Webcoachbd provide massive tutorial on" . $name;
	}
	public function __toString() {
		return $this->title;
	}


}


$productObject = new WebcoachbdProduct();
echo $productObject;

?>
