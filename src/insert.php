<?php
require_once 'contact.php';


$res = Contact::insert(6, '098765432123', 'Komi');
echo $res;
?>