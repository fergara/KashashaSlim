<?php

namespace Data;

class Bar {

	public function create() {
		$arnesto = new \Model\Bar(array('name' => 'Arnesto'));
		$arnesto->save();
	}
	
}

?>