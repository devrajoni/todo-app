<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'title'=> [
                'required',
                'max:255',
            ],
            'description'=> [
                'nullable',
            ],
            'started_at'=> [
                'nullable',
            ],
            'status'=> [
                'nullable',
            ],
        ];
    }
    public function persist(){
        $validated = $this->validated();
        $validated['user_id'] = auth()->user()->id;
        return $validated;
    }
}
