<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 13:21
 */

namespace ESC\core\sorter;

interface ISorter
{
    /**
     * @param array $array
     * @return array
     */
    public function sort(array $array);
}
