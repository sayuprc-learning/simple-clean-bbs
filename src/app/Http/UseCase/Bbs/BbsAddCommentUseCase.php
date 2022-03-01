<?php

namespace App\Http\UseCase\Bbs;

use App\Services\Bbs\CommentService;
use App\Models\Comment;

class BbsAddCommentUseCase
{
    public function __invoke(Comment $comment): Comment
    {
        $commentId = CommentService::getNextCommentId($comment->bbs_id);

        $comment->comment_id = $commentId;
        $comment->save();

        return $comment;
    }
}
