@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة التسجيلات</h2>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title"> >> صفحة التسجيلات</h5> -->
                        <a href="{{url('/enrollments/create')}}" class="btn btn-primary btn-sm">+ إضافة تسجيل جديد</a>
                        @if($enrollments->isNotEmpty())
                        <div class="table-responsive" >
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم رقم التسجيل</th>
                                        <th scope="col">الطالب</th>
                                        <th scope="col">تاريخ الانضمام</th>
                                        <th scope="col">المصاريف</th>
                                        <th scope="col">التعديلات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $enrollment)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$enrollment->enroll_no}}</td>
                                        <td>{{$enrollment->student->name}}</td>
                                        <td>{{$enrollment->join_date}}</td>
                                        <td>{{$enrollment->fee}}</td>
                                        <td>
                                            <a href="{{url('/enrollments/'.$enrollment->id)}}" title="عرض التسجيل" class="btn btn-primary btn-sm">عرض</a>
                                            <a href="{{url('/enrollments/'.$enrollment->id.'/edit')}}" title="تعديل التسجيل" class="btn btn-primary btn-sm">تعديل</a>
                                            <form method="POST" action="{{ url('/enrollments' . '/' . $enrollment->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="حذف التسجيل" onclick="return confirm(&quot;هل أنت متأكد من حذف التسجيل؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-primary mt-2" role="alert">
                            لا يوجد تسجيلات.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
