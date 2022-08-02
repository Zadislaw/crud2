<?php

namespace App\Http\Controllers;

use PDF;
use Mail;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data["email"] = "zadislaw@gmail.com";
        $data["title"] = "TestReport";
        $data["body"] = "This is a Demo";

        $pdf = PDF::loadView('emails.myTestMail', $data);

        Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });

        dd('Mail sent successfully');
    }
}
