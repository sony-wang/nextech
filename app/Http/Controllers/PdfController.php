<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Log;


class PdfController extends Controller
{
     public function index() 
    {
        $type = $_GET["type"];
        $data = [];
        if($type == 's'){
            $data = json_decode($_GET["val"], JSON_UNESCAPED_UNICODE);
        }else{
            $data = json_decode($_GET["val"], JSON_UNESCAPED_UNICODE);
            Log::info($data);
        }
        $company = $_GET["val2"];
        $pdf    = new Dompdf();
        $html   = view ('dompdf', ['type' =>$type,'getData' => $data,'company' => $company]);

        // return $html;

        $customPaper = array(0,0,297*3,210*3);
        $pdf->set_paper($customPaper);

        $pdf->loadHtml ($html);
        $pdf->render ();
        $pdf->stream($company);
    }
}
