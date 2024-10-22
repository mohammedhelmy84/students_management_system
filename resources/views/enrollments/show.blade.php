@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
<div class="card">
<div class="card-header">تفاصيل التسجيل</div>
<div class="card-body">
<div class="card-title">
    <h5> رقم التسجيل: {{ $enrollments->enroll_no }} </h5>
    <p>الطالب : {{$enrollments->student->name}}</p>
    <p>تاريخ الانضمام : {{$enrollments->join_date}}</p>
    <p>المصاريف: {{$enrollments->fee}}</p>
</div>
</div>
</div>
<div class="row justify-content-center mt-3">
<a href="{{url('/enrollments')}}" class=" col-12 col-md-2 btn btn-dark btn-sm">رجوع للقائمة</a>

</div>
</div>

@endsection
