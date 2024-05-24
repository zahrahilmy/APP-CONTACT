<?php
require_once 'contact.php';


$res = Contact::update(1, '0xxxxxxxxxxx', 'Jamal Kim');
echo $res;
?>