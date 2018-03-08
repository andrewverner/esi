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

    protected $dateTimeProps = ['createDate'];
}
