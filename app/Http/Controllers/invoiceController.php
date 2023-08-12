<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class InvoiceController extends Controller
{
    public function invoice($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);

        $pdf = PDF::loadView('invoice', compact('reservation'));
        $filename = 'Reservation-' . $reservation_id.'-invoice'.'.pdf';

        $pdf->save(storage_path('app/invoices/' . $filename));

        return $pdf->download($filename);
    }
}
