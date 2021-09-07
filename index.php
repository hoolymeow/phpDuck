<?php

interface FlyBehavior {
		public function fly();
}
class FlyWithWings implements FlyBehavior {
	public function fly(){
		echo 'я лучу!';
	}
}
class FlyNoWay implements FlyBehavior {
	public function fly(){
		echo 'я не умею летать!';
	}
}
?>