<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:17
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationAssetsNamesPostRequest extends CorporationRequest
{
    public $type = Request::METHOD_POST;

    protected $url = '/corporations/{corporation_id}/assets/names/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct($corporationId, array $ids)
    {
        parent::__construct($corporationId);
        $this->data = json_encode($ids);
    }
}
