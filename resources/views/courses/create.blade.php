@extends('includes.layout')
@section('content')
<div class="card" dir="rtl">
    <div class="card-header">إضافة مقرر</div>
    <div class="card-body">
        <form id="courseForm" action="{{ url('courses') }}" method="POST">

              @csrf
            <div class="row mb-3">
            <label >المقرر</label>
            <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="row mb-3">
            <label >المنهج</label>
            <input type="text" name="syllabus" id="syllabus" class="form-control" required>
            </div>
            <div class="row mb-3">
            <label >المدة</label>
            <input type="text" name="duration" id="duration" class="form-control" required>
            </div>
            <div class="row justify-content-between">
                <input type="submit" id="submitBtn" value="حفظ" class="btn btn-success col-12 col-md-1" disabled>
                <a href="{{url('/courses')}}" class=" col-12 col-md-1 btn btn-dark btn-md">إلغاء</a>

            </div>

        </form>
    </div>
</div>

@stop

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('courseForm');
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
