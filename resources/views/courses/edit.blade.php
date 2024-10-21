@extends('includes.layout')
@section('content')
<div class="card" dir=rtl>
    <div class="card-header">تعديل بيانات المقرر</div>
    <div class="card-body">
        <form action="{{ url('courses/' .$courses->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
            <div class="row mb-3">
                <label >المقرر</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$courses->name}}">
            </div>
           <div class="row mb-3">
           <label >المنهج</label>
           <input type="text" name="syllabus" id="syllabus" class="form-control" value="{{$courses->syllabus}}" >
           </div>
            <div class="row mb-3">
            <label >المدة</label>
            <input type="text" name="duration" id="duration" class="form-control" value="{{$courses->duration}}">
            </div>

            <div class="row justify-content-between">
                <input type="submit"  value="تعديل" class="btn btn-success col-12 col-md-1" >
                <a href="{{url('/courses')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop
