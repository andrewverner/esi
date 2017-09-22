<?php

namespace ESC\response\struct;

class BookmarkStruct extends Struct
{
    public $bookmarkId;
    public $createDate;
    public $creatorId;
    public $folderId;
    public $memo;
    public $note;
    public $ownerId;
    public $target;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->createDate = new \DateTime($this->createDate);
    }
}
