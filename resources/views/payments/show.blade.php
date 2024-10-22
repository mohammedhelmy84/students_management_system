@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
<div class="card">
<div class="card-header">تفاصيل عملية الدفع</div>
<div class="card-body">
<div class="card-title">
    <h5>رقم التسجيل : {{$payments->enrollment->enroll_no}}</h5>
    <p>تاريخ الدفع : {{$payments->paid_date}}</p>
    <p>القيمة: {{$payments->mount}}</p>
</div>
</div>
</div>
<div class="row justify-content-center mt-3">
<a href="{{url('/payments')}}" class=" col-12 col-md-2 btn btn-dark btn-sm">رجوع للقائمة</a>

</div>
</div>

@endsection
