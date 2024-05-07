<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMusicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'duration' => 'required|numeric|min:1',
            'lyrics' => 'required|string',
            'genre' => 'required|in:pop,rock,jazz,classical',
            'is_explicit' => 'required|boolean',
            'release_date' => 'required|date',
            'popularity' => 'required|numeric|min:0|max:10',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
