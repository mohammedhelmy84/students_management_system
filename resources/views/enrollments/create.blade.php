@extends('includes.layout')
@section('content')
<div class="card" dir="rtl">
    <div class="card-header">إضافة تسجيل</div>
    <div class="card-body">
        <form id="enrollmentForm" action="{{ url('enrollments') }}" method="POST">

              @csrf
            <div class="row mb-3">
            <label >رقم التسجيل</label>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control" required>
            </div>
            <div class="row mb-3">
            <label >الطالب</label>
            <!-- <input type="text" name="student_id" id="student_id" class="form-control" required> -->
             <select name="student_id" id="student_id" class="form-control" required>
                 <option value="">أختر الطالب</option>
                @foreach ($students as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
             </select>
            </div>
            <div class="row mb-3">
            <label >تاريخ الانضمام</label>
            <input type="text" name="join_date" id="join_date" class="form-control" required>
            </div>
            <div class="row mb-3">
            <label >المصاريف</label>
            <input type="text" name="fee" id="fee" class="form-control" required>
            </div>
            <div class="row justify-content-between">
                <input type="submit" id="submitBtn" value="حفظ" class="btn btn-success col-12 col-md-1" disabled>
                <a href="{{url('/enrollments')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('enrollmentForm');
        const submitBtn = document.getElementById('submitBtn');
        const inputs = form.querySelectorAll('input[required]');

        function checkFormValidity() {
            let isValid = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                }
            });
            submitBtn.disabled = !isValid;
        }

        inputs.forEach(input => {
            input.addEventListener('input', checkFormValidity);
        });

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
</script>
@endsection
