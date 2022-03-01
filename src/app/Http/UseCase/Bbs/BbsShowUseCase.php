<?php

namespace App\Http\UseCase\Bbs;

use App\Models\Bbs;

class BbsShowUseCase
{
    public function __invoke(int $bbsId): Bbs
    {
        $bbs = Bbs::find($bbsId);

        return $bbs;
    }
}
