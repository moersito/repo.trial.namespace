<?php

#[AKSES CLASS DARI `NAMESPACE` DENGAN CARA 'UNQUALIFIED NAME']
namespace Blog;

class Dashboard 
{
    public static function tampil() {
        return 'Nama `Class` ini adalah '. __CLASS__;
    }
    public function see() {
        return $this::tampil();
    } 
}

// Instance Object Usage Namespace
$dash = new Dashboard;

// Printing & Access
print __FILE__ .'<br/>';
print $dash::tampil();
print '<br/>';
print $dash->see(); 

#[END]
