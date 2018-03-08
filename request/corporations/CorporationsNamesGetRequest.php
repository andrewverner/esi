<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:42
 */

namespace ESC\request\corporations;

class CorporationsNamesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/names/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct(array $ids)
    {
        parent::__construct();
        $this->url .= '?corporation_ids=' . implode(',', $ids);
    }
}
