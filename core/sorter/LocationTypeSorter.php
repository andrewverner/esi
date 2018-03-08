<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 13:22
 */

namespace ESC\core\sorter;

class LocationTypeSorter implements ISorter
{
    /**
     * @param array $array
     * @return array
     */
    public function sort(array $array)
    {
        $data = [];
        foreach ($array as $el) {
            if (array_key_exists('locationType', (array)$el)) {
                $key = is_array($el) ? $el['locationType'] : $el->locationType;
                $data[$key][] = $el;
            }
        }

        return $data;
    }
}
