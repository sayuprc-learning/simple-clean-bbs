<?php

namespace App\Http\UseCase\Bbs;

use App\Models\Bbs;

class BbsGetListUseCase
{
    public function __invoke()
    {
        $bbses = Bbs::all();

        return $bbses;
    }
}
