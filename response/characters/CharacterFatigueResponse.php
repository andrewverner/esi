<?php

namespace ESC\response\characters;

use ESC\response\Response;

class CharacterFatigueResponse extends Response
{
    public $jumpFatigueExpireDate;
    public $lastJumpDate;
    public $lastUpdateDate;

    protected $dateTimeProps = [
        'jumpFatigueExpireDate',
        'lastJumpDate',
        'lastUpdateDate'
    ];
}
