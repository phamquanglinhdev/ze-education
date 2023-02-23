{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
            class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-cube"></i> Khóa học</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-boxes"></i>
                Danh mục</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('course') }}"><i class="nav-icon las la-laptop"></i>
                Khóa học</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-tags"></i>
                Nhãn</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i> Giáo viên</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('teacher') }}"><i
                    class="nav-icon las la-chalkboard-teacher"></i>
                Giáo viên</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('skill') }}"><i
                    class="nav-icon la la-chalkboard-teacher"></i>
                Kỹ năng</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-book"></i> Tài liệu</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('basket') }}"><i
                    class="nav-icon lab la-buffer"></i>
                Danh mục sách</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('book') }}"><i class="nav-icon la la-book"></i>
                Sách</a>
        </li>
    </ul>
</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('post') }}"><i class="nav-icon la la-pinterest"></i> Bài
        viết</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('setting') }}"><i class="nav-icon la la-cogs"></i> Cài đặt</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('review') }}"><i class="nav-icon la la-star-half-alt"></i> Đánh giá</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact') }}"><i class="nav-icon la la-envelope"></i> Liên hệ</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('certificate') }}"><i class="nav-icon la la-certificate"></i> Chứng chỉ</a></li>
