<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:38
 */

namespace ESC\response\struct;

class CorporationMedalStruct extends Struct
{
    public $medalId;
    public $title;
    public $description;
    public $creatorId;
    public $createdAt;

    protected $dateTimeProps = ['createdAt'];
}
