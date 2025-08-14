<?php
require_once 'JsonExportable.php';

class Company extends Contact implements JsonExportable
{
    public $workPhone;
    function workPhoneValidate(): bool
    {
        if(strlen($this->workPhone) == 10 && substr($this->workPhone, 0, 3) == "021" && is_numeric($this->workPhone)){
            return true;
        }else{
            return false;
        }
    }


    public function exportToJson()
    {
        $data = [
            "name" => $this->name,
            "phone" => $this->phone,
            "workPhone" => $this->workPhone,
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}

