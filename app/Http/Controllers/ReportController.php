<?php

 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;


class ReportController extends Controller
{
    public function report1($pid)
    {
    $payment=Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin: 20px ; padding: 20px'>";
    $print .= "<h1 align='left'>Payment recipt</h1>";
    $print .= "<hr/>";
    $print .= "<p>Recipt No : " .$pid . " </br></p>";
    $print .= "<p>Date: " .$payment->paid_date. "</br></p>";
    $print .= "<p>Enrollment No: " .$payment->enroll_no. "</br></p>";
    $print .= "<p>Student: " .$payment->enrollment->student->name. "</br></p>";
    $print .= "<hr/>";
    $print .= "<table style='width: 100%'>";
    $print .= "<tr>";
    $print .= "<td>Description</td>";
    $print .= "<td>Mount</td>";
    $print .= "</tr>";
    $print .= "<tr>";
    $print .= "<td><h3>Constant still</h3></td>";
    $print .= "<td><h3>" .$payment->mount. "</h3></td>";
    $print .= "</tr>";
    $print .= "</table>";
    $print .= "<hr/>";
   /*  $print .= "<span>Printed by : <br>" .Auth::user()->name. "</br></p>"; */
    $print .= "<span>Print date : " .date('Y-m-d'). "</br></p>";
    $print .= "</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();
    }

}

