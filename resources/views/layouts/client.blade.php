<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>ZE Education</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{asset("img/mdb-favicon.ico")}}" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset("css/mdb.min.css")}}"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0&appId=752127876147770&autoLogAppEvents=1"
        nonce="bdCUVoVo"></script>
<nav class="navbar navbar-expand-lg bg-primary text-primary" style="position: sticky;top: 0;z-index: 1999">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <div class="text-white">ZE EDUCATION</div>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("/")}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("/danh-sach-khoa-hoc")}}">Các khóa học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("/tat-ca-giao-vien")}}">Giáo viên</a>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a
                        class="nav-link text-white dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Chia sẻ kinh nghiệm
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li>
                            <a class="dropdown-item" href="#">Học nói</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Học viết</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Học nghe</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Tài liệu</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <form class="input-group w-auto my-auto d-none d-sm-flex">
            <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder="Tìm kiếm"
                style="min-width: 200px;"
            />
            <span class="input-group-text border-0 d-flex"
            ><i class="fas fa-search text-white"></i
                ></span>
        </form>
        <div class="dropdown">
            <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuAvatar"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                    class="rounded-circle"
                    height="25"
                    alt="Black and White Portrait of a Man"
                    loading="lazy"
                />
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuAvatar"
            >
                <li>
                    <a class="dropdown-item" href="#">Cá nhân</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>

<!-- Start your project here-->
@yield("content")
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class=" container d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Kết nối với chúng tôi qua mạng xã hội:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 justify-content-between">
                <!-- Grid column -->
                <div class="col-sm-12 col-md-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>CÔNG TY TNHH ZE EDUCATION
                    </h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i>Trụ sở: Số 9, ngõ 908/36 Kim Giang, thành phố Hà
                        Nội</p>
                    <p><i class="fas fa-home me-3 text-secondary"></i>Văn phòng giao dịch Hà Nội:
                        Phòng 08, tầng 38, Tòa HH3B khu đô thị Linh Đàm, quận Hoàng Mai, Hà Nội.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-sm-6 col-md-3">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        THÔNG TIN ZE EDUCATION
                    </h6>
                    <p><a href="#" class="text-reset">Cách thức học</a></p>
                    <p><a href="#" class="text-reset">Câu hỏi thường gặp</a></p>
                    <p><a href="#" class="text-reset">Học phí và cách thanh toán</a></p>
                    <p><a href="#" class="text-reset">Trở thành giáo viên</a></p>
                    <p><a href="#" class="text-reset">Trờ thành đối tác của ZE Education</a></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-sm-6 col-md-3 d-flex flex-column align-items-baseline">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">THÔNG TIN LIÊN HỆ</h6>
                    <div class="mb-2">
                        <div class="fb-page" data-href="https://www.facebook.com/laptrinhluon/" data-tabs=""
                             data-width="300"
                             data-height="" data-small-header="false" data-adapt-container-width="false"
                             data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/laptrinhluon/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/laptrinhluon/">Laptrinhluon.com</a></blockquote>
                        </div>
                    </div>
                    <div><i class="fas fa-envelope me-3 text-secondary"></i>info@example.com</div>
                    <div><i class="fas fa-phone me-3 text-secondary"></i> 0977281661</div>
                    <div><i class="fas fa-print me-3 text-secondary"></i> bizenglishforsuccess@gmail.com</div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ZE EDUCATION</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="{{asset("js/mdb.min.js")}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom scripts -->
@yield("after_scripts")
</body>
</html>
