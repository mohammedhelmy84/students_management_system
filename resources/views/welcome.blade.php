@extends('includes.layout')

@section('content')
<div class="mb-3">
    <h3 class="fw-bold fs-4 mb-3">نظام إدارة الطلاب</h3>
    <div class="row">
       <h3 class="text-center py-2">إحصائيات</h3>
        <div class="col-12 col-md-4">
           <div class="card border-0 maincard">
               <div class="card-body py-4">
                   <h5 class="mb-2 fw-bold">
                      Members Progress
                   </h5>
                   <p class="mb-2 fw-bold">
                     $1000
                   </p>
                   <div class="mb-0">
                     <span class="badge text-success me-2">
                       +10.0%
                     </span>
                     <span class="fw-bold">
                        Since Last Month
                     </span>
                   </div>
               </div>
           </div>
        </div> <!--/col-->
        <div class="col-12 col-md-4">
            <div class="card border-0 maincard">
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                       Members Progress
                    </h5>
                    <p class="mb-2 fw-bold">
                      $1000
                    </p>
                    <div class="mb-0">
                      <span class="badge text-success me-2">
                        +10.0%
                      </span>
                      <span class="fw-bold">
                         Since Last Month
                      </span>
                    </div>
                </div>
            </div>
         </div> <!--/col-->
         <div class="col-12 col-md-4">
            <div class="card border-0 maincard">
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                       Members Progress
                    </h5>
                    <p class="mb-2 fw-bold">
                      $1000
                    </p>
                    <div class="mb-0">
                      <span class="badge text-success me-2">
                        +10.0%
                      </span>
                      <span class="fw-bold">
                         Since Last Month
                      </span>
                    </div>
                </div>
            </div>
         </div> <!--/col-->
    </div> <!--/row-->
    <h3 class="fw-bold fs-4 my-3 text-center">مستخدمو الموقع</h3>
    <div class="row" >
        <div class="col-12">
          <div class="table-responsive-sm">
            <table class="table table-striped text-center table1" dir="rtl">
                <thead>
                  <tr class="highlight text-center">
                    <th scope="col">م</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">السنة الدراسية</th>
                    <th scope="col">التخصص</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div> <!--/mb-3-->
@endsection
