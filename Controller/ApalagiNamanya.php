<?php

namespace Controller;

use \Database\Connection as __Connection;

class ApalagiNamanya extends __Connection
{
    public function read() {
        return $this->see().' in file '. __FILE__;
    }
}
