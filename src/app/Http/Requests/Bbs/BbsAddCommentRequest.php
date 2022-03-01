<?php

namespace App\Http\Requests\Bbs;

use App\Models\Comment;
use DateTime;
use Illuminate\Foundation\Http\FormRequest;

class BbsAddCommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bbs_id' => 'required',
            'content' => 'required|max:1024',
        ];
    }

    public function makeComment(): Comment
    {
        return new Comment(
            [
                ...$this->validated(),
                'posted_at' => (new DateTime())->format('Y/m/d H:i:s')
            ]
        );
    }
}
