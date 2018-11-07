<?php

namespace App\Http\Requests;

class PaperRequest extends Request
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
                    'title' => 'required|min:3',
                    'category_id'=> 'required|numeric',
                    'choice_score'=> 'required|numeric',
                    'choice_amount'=> 'required|numeric',
                    
                    'blank_amount'=> 'required|numeric',
                    'blank_score'=> 'required|numeric',
                    
                    'question_amount'=> 'required|numeric',
                    'question_score'=> 'required|numeric',
                    
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
            'choice_score.numeric'=> '选择题分值必须是数字',
            'choice_amount.numeric'=> '选择题数量必须是数字',
            'blank_amount.numeric'=> '填空题空数必须是数字',
            'blank_score.numeric'=> '填空题分值必须是数字',
            'question_amount.numeric'=> '问答题数量必须是数字',
            'question_score.numeric'=> '问答题分值必须是数字',
        ];
    }
}
