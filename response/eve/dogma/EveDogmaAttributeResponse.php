<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 17:38
 */

namespace ESC\response\eve\dogma;

use ESC\response\Response;

class EveDogmaAttributeResponse extends Response
{
    public $attributeId;
    public $name;
    public $description;
    public $iconId;
    public $defaultValue;
    public $published;
    public $displayName;
    public $unitId;
    public $stackable;
    public $highIsGood;
}
