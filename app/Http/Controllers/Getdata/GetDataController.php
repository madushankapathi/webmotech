<?php

namespace App\Http\Controllers\Getdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Appointments;
use App\Models\Invoice;
use App\Models\Patients;
use App\Models\Receipt;


class GetDataController extends Controller
{
    public function getPatientData($externalPatientId){
            $firstAppointmentId = Appointments::where('external_patient_id', $externalPatientId)
                ->orderBy('appointment_date')
                ->value('appointment_id');
            //'first_appointment_id' => $firstAppointmentId,
            $invoiceNumber = Invoice::where('external_patient_id', $externalPatientId)->pluck('invoice_no');
            $totalReceipts = Receipt::where('external_patient_id', $externalPatientId)->sum('amount');
            $receiptNumbers = Receipt::where('external_patient_id', $externalPatientId)->pluck('receipt_id');
            $firstReceiptDate = Receipt::where('external_patient_id', $externalPatientId)->min('receipt_date');
            $firstInvoiceDate = Invoice::where('external_patient_id', $externalPatientId)->min('date');
            $firstAppointmentDate = Appointments::where('external_patient_id', $externalPatientId)->min('appointment_date');
            $patientCreatedDate = Patients::where('external_patient_id', $externalPatientId)->value('created_at');

            $responseArray = [
                'patient_id' => $externalPatientId,
                'first_appointment_id' => $firstAppointmentId,
                'invoice' => $invoiceNumber,
                'total_receipts' => $totalReceipts,
                'receipts' => $receiptNumbers,
                'first_receipt_date' => $firstReceiptDate,
                'first_invoice_date' => $firstInvoiceDate,
                'first_appointment_date' => $firstAppointmentDate,
                'patient_created_date' => $patientCreatedDate,
            ];

        return response()->json($responseArray);
    }
}
