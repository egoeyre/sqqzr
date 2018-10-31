<?php

namespace App\Http\Requests;

class BlankRequest extends Request
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
                    'bcategory_id' => 'required|numeric',
                    'title' => 'required|min:3',
                    'answer' => 'required|min:1',
                    'amount' => 'required|numeric'
                    
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
            'answer.min' => '答案至少一个字符',
            'amount.numeric' => '填空数量必须是数字'
        ];
    }
}
