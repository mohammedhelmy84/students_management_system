@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة المدرسين</h2>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title"> >> صفحة المدرسين</h5> -->
                        <a href="{{url('/teachers/create')}}" class="btn btn-primary btn-sm">+ إضافة مدرس جديد</a>
                        @if($teachers->isNotEmpty())
                        <div class="table-responsive" >
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المدرس</th>
                                        <th scope="col">العنوان</th>
                                        <th scope="col">الموبايل</th>
                                        <th scope="col">التعديلات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->address}}</td>
                                        <td>{{$teacher->mobile}}</td>
                                        <td>
                                            <a href="{{url('/teachers/'.$teacher->id)}}" title="عرض المدرس" class="btn btn-primary btn-sm">عرض</a>
                                            <a href="{{url('/teachers/'.$teacher->id.'/edit')}}" title="تعديل المدرس" class="btn btn-primary btn-sm">تعديل</a>
                                            <form method="POST" action="{{ url('/teachers' . '/' . $teacher->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="حذف المدرس" onclick="return confirm(&quot;هل أنت متأكد من حذف المدرس؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-primary mt-2" role="alert">
                            لا يوجد مدرسين.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
