<?php

namespace Modules\News\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateNewsRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'author_name' => 'required',
            'category' => 'required',
            'emergency_level' => 'required',
            'body' => 'required'
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

    public function translationMessages()
    {
        return [];
    }
}
