<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 16:45
 */

namespace ESC\response\struct;

class CorporationMiningExtractionsStruct extends Struct
{
    public $structureId;
    public $moonId;
    public $extractionStartTime;
    public $chunkArrivalTime;
    public $naturalDecayTime;

    protected $dateTimeProps = [
        'extractionStartTime',
        'chunkArrivalTime',
        'naturalDecayTime'
    ];
}
