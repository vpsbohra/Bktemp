<?php

namespace Classes;

use mikehaertl\pdftk\Pdf;

class createPDF{

    public function create($data){
      
        $filename = "pdf".rand(200,120000).'.pdf';
        $path  = 'C:/Users/dbug/Documents/Manpreet/Mike Croak  Sanjay Upwork  Laravel/Feb23 2022/bkassistant_web-master/' ;

        $pdf = new Pdf($path.'CACB Ch7 BK Assistant Finalized Packet.pdf');   
        $pdf->fillForm($data)
        ->allow('AllFeatures')
        ->needAppearances()
        ->saveAs($path .$filename);

        $error =   $pdf->getError();

        return $filename;
    }

}