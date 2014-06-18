<?php

class FileReader {
	
	public static function read(){
		// Parse without sections
        $ini_array = parse_ini_file("conn.ini");
        //print_r($ini_array);
        return $ini_array[constring];
	}
}

?>