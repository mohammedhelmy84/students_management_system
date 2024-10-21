@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة المقررات</h2>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title"> >> صفحة المقررات</h5> -->
                        <a href="{{url('/courses/create')}}" class="btn btn-primary btn-sm">+ إضافة مقرر جديد</a>
                        @if($courses->isNotEmpty())
                        <div class="table-responsive" >
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المقرر</th>
                                        <th scope="col">المنهج</th>
                                        <th scope="col">الموبايل</th>
                                        <th scope="col">التعديلات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->syllabus}}</td>
                                        <td>{{$course->duration}}</td>
                                        <td>
                                            <a href="{{url('/courses/'.$course->id)}}" title="عرض المقرر" class="btn btn-primary btn-sm">عرض</a>
                                            <a href="{{url('/courses/'.$course->id.'/edit')}}" title="تعديل المقرر" class="btn btn-primary btn-sm">تعديل</a>
                                            <form method="POST" action="{{ url('/courses' . '/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="حذف المقرر" onclick="return confirm(&quot;هل أنت متأكد من حذف المقرر؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-primary mt-2" role="alert">
                            لا يوجد مقررات.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
