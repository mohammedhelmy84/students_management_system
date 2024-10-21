@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
<div class="card">
<div class="card-header">تفاصيل المقرر</div>
<div class="card-body">
<div class="card-title">
    <h5>اسم المقرر: {{ $courses->name }} </h5>
    <p>المنهج : {{$courses->syllabus}}</p>
    <p>المدة : {{$courses->duration}}</p>
</div>
</div>
</div>
<div class="row justify-content-center mt-3">
<a href="{{url('/courses')}}" class=" col-12 col-md-2 btn btn-dark btn-sm">رجوع للقائمة</a>

</div>
</div>

@endsection
