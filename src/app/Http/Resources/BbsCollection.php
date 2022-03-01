<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BbsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $bbese = [];

        foreach ($this->resource as $resource) {
            $bbese[] = [
                'bbs_id' => $resource->bbs_id,
                'name' => $resource->name,
            ];
        }

        return $bbese;
    }
}
