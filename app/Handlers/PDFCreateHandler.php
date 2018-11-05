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


		$papername = $categoryname . '_' . $paper->title .'_'. $paper->user_id . '_' . time() . '_' .  '.pdf';
		
		//$answer_name = $file_prefix . '_' . time() . '_' . $category . $name . '答案.pdf';

        // dd($choices);
        $html_paper = view('pdf.papers', compact('paper','choices','blanks','questions'));
        // $html_answer = view('pdf.answer', compact('choices','blanks','questions'));
    	PDF::loadHTML($html_paper)->save("$folder_name/$papername");



    	//PDF::loadHTML($html_answer)->save($filename);

    	return [
            'paperpath' => config('app.url') . "/$folder_name/$papername",
            'answerpath' => config('app.url') . "/$folder_name/$papername",
        ];

	}

}