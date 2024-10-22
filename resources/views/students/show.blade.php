@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
<div class="card">
<div class="card-header">تفاصيل الطالب</div>
<div class="card-body">
<div class="card-title">
    <h5>اسم الطالب: {{ $students->name }} </h5>
    <p>العنوان : {{$students->address}}</p>
    <p>الهاتف : {{$students->mobile}}</p>
</div>
</div>
</div>
<div class="row justify-content-center mt-3">
<a href="{{url('/students')}}" class=" col-12 col-md-2 btn btn-dark btn-sm">رجوع للقائمة</a>

</div>
</div>

@endsection
