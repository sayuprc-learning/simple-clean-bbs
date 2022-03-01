<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bbs\BbsAddCommentRequest;
use App\Http\Requests\Bbs\BbsCreateRequest;
use App\Http\Requests\Bbs\BbsShowRequest;
use App\Http\Resources\BbsCollection;
use App\Http\Resources\BbsResource;
use App\Http\UseCase\Bbs\BbsAddCommentUseCase;
use App\Http\UseCase\Bbs\BbsCreateUseCase;
use App\Http\UseCase\Bbs\BbsGetListUseCase;
use App\Http\UseCase\Bbs\BbsShowUseCase;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(BbsGetListUseCase $interactor)
    {
        $bbses = $interactor();

        $viewModel = new BbsCollection($bbses);

        return view('bbs.index', ['viewModel' => $viewModel]);
    }

    public function create(BbsCreateRequest $request, BbsCreateUseCase $interactor)
    {
        $bbs = $request->makeBbs();

        $created = $interactor($bbs);

        return redirect('/bbs/' . $created->bbs_id);
    }

    public function show(BbsShowRequest $request, BbsShowUseCase $interactor)
    {
        $id = $request->makeBbsId();

        $bbs = $interactor($id);

        $viewModel = new BbsResource($bbs);

        return view('bbs.show', ['viewModel' => $viewModel]);
    }

    public function addComment(BbsAddCommentRequest $request, BbsAddCommentUseCase $interactor)
    {
        $comment = $request->makeComment();

        $created = $interactor($comment);

        return redirect('/bbs/' . $created->bbs_id);
    }
}
