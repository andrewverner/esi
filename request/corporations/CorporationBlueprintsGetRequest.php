<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:10
 */

namespace ESC\request\corporations;

use ESC\response\struct\BlueprintScruct;

class CorporationBlueprintsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/blueprints/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = BlueprintScruct::class;
}
