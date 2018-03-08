<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:17
 */

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterAffiliationStruct;

class CharacterAffiliationPostRequest extends CharacterRequest
{
    public $type = Request::METHOD_POST;

    protected $url = '/characters/affiliation/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterAffiliationStruct::class;

    public function __construct(array $ids)
    {
        $this->data = json_encode($ids);
    }
}
