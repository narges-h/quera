<?php

class Contact{
    public $phone;
    public $name;

    function phoneValidate(): bool
    {
        if(strlen($this->phone) == 11 && substr($this->phone, 0, 2) == "09" && is_numeric($this->phone)){
            return true;
        }else{
            return false;
        }
    }

}

