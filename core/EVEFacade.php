<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 12:59
 */

namespace ESC\core;

use ESC\ESI;

class EVEFacade
{
    protected $id;
    protected $token;
    protected $esi;

    public function __construct($id = null, $token = null)
    {
        $this->id = $id;
        $this->token = $token;
        $this->esi = ESI::app();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setToken($token) {
        $this->token = $token;
    }
}
