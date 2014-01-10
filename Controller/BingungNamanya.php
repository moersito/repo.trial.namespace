<?php

namespace Controller;

use Database\Connection;

$conn = new Connection();
 
print __FILE__ .'<br/>'; 
print $conn::tampil();
