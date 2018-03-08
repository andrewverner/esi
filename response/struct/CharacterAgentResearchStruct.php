<?php

namespace ESC\response\struct;

class CharacterAgentResearchStruct extends Struct
{
    public $agentId;
    public $pointsPerDay;
    public $remainderPoints;
    public $skillTypeId;
    public $startedAt;

    protected $dateTimeProps = ['startedAt'];
}
