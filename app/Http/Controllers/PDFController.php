<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\Models\Choice; 
use App\Models\Blank;

class PDFController extends Controller
{
    public function make()
    {
        $choices = Choice::inRandomOrder() 
                ->take(20) 
                ->get(); 
        $blanks = Blank::inRandomOrder() 
                ->take(10) 
                ->get(); 
        // dd($choices);
        $html = view('pdf.papers', compact('choices','blanks'));
    	return PDF::loadHTML($html)->download('2.pdf');
    	
		// return $pdf->download('papers.pdf');

    	// create pdf class

    	// send html to pdf class

    	//respond with pdf back to the browser

    	//send to the file system
    }
}
