<?php 
class Person {
	//成员属性
	public $name;
	private $age;
	private $sex;

	public function __construct($name="",$age=0,$sex="男"){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
	
	public function __get($property_name) {
		echo $this->$property_name.'##########################';
	}

	public function say() {
		echo '我的名字是：'.$this->name.'我的年龄是：'.$this->age.'我的性别：'.$this->sex;
	}

	public function run() {
		$this->left();
		$this->right();
		$this->ready();
		$this->go();
	}

	private function left() {
		echo '迈左脚'."<br />";
		echo '迈左脚'."<br />";
	}

	private function right() {
		echo '迈右脚'."<br />";
		echo '迈右脚'."<br />";
	}

	private function ready() {
		echo '准备'."<br />";
	}

	private function go() {
		echo '走走走'."<br />";
		echo '走走走'."<br />";
		echo '走走走'."<br />";
	}

}
$bf1 = new Person('妹子',20,'女');
 $bf1->say();
// echo "<hr />";
// $bf1->run();


?>