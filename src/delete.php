<?php
require_once 'contact.php';


$res = Contact::delete(4);
echo $res;
?>