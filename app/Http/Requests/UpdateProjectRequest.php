<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:projects,title|min:3|max:100',
            'post' => 'required|min:10|max:500',
            'author' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richiesto',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere meno di :max caratteri',
            'post.required' => 'Il progetto è richiesto',
            'post.min' => 'Il progetto deve avere : min caratteri',
            'post.max' => 'Il progetto deve avere meno di :max caratteri',
            'author.required' => 'Autore richiesto'
        ];
    }
}
