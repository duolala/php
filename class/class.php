<?php 
class NbaPlayer {
	public $name = 'Jordan';
	public $height = '198Cm';
	public $weight = '98kg';
	public $team = 'Bull';
	public $playerNumber = '23';

	function __construct($name,$height,$weight,$team,$playerNumber){
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;
		$this->team = $team;
		$this->playerNumber = $playerNumber;
	}

	public function run(){
		echo "Running";
	}
	
	public function jump(){
		echo "Running";
	}
	
	public function dribble(){
		echo "Dribble";
	}
	
	public function shoot(){
		echo "Shooting";
	}
	public function dunk(){
		echo "Duning";
	}
	public function pass() {
		echo 'Passing';
	}
}

$jordan = new NbaPlayer('Jordan','198Cm','98kg','Bull','23') ;
echo $jordan->name;
echo "<br />";
echo $jordan->height;
echo "<br />";
echo $jordan->weight;
echo "<br />";
echo $jordan->dunk();
echo "<br />";
echo "<br />";
echo "<br />";
	
$duo = new NbaPlayer('duola','172Cm','70kg','It','30') ;
echo $duo->name;
echo "<br />";
echo $duo->height;
echo "<br />";
echo $duo->weight;
echo "<br />";
echo $duo->pass();
?>