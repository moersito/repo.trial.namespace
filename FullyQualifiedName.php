<?php

#[AKSES CLASS DARI `NAMESPACE` DENGAN CARA 'FULLY QUALIFIED NAME']

namespace Home;

// Call Other File
require_once '/Database/Connection.php';

// Instance Object Usage Namespace
$conn = new \Database\Connection; #[yang inilah path `Fully Qualified Name`, tidak terpengaruh oleh namespace Home]

// Printing & Access
print __FILE__ .'<br/>';
print $conn::tampil();
print '<br/>';
print $conn->see();

#[END]
