<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 13:39
 */

namespace ESC\core\sorter;

class CommonSorter implements ISorter
{
    private $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    public function sort(array $array)
    {
        $data = [];
        foreach ($array as $el) {
            if (array_key_exists($this->field, (array)$el)) {
                $key = is_array($el) ? $el[$this->field] : $el->{$this->field};
                $data[$key][] = $el;
            }
        }

        return $data;
    }
}
