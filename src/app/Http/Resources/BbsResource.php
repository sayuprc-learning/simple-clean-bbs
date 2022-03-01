<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;

class BbsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $comments = [];
        foreach ($this->comments as $comment) {
            $comments[] = [
                'comment_id' => $comment->comment_id,
                'content' => $comment->content,
                'posted_at' => (new DateTime($comment->posted_at))->format('Y/m/d H:i:s'),
            ];
        }

        return [
            'bbs_id' => $this->bbs_id,
            'name' => $this->name,
            'comments' => $comments,
        ];
    }
}
