<?php

namespace App\Services\Bbs;

use App\Models\Comment;

class CommentService
{
    public static function getNextCommentId(int $bbsId): int
    {
        $max = Comment::where('bbs_id', $bbsId)->max('comment_id') ?? 0;

        return $max + 1;
    }
}
