@extends('includes.layout')

@section('content')
    <div class="mb-3">
        <h3 class="fw-bold fs-4 mb-3">نظام إدارة الطلاب</h3>
        <div class="row">
            <h3 class="text-center py-2" style="color:hotpink;">إحصائيات <i class="lar la-chart-bar"></i></h3>
            <div class="col-12 col-md-4">
                <div class="card border-0 maincard">
                    <div class="card-body py-4">
                        <h5 class="mb-2 fw-bold">
                            إداريون
                        </h5>
                        <p class="mb-2 fw-bold">
                            :العدد
                        </p>
                        <div class="mb-0">
                            <span class="badge text-success me-2">
                                +10.0%
                            </span>
                            <span class="fw-bold">
                               النسبة المسجلة
                            </span>
                        </div>
                    </div>
                </div>
            </div> <!--/col-->
            <div class="col-12 col-md-4">
                <div class="card border-0 maincard">
                    <div class="card-body py-4">
                        <h5 class="mb-2 fw-bold">
                            معلمون
                        </h5>
                        <p class="mb-2 fw-bold">
                            :العدد
                        </p>
                        <div class="mb-0">
                            <span class="badge text-success me-2">
                                +10.0%
                            </span>
                            <span class="fw-bold">
                                النسبة المسجلة
                            </span>
                        </div>
                    </div>
                </div>
            </div> <!--/col-->
            <div class="col-12 col-md-4">
                <div class="card border-0 maincard">
                    <div class="card-body py-4">
                        <h5 class="mb-2 fw-bold">
                            طلاب
                        </h5>
                        <p class="mb-2 fw-bold">
                            :العدد
                        </p>
                        <div class="mb-0">
                            <span class="badge text-success me-2">
                                +10.0%
                            </span>
                            <span class="fw-bold">
                                النسبة المسجلة
                            </span>
                        </div>
                    </div>
                </div>
            </div> <!--/col-->
        </div> <!--/row-->
        <h3 class="text-center py-2" style="color:hotpink;">مسئول البرنامج <i class="las la-user-lock"></i></h3>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive-sm">
                    <table class="table table-striped text-end table1" dir="rtl">
                        <thead>
                            <tr class="highlight text-end">
                                <th scope="col">الاسم</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">الموبايل</th>
                                <th scope="col">البريد الإلكتروني</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{asset('assets/images/id-card.png')}}" style="width:35px; height:35px;" alt=""> Aziza Tawfiq</td>
                                <td><img src="{{asset('assets/images/location.png')}}" style="width:35px; height:35px;" alt=""> Qena</td>
                                <td><img src="{{asset('assets/images/mobile.png')}}" style="width:35px; height:35px;" alt=""> 010</td>
                                <td><img src="{{asset('assets/images/email.png')}}" style="width:35px; height:35px;" alt=""> a@a.com</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/images/id-card.png')}}" style="width:35px; height:35px;" alt=""> Mohammed Helmy</td>
                                <td><img src="{{asset('assets/images/location.png')}}" style="width:35px; height:35px;" alt=""> Assiut</td>
                                <td><img src="{{asset('assets/images/mobile.png')}}" style="width:35px; height:35px;" alt=""> 01016440812</td>
                                <td><img src="{{asset('assets/images/email.png')}}" style="width:35px; height:35px;" alt=""> egyman930@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!--/mb-3-->
@endsection
