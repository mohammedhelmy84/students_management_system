@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
<div class="card">
<div class="card-header">تفاصيل المدرس</div>
<div class="card-body">
<div class="card-title">
    <h5>اسم المدرس: {{ $teachers->name }} </h5>
    <p>العنوان : {{$teachers->address}}</p>
    <p>الهاتف : {{$teachers->mobile}}</p>
</div>
</div>
</div>
<div class="row justify-content-center mt-3">
<a href="{{url('/teachers')}}" class=" col-12 col-md-2 btn btn-dark btn-sm">رجوع للقائمة</a>

</div>
</div>

@endsection
