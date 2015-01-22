<?php 
/**
*  继承=====扩展 extends
*/
	class person {
		public $name;
		public $age;
		public $sex;
		
		 public function __construct() {

		}

		public function say() {

		}

		public function eat() {
				echo '1111111111111111';
		}

		public function run() {

		}
	}

	class student extends person {
		public $school = '123';
		public function study() {

		}

	}

	class teacher extends student {
		public $dw;

		public function eat() {
			parent::eat();
			echo '22222222222222222';
		}
	}

// $p = new teacher ();

// if ($p instanceof teacher) {
// 	echo "\$p包含tacher";
// }
 ?>