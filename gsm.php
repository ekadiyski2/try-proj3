<?php
	class Gsm {
		public $brand;
		public $model;
		public $price;
		public $battery;
		
		public function __construct($br = 'Nokia', $m = '6500', $p = '250'){
			$this->brand = $br;
			$this->model = $m;
			$this->price = $p;
			$this->battery = new GsmBattery();
		}
		public function buyGSM(){
			echo "Този GSM с марка $this->brand и модел $this->model е на цена $this->price лв.<br/>";
			$this->battery->batteryInfo();		
		}
	}
	
	class GsmBattery {
		public $izdr;
		public $type;
		public $charge;
	
		public function __construct($i = '1500', $t = 'litium-polimer', $ch = '250'){
			$this->izdr = $i;
			$this->type = $t;
			$this->charge = $ch;
		}
		
		public function chargeBattery($time){
			$this->charge += $time*10; //$this->charge = $this->charge + $time;
		}
		
		public function batteryInfo(){
			echo "Батерия тип: $this->type;<br>Издръжливост: $this->izdr;<br>Зареждане: $this->charge.";
		}
	 
	}
	
	
	$buy = new Gsm();
	$buy->buyGSM();
	$buy->battery->charge += 100;
	$buy->battery->batteryInfo();
	