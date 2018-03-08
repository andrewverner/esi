<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 13:22
 */

namespace ESC\core\sorter;

class LocationIDSorter implements ISorter
{
    /**
     * @param array $array
     * @return array
     */
    public function sort(array $array)
    {
        $data = [];
        foreach ($array as $el) {
            if (array_key_exists('locationId', (array)$el)) {
                $key = is_array($el) ? $el['locationId'] : $el->locationId;
                $data[$key][] = $el;
            }
        }

        return $data;
    }
}
