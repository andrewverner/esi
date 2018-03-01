<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:01
 */

namespace ESC\response\alliances;

use \ESC\response\Response;

class AllianceGetResponse extends Response
{
    public $name;
    public $creatorId;
    public $creatorCorporationId;
    public $ticker;
    public $dateFounded;
    public $executorCorporationId;

    protected $dateTimeProps = ['dateFounded'];
}
