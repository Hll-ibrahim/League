<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Contracts\AnnouncementRepositoryInterface;

class AnnouncementRepositoryMysql extends BaseRepositoryMysql implements AnnouncementRepositoryInterface
{
    public function __construct(Announcement $model){
        parent::__construct($model);
    }

    public function lastAnnouncements(int $limit){
        return $this->model->orderBy('created_at','desc')->limit($limit)->get();
    }

}
