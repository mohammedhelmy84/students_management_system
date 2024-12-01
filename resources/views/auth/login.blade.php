<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel= "stylesheet"
        href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel= "stylesheet"
        href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/images/account.png') }}">
    <title>{{config('app.name')}}</title>
    <style>

    </style>
</head>

<body>
    <div class="container" dir="rtl">
      <div class="row text-center">
        <h3 class="mt-5">البرنامج الإلكتروني لإدارة الطلاب</h3>
      </div>
        <div class="row mt-5 py-2">
            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                    <input type="submit" class="btn btn-success mx-auto" value="دخول" aria-label="Username"
                        aria-describedby="addon-wrapping" style="border-radius:5px !important;  width:110px !important;">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
