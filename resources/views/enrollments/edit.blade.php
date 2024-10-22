@extends('includes.layout')
@section('content')
<div class="card" dir=rtl>
    <div class="card-header">تعديل بيانات التسجيل</div>
    <div class="card-body">
        <form action="{{ url('enrollments/' .$enrollments->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
            <div class="row mb-3">
                <label >رقم التسجيل</label>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}">
            </div>
           <div class="row mb-3">
           <label >الطالب</label>
           <!-- <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student->name}}" > -->
           <select name="student_id" id="student_id" class="form-control" required>
                 <option value="">أختر الطالب</option>
                @foreach ($students as $id => $name)
                <option value="{{ $id }}" {{ $enrollments->student_id == $id ? 'selected' : '' }}>{{ $name }}</option>

                @endforeach
             </select>
        </div>
            <div class="row mb-3">
            <label >تاريخ الانضمام</label>
            <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrollments->join_date}}">
            </div>
            <div class="row mb-3">
            <label > المصاريف</label>
            <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}">
            </div>

            <div class="row justify-content-between">
                <input type="submit"  value="تعديل" class="btn btn-success col-12 col-md-1" >
                <a href="{{url('/enrollments')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop
