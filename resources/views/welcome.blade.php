<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Material Design for Bootstrap</title>
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
</head>
<body>
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
                    <a class="nav-link text-white" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Các khóa học</a>
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

<div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://bizenglish.vn/uploads/banner-1.jpg"
                 class="d-block w-100" alt="Wild Landscape"/>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End your project here-->
<div class="container my-5">
    <div class="text-center p-5">
        <div class="h3">
            ZE EDUCATION
        </div>
        <div class="h4">
            Chuyên đào tạo tiếng Anh trực tuyến cho người đi làm
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-12">
            <img src="https://bizenglish.vn/uploads/intro-1.jpg" class="card-img-top"
                 alt="Sunset Over the Sea"/>
            <div class="card">

                <div class="card-body text-center">
                    <div class="h5 card-title text-center my-3 my-lg-4">
                        HỌC ONLINE TẠI NHÀ
                    </div>
                    <p class="card-text">
                        Bạn không cần mất thời gian cho việc đi lại hay tắc đường để có thể tới trung tâm học. Bạn có
                        thể ngồi tại nhà để học và giỏi tiếng Anh chỉ với chiếc điện thoại, máy tính hoặc ipad kết nối
                        internet.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12">
            <img src="https://bizenglish.vn/uploads/intro-2.jpg" class="card-img-top"
                 alt="Sunset Over the Sea"/>
            <div class="card">

                <div class="card-body text-center">
                    <div class="h5 card-title text-center my-3 my-lg-4">
                        LỘ TRÌNH CÁ NHÂN HÓA
                    </div>
                    <p class="card-text">
                        Học 1 kèm 1 nên giáo viên có thể hiểu rõ trình độ bạn và dạy bạn theo lộ trình được cá nhân hóa
                        phù hợp nhất với bạn – đảm bảo hiệu quả gấp nhiều lần so với đi học tại trung tâm.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12">
            <img src="https://bizenglish.vn/uploads/intro-3.jpg" class="card-img-top"
                 alt="Sunset Over the Sea"/>
            <div class="card">

                <div class="card-body text-center">
                    <div class="h5 card-title text-center my-3 my-lg-4">
                        CHI PHÍ THẤP
                    </div>
                    <p class="card-text">
                        Học 1 kèm 1 nhưng chi phí cho mỗi buổi học thấp hơn so với học lớp 10 – 12 người tại trung tâm.
                        Đảm bảo bạn có thể học tiếng Anh lâu dài mà không còn lo lắng về vấn đề tài chính.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dark text-white">
    <div class="container my-5">
        <div class="text-center p-5">
            <div class="h3">
                BẠN CÓ THỂ HỌC GÌ VỚI ZE EDUCATION?
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-12 mb-4">
                <img src="https://bizenglish.vn/img/pad_1.png" class="card-img-top"
                     alt="Sunset Over the Sea"/>
            </div>
            <div class="col-sm-3 col-12 mb-4">
                <img src="https://bizenglish.vn/img/pad_2.png" class="card-img-top"
                     alt="Sunset Over the Sea"/>
            </div>
            <div class="col-sm-3 col-12 mb-4">
                <img src="https://bizenglish.vn/img/pad_3.png" class="card-img-top"
                     alt="Sunset Over the Sea"/>
            </div>
            <div class="col-sm-3 col-12 mb-4">
                <img src="https://bizenglish.vn/img/pad_4.png" class="card-img-top"
                     alt="Sunset Over the Sea"/>
            </div>
        </div>
        <div class="text-center p-3 pb-5">
            <button class="btn btn-primary">
                Xem chi tiết các khóa học
            </button>
        </div>
    </div>
</div>
<div class="bg-gradient text-white"></div>
<!-- MDB -->
<script type="text/javascript" src="{{asset("js/mdb.min.js")}}"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
