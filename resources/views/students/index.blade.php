@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة الطلاب</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> >> صفحة التلاميذ</h5>
                        <a href="{{route('students.create')}}" class="btn btn-info btn-sm">+ إضافة طالب جديد</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم الطالب</th>
                                        <th scope="col">العنوان</th>
                                        <th scope="col">الموبايل</th>
                                        <th scope="col">التعديلات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>تعديل</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
