<?php

namespace App\Observers;

use App\Models\Paper;


// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PaperObserver
{
    public function saving(Paper $paper)// PDFCreateHandler $pdf)
    {
        if ($paper->category_id) {
            $paper->bcategory_id = $paper->category_id;
            $paper->qcategory_id = $paper->category_id;
        }

        
    }

    public function updating(Paper $paper)
    {
        //
    }
}