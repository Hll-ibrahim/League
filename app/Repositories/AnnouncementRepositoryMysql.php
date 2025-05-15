<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Contracts\AnnouncementRepositoryInterface;

class AnnouncementRepositoryMysql extends BaseRepositoryMysql implements AnnouncementRepositoryInterface
{
    public function __construct(Announcement $model){
        parent::__construct($model);
    }

}
