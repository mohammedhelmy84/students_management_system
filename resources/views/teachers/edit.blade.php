@extends('includes.layout')
@section('content')
<div class="card" dir=rtl>
    <div class="card-header">تعديل بيانات المدرس</div>
    <div class="card-body">
        <form action="{{ url('teachers/' .$teachers->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
            <div class="row mb-3">
                <label >الإسم</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$teachers->name}}">
            </div>
           <div class="row mb-3">
           <label >العنوان</label>
           <input type="text" name="address" id="address" class="form-control" value="{{$teachers->address}}" >
           </div>
            <div class="row mb-3">
            <label >الهاتف</label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{$teachers->mobile}}">
            </div>

            <div class="row justify-content-between">
                <input type="submit"  value="تعديل" class="btn btn-success col-12 col-md-1" >
                <a href="{{url('/teachers')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop
