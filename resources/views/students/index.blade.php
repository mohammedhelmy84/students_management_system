@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة الطلاب</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> >> صفحة الطلاب</h5>
                        <a href="{{route('students.create')}}" class="btn btn-primary btn-sm">+ إضافة طالب جديد</a>
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
                                        <td>
                                            <a href="{{url('/students/'.$student->id)}}" title="عرض الطالب" class="btn btn-primary btn-sm">عرض</a>
                                            <a href="{{url('/students/'.$student->id.'/edit')}}" title="تعديل الطالب" class="btn btn-primary btn-sm">تعديل</a>
                                            <form method="POST" action="{{ url('/students' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="حذف الطالب" onclick="return confirm(&quot;هل أنت متأكد من حذف الطالب؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                            </form>
                                        </td>
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
