@extends('includes.layout')
@section('content')
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col md 9">
                <div class="card">
                    <div class="card-header">
                        <h2>نظام إدارة عمليات الدفع</h2>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title"> >> صفحة العمليات الدفع</h5> -->
                        <a href="{{url('/payments/create')}}" class="btn btn-primary btn-sm">+ إضافة عملية دفع جديدة</a>
                        @if($payments->isNotEmpty())
                        <div class="table-responsive" >
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">رقم التسجيل</th>
                                        <th scope="col">تاريخ الدفع</th>
                                        <th scope="col">القيمة</th>
                                        <th scope="col">التعديلات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$payment->enrollment->enroll_no}}</td>
                                        <td>{{$payment->paid_date}}</td>
                                        <td>{{$payment->mount}}</td>
                                        <td>
                                            <a href="{{url('/payments/'.$payment->id)}}" title="عرض عملية الدفع" class="btn btn-primary btn-sm">عرض</a>
                                            <a href="{{url('/payments/'.$payment->id.'/edit')}}" title="تعديل العملية الدفع" class="btn btn-primary btn-sm">تعديل</a>
                                            <form method="POST" action="{{ url('/payments' . '/' . $payment->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="حذف العملية الدفع" onclick="return confirm(&quot;هل أنت متأكد من حذف العملية الدفع؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-primary mt-2" role="alert">
                            لا توجد عمليات دفع.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
