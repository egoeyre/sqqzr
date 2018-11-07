<?php

namespace App\Handlers;

use PDF;
use App\Models\Category;

class PDFCreateHandler
{
	public function make($folder, $paper, $category, $choices, $blanks, $questions)
	{
		$folder_name = "uploads/pdf/$folder/" . date("Ym/d", time());

        //makedir($folder_name);

        $upload_path = public_path() . '/' . $folder_name;

		$categoryname = Category::findorfail($category)->name;


		$papername = $categoryname . '_' . $paper->title .'_'. $paper->user_id . '_' . time() .  '.pdf';
		$answername = $categoryname . '答案_' . $paper->title .'_'. $paper->user_id . '_' . time() .  '.pdf';
		//$answer_name = $file_prefix . '_' . time() . '_' . $category . $name . '答案.pdf';

        // dd($choices);
        $html_paper = view('pdf.paper', compact('paper', 'choices', 'blanks', 'questions', 'categoryname'));
        $html_answer = view('pdf.answer', compact('paper', 'choices', 'blanks', 'questions', 'categoryname'));
    	PDF::loadHTML($html_paper)
            ->setOption('margin-bottom', 25)
            ->setOption('margin-left', 19)
            ->setOption('margin-right', 19)
            ->setOption('margin-top', 25)
            ->save("$folder_name/$papername");
        PDF::loadHTML($html_answer)->save("$folder_name/$answername");



    	//PDF::loadHTML($html_answer)->save($filename);

    	return [
            'paperpath' => config('app.url') . "/$folder_name/$papername",
            'answerpath' => config('app.url') . "/$folder_name/$answername",
        ];

	}

}