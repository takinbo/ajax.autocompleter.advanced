<?php
$addressbook = array();

$addressbook[] = array('name' => "Bunmi Odunayo", 'phone' => "2348012345678");
$addressbook[] = array('name' => "Gbemi Oluniyi", 'phone' => "2348012345678");
$addressbook[] = array("name" => "Chiazor Odigbo", "phone" => "2348012345678");
$addressbook[] = array("name" => "Chris Haruna", "phone" => "2348012345678");
$addressbook[] = array("name" => "Dachung Bot", "phone" => "2348012345678");
$addressbook[] = array("name" => "Evi Akpotoro", "phone" => "2348012345678");
$addressbook[] = array("name" => "Gbadebo Ogunlesi", "phone" => "2348012345678");
$addressbook[] = array("name" => "Isa Mohammed", "phone" => "2348012345678");
$addressbook[] = array("name" => "Yunusa Dogonyaro", "phone" => "2348012345678");

header('Content-Type: application/json');
print json_encode($addressbook);
?>