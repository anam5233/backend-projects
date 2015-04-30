<?php


class WebcoachbdProduct {


public $title = "default value";
const PI  = "3.1416";


public function getTutorial($name) {
echo "Webcoachbd provide massive tutorial on" . $name;
}


}


$productObject = new WebcoachbdProduct();
echo $productObject::PI;
?>