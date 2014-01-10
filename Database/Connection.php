<?php

namespace Database;

class Connection 
{	
	public function __construct() {
		return null;
	}
    public static function tampil() {
        return 'This classname is '. __CLASS__;
    }
    public function see() {
        return $this::tampil();
    }
}
