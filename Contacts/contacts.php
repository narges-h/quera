<?php
require_once 'ContactClass.php';
require_once 'CompanyClass.php';
require_once 'BlockClass.php';


$data = [];

function addContact(&$data)
{
    $contactClass = new Contact();
    $contactClass->phone = readline("Enter phone number:");
    if(!$contactClass->phoneValidate()){
        echo "Invalid phone number\n";
        return;
    }
    $contactClass->name = readline("Enter name:");
    array_push($data, $contactClass);
}

function showContact($data)
{
    foreach ($data as $contact) {
        if (get_class($contact) === 'Contact') {
            echo $contact->name . "\n";
            echo $contact->phone . "\n";
        }
    }
}

function addCompany(&$data)
{
    $companyClass = new Company();
    $companyClass->phone = readline("Enter phone number:");
    if(!$companyClass->phoneValidate()){
        echo "Invalid phone number\n";
        return;
    }
    $companyClass->name = readline("Enter name:");
    $companyClass->workPhone = readline("Enter work phone:");
    if(!$companyClass->workPhoneValidate()){
        echo "Invalid work phone\n";
        return;
    }
    array_push($data, $companyClass);
}

function showCompany($data)
{
    foreach ($data as $company) {
        if($company instanceof Company){
            echo $company->name . "\n";
            echo $company->phone . "\n";
            echo $company->workPhone . "\n";
        }
    }
}

function addBlock(&$data){
    $blockClass = new Blocke();
    $blockClass->phone = readline("Enter phone number:");
//    if(!in_array($blockClass->phone, $data) ){
//        echo "not exist phone number\n";
//        return;
//    }
    $index = null;
    foreach ($data as $key => $contact) {
        if($contact instanceof Contact){
            if ($contact->phone === $blockClass->phone) {
                $index = $key;
                break;
            }
        }
    }
    if ($index === null) {
        echo "not exist phone number\n";
        return;
    }
    $blockClass->reason = readline("Enter reason:");
    unset($data[$index]);
    array_push($data, $blockClass);
}

function showBlock($data)
{
    foreach ($data as $block) {
        if($block instanceof Blocke){
            echo $block->name . "\n";
            echo $block->phone . "\n";
            echo $block->reason . "\n";
        }
    }
}

function showCompanyJson($data)
{
    foreach ($data as $item) {
//        if($item instanceof Company){
//            $item->exportToJson();
//        }
//        if($item instanceof Blocke){
//            $item->exportToJson();
//        }
        if($item instanceof JsonExportable){
            $item->exportToJson();
        }
    }
}

while (true) {
    echo "Welcome!\n";
    echo "Add contact [1]\n";
    echo "Show contacts [2]\n";
    echo "Add company [3]\n";
    echo "Show company [4]\n";
    echo "Block contact [5]\n";
    echo "Show block list [6]\n";
    echo "Export to json [7]\n";


    echo "Exit [0]\n";
    $input = readline();

    if ($input == "1") {
        addContact($data);
    } else if ($input == "2") {
        showContact($data);
    } else if ($input == "3") {
        addCompany($data);
    } else if ($input == "4") {
        showCompany($data);
    } else if ($input == "5") {
        addBlock($data);
    } else if ($input == "6") {
        showBlock($data);
    } else if ($input == "7") {
        showCompanyJson($data);
    } else if ($input == "0") {
        break;
    }
}
