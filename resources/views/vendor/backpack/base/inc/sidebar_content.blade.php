{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
            class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('teacher') }}"><i
            class="nav-icon las la-chalkboard-teacher"></i>
        Giáo viên</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('course') }}"><i class="nav-icon las la-laptop"></i>
        Khóa học</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-tags"></i>
        Nhãn</a></li>

