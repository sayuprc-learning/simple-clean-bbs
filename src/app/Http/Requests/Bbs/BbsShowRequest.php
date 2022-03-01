<?php

namespace App\Http\Requests\Bbs;

use Illuminate\Foundation\Http\FormRequest;

class BbsShowRequest extends FormRequest
{
    public function validationData()
    {
        return [...$this->request->all(), 'bbs_id' => $this->bbs_id];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bbs_id' => 'required',
        ];
    }

    public function makeBbsId(): int
    {
        return $this->validated('bbs_id');
    }
}
