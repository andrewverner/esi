<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:17
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationAssetsLocationsPostRequest extends Request
{
    public $type = Request::METHOD_POST;

    public function __construct($id, array $ids)
    {
        $this->url = "/corporations/{$id}/assets/locations/";
        $this->data = json_encode($ids);
    }
}
