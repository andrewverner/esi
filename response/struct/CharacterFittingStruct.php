<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 12:23
 */

namespace ESC\response\struct;

class CharacterFittingStruct extends Struct
{
    public $fittingId;
    public $name;
    public $description;
    public $shipTypeId;
    public $items;

    public function __construct($data)
    {
        parent::__construct($data);
        if ($this->items) {
            foreach ($this->items as &$item) {
                $item = new FittingItemStruct($item);
            }
        }
    }
}
