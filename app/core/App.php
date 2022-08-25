<?php
namespace app\core;

//localhost\person\add -> run the add method in the personController class
//localhosr\person\delete -> run the delete methode in the personController class

class App{
	public function __construct(){
		echo $_GET['url'];
		//place the routing algorithm here
	}
}