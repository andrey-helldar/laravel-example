<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => 'required|',
            'image_id',
            'user_id',
            'seo_keywords',
            'seo_description',
            'title',
            'description',
            'text',
            'rating',
            'is_enabled',
            'published_at',
        ];
    }
}
