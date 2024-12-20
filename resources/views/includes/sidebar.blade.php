<aside id="sidebar">
    <div id="d-flex">
        <button id="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <!-- <div class="sidebar-logo">
            <a href="#" class="text-danger">لوحة التحكم</a>
        </div> -->
        <ul class="sidebar-nav mt-5">
            <li class="sidebar-item">
                <a href="{{url('/dashboard')}}" class="sidebar-link"><span>الرئيسية</span><i class="las la-home"></i></a>
            </li>
            <li class="sidebar-item">
                <a href="{{url('/students')}}" class="sidebar-link"><span>الطلاب</span><i class="las la-user-circle"></i></a>
            </li>
            <li class="sidebar-item">
                <a href="{{url('/teachers')}}" class="sidebar-link"><span>المعلمون</span><i class="las la-chalkboard-teacher"></i></a>
            </li>
            <li class="sidebar-item">
                <a href="{{url('/courses')}}" class="sidebar-link"><span>المقررات</span><i class="las la-book-open"></i></a>
            </li>
            <li class="sidebar-item">
                <a href="{{url('/enrollments')}}" class="sidebar-link"><span>التسجيل</span><i class="las la-user-check"></i></a>
            </li>
            <li class="sidebar-item">
                <a href="{{url('/payments')}}" class="sidebar-link"><span>الدفع</span><i class="las la-file-invoice-dollar"></i></a>
            </li>
            <li class="sidebar-item">
            <a href="#" class="sidebar-link"><span>خروج</span><i class="las la-sign-out-alt"></i></a>
            </li>
        </ul> <!--/sidebae-nav-->
    </div>
</aside>
