<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMusicRequest extends FormRequest
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
            'title' => 'sometimes|required|string|max:255',
            'artist' => 'sometimes|required|string|max:255',
            'release_year' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
            'duration' => 'sometimes|required|numeric|min:1',
            'lyrics' => 'sometimes|required|string',
            'genre' => 'sometimes|required|in:pop,rock,jazz,classical',
            'is_explicit' => 'sometimes|required|boolean',
            'release_date' => 'sometimes|required|date',
            'popularity' => 'sometimes|required|numeric|min:0|max:10',
            'description' => 'sometimes|required',
        ];
    }
}
