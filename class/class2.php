<?php 
//构造方法
class BoyFriend {
	//变量(成员属性)
	var $name;
	var $age;
	var $sex;

	//函数(成员方法)

	public function __construct($name,$age,$sex){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}

	public function doFan() {
		return $this->name.'有做饭的功能';
	}

	public function doJW() {
		return $this->name.'在做家务';
	}

	public function __destruct(){
		echo $this->name.'再见！';
	}

}

$bf1 = new BoyFriend('张三',26,'男');
echo $bf1->doFan();

echo "<hr />";

$bf2 = new BoyFriend('李四',34,'男');
$bf2->name = '李四';
echo $bf2->doJW();
 ?>