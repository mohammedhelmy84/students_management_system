@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('success') }}</strong>
            </div>
        @endif

        @if (session()->has('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('warning') }}</strong>
            </div>
        @endif
        <div class="row py-2">
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" id="addon-wrapping"
                        style="border-radius:5px !important; width:110px !important; background-color:hotpink; color:white; font-weight:bold;">الاسم</span>
                    <input type="text" name="name" class="form-control" style="border-radius:5px !important;"
                        placeholder="اسم المستخدم" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" id="addon-wrapping"
                        style="border-radius:5px !important;  width:110px !important; background-color:hotpink; color:white; font-weight:bold;">البريد
                        الالكتروني</span>
                    <input type="text" name="email" class="form-control" style="border-radius:5px !important;"
                        placeholder="البريد الالكتروني" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" id="addon-wrapping"
                        style="border-radius:5px !important;  width:110px !important; background-color:hotpink; color:white; font-weight:bold;">كلمة
                        السر</span>
                    <input type="text" name="password" class="form-control" style="border-radius:5px !important;"
                        placeholder="كلمة السر" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" id="addon-wrapping"
                        style="border-radius:5px !important;  width:110px !important; background-color:hotpink; color:white; font-weight:bold;">تأكيد
                        كلمة السر</span>
                    <input type="text" name="confirm_password" class="form-control" style="border-radius:5px !important;"
                        placeholder="تأكيد كلمة السر" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap my-2">
                    <input type="submit" class="btn btn-success mx-auto" value="إنشاء الحساب" aria-label="Username"
                        aria-describedby="addon-wrapping" style="border-radius:5px !important;  width:110px !important;">
                </div>
            </form>
        </div>
    </div>
@endsection
