<?php

namespace App\Services;

use App\Repositories\AnnouncementRepository;

class AnnouncementService extends BaseService
{
    public function __construct(AnnouncementRepository  $announcementService){
        parent::__construct($announcementService);
    }

}
