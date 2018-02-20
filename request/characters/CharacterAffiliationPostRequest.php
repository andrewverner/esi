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

class CharacterAffiliationPostRequest extends Request
{
    public $type = Request::METHOD_POST;

    public function __construct(array $ids)
    {
        $this->url = "/characters/affiliation/";
        $this->data = json_encode($ids);
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterAffiliationStruct::class);
    }
}
