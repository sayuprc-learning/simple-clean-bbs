<?php

namespace App\Http\Requests\Bbs;

use App\Models\Bbs;
use Illuminate\Foundation\Http\FormRequest;

class BbsCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:512',
        ];
    }

    public function makeBbs(): Bbs
    {
        return new Bbs($this->validated());
    }
}
