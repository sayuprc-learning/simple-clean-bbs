<?php

namespace App\Http\UseCase\Bbs;

use App\Models\Bbs;

class BbsCreateUseCase
{
    public function __invoke(Bbs $bbs): Bbs
    {
        $bbs->save();

        return $bbs;
    }
}
