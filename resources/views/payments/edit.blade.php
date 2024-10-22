@extends('includes.layout')
@section('content')
<div class="card" dir=rtl>
    <div class="card-header">تعديل بيانات عملية دفع</div>
    <div class="card-body">
        <form action="{{ url('payments/' .$payments->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
           <div class="row mb-3">
           <label >رقم التسجيل</label>
           <!-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control" value="{{$payments->enrollment->name}}" > -->
           <select name="enrollment_id" id="enrollment_id" class="form-control" required>
                 <option value="">أختر رقم التسجيل</option>
                @foreach ($enrollments as $id => $enroll_no)
                <option value="{{ $id }}" {{ $payments->enrollment_id == $id ? 'selected' : '' }}>{{ $enroll_no }}</option>

                @endforeach
             </select>
        </div>
            <div class="row mb-3">
            <label >تاريخ الدفع</label>
            <input type="text" name="paid_date" id="paid_date" class="form-control" value="{{$payments->paid_date}}">
            </div>
            <div class="row mb-3">
            <label > القيمة</label>
            <input type="text" name="mount" id="mount" class="form-control" value="{{$payments->mount}}">
            </div>

            <div class="row justify-content-between">
                <input type="submit"  value="تعديل" class="btn btn-success col-12 col-md-1" >
                <a href="{{url('/payments')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop
