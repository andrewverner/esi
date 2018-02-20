<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:25
 */

namespace ESC\response\corporations;

use ESC\response\Response;
use ESC\response\struct\DivisionStruct;

class CorporationDivisionsResponse extends Response
{
    public $hangar = [];
    public $wallet = [];

    public function __construct($data)
    {
        foreach ($data->hangar as $division) {
            $this->hangar[] = new DivisionStruct($division);
        }
        foreach ($data->wallet as $division) {
            $this->wallet[] = new DivisionStruct($division);
        }
    }
}
