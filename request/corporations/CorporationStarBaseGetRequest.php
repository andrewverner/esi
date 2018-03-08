<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:26
 */

namespace ESC\request\corporations;

use ESC\response\corporations\CorporationStarBaseResponse;

class CorporationStarBaseGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/starbases/{starbase_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CorporationStarBaseResponse::class;

    public function __construct($corporationId, $starBaseId)
    {
        parent::__construct($corporationId);
        $this->url = str_replace('{starbase_id}', $starBaseId, $this->url);
    }
}
