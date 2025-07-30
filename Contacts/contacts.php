<?php
require_once 'contactClass.php';

$array = [];
while (true){
    echo "Welcome!\n";
    echo "Add contact [1]\n";
    echo "Show contacts [2]\n";
    echo "Exit [0]\n";
    $input = readline();
    if ($input == "1") {
        $contactClass = new Contacts();
        $contactClass->phone = readline("Enter phone number:");
        $contactClass->name = readline("Enter name:");
//        $array[$contactClass->phone] = $contactClass->name;
        array_push($array, $contactClass);
    }
    else if ($input == "2") {
        foreach ($array as $contact){
            echo $contact->name . "\n";
            echo $contact->phone . "\n";
        }
    }
    else if ($input == "0") {
        break;
    }
}



