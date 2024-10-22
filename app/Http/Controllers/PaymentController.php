<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Payment;
use App\Models\EnrollmenT;
use stdClass;

class PaymentController extends Controller
{
    public function index(): View
    {
        $payments = Payment::all();
        return view ('payments.index')->with('payments', $payments);
    }

    public function create(): View
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create',compact('enrollments'));
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Added!');
    }
    public function show(string $id): View
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }
    public function edit(string $id): View
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        $payment = Payment::find($id);
        return view('payments.edit',compact('enrollments'))->with('payments', $payment);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payments')->with('flash_message', 'payment Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}
