@extends('includes.layout')
@section('content')
<div class="card" dir="rtl">
    <div class="card-header">إضافة عملية دفع</div>
    <div class="card-body">
        <form id="paymentForm" action="{{ url('payments') }}" method="POST">

              @csrf
            <div class="row mb-3">
            <label >رقم التسجيل</label>
            <!-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control" required> -->
             <select name="enrollment_id" id="enrollment_id" class="form-control" required>
                 <option value="">أختر رقم التسجيل</option>
                @foreach ($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
                @endforeach
             </select>
            </div>
            <div class="row mb-3">
            <label >تاريخ الدفع</label>
            <input type="text" name="paid_date" id="paid_date" class="form-control" required>
            </div>
            <div class="row mb-3">
            <label >القيمة</label>
            <input type="text" name="mount" id="mount" class="form-control" required>
            </div>
            <div class="row justify-content-between">
                <input type="submit" id="submitBtn" value="حفظ" class="btn btn-success col-12 col-md-1" disabled>
                <a href="{{url('/payments')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('paymentForm');
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
