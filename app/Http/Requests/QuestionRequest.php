<?php

namespace App\Http\Requests;

class QuestionRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
           // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'qcategory_id' => 'required|numeric',
                    'title' => 'required|min:3',
                    'answer' => 'required|min:3',
                    
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'title.min' => '题目必须至少三个字符',
            'answer.min' => '答案至少三个字符',
        ];
    }
}
