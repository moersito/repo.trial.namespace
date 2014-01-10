<?php

#[AKSES CLASS DARI `NAMESPACE` DENGAN CARA 'QUALIFIED NAME']

// Call Other File
require_once '/Database/Connection.php';

// Instance Object Usage Namespace
$conn = new Database\Connection;

// Printing & Access
print $conn::tampil();
print '<br/>';
print $conn->see();

#[END]

print '<br/><br/>';

// Call Other File
require_once '/Blog/Dashboard.php';

print '<br/><br/>';

// Call Other File
require_once 'FullyQualifiedName.php';

print '<br/><br/>';

// Call Other File
require_once 'Controller/BingungNamanya.php';

print '<br/><br/>';

// Call Other File
require_once 'Controller/ApalagiNamanya.php';

$foo = new Controller\ApalagiNamanya();

print $foo->read();


