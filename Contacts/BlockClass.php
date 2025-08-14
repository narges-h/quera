<?php

class Blocke extends Contact implements JsonExportable
{
    public $reason;

    public function exportToJson()
    {
        $data = [
            "phone" => $this->phone,
            "reason" => $this->reason,
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}