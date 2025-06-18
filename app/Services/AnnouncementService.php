<?php

namespace App\Services;

use App\Repositories\AnnouncementRepositoryMysql;

class AnnouncementService extends BaseService
{
    public function __construct(AnnouncementRepositoryMysql $announcementService){
        parent::__construct($announcementService);
    }

}
