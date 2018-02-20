<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:50
 */

namespace ESC\response\corporations;

use ESC\response\Response;

class CorporationResponse extends Response
{
    public $name;
    public $ticker;
    public $memberCount;
    public $ceoId;
    public $allianceId;
    public $description;
    public $taxRate;
    public $dateFounded;
    public $creatorId;
    public $url;
    public $factionId;
    public $homeStationId;
    public $shares;

    public function __construct($data)
    {
        parent::__construct($data);
        if ($this->dateFounded) {
            $this->dateFounded = new \DateTime($this->dateFounded);
        }
    }
}
