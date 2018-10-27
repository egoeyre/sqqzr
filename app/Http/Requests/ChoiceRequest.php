<?php

namespace App\Http\Requests;

class ChoiceRequest extends Request
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
                    'category_id' => 'required|numeric',
                    'title' => 'required|min:3',
                    'optiona' => 'required|min:1',
                    'optionb' => 'required|min:1',
                    'optionc' => 'required|min:1',
                    'optiond' => 'required|min:1',
                    'answer' => 'required|min:1',
                    
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
            'optiona.min' => '选项A内容必须至少一个字符',
            'optionb.min' => '选项B内容必须至少一个字符',
            'optionc.min' => '选项C内容必须至少一个字符',
            'optiond.min' => '选项D内容必须至少一个字符',
            'optiona.min' => '填入A或者B或者C或者D',
        ];
    }
}
