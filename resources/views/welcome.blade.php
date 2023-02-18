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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
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
    <div class="container">
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
<div class="bg-dark text-white pb-5">
    <div class="text-center p-lg-5 p-2">
        <div class="h3">ĐÀO TẠO TIẾNG ANH CHO DOANH NGHIỆP</div>
    </div>
    <div class="container">
        <div class="row py-5 align-items-center" style="border: 2px white dashed">
            <div class="col-md-5 col-12">
                <div class="h5">
                    BIZ ENGLISH đào tạo tiếng Anh Online cho nhân viên các doanh nghiệp theo yêu cầu.
                </div>
                <hr>
                <ul>
                    <li>Chương trình học được thiết kế riêng theo yêu cầu của từng doanh nghiệp.</li>
                    <li>Nâng cao hiệu quả học tập</li>
                    <li>Tiết kiệm chi phí lên tới 50% – 70%.</li>
                </ul>
            </div>
            <div class="col-md-7 col-12 w-50 m-auto d-lg-block d-none">
                <img src="https://bizenglish.vn/img/bussiness.png" class="w-100 rounded shadow-lg"/>
            </div>
            <div class="col-md-7 col-12 w-100 m-auto d-lg-none d-block">
                <img src="https://bizenglish.vn/img/bussiness.png" class="w-100 rounded shadow-lg"/>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="text-center p-5">
        <div class="h3 pb-5">GIÁO VIÊN CỦA CHÚNG TÔI</div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="ratio ratio-16x9 rounded">
                            <iframe
                                class="rounded"
                                src="https://www.youtube.com/embed/bZ3z86nOK4I"
                                title="YouTube video"
                                allowfullscreen
                            ></iframe>
                        </div>
                        <div class="card-body px-5">
                            <div class="h5 text-primary">GIÁO VIÊN VIỆT NAM</div>
                            <p class="card-text">Giáo viên Việt Nam với chứng chỉ IELTS 6.5 – 8.0 hoặc du học sinh tại
                                Mỹ - Châu Âu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="ratio ratio-16x9 rounded">
                            <iframe
                                class="rounded"
                                src="https://www.youtube.com/embed/ukb9GdGlN4s"
                                title="YouTube video"
                                allowfullscreen
                            ></iframe>
                        </div>
                        <div class="card-body px-5">
                            <div class="h5 text-primary">GIÁO VIÊN PHILIPPINES</div>
                            <p class="card-text">Giáo viên Philippines nổi tiếng là những người chuyên dạy tiếng Anh cho
                                trẻ em trên toàn thế giới.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-2">
    <div class="text-center p-5">
        <h3>HỌC VIÊN CỦA CHÚNG TÔI NÓI GÌ ?</h3>
    </div>
    <div class="container">
        <div class="owl-carousel py-5">
            <div class=" p-2 reviews">
                <img src="https://thuthuatnhanh.com/wp-content/uploads/2019/08/hinh-girl-xinh-deo-kinh.jpg"
                     class="card-img-top rounded-circle w-50 m-auto" alt="Sunset Over the Sea"/>
                <div class="text-warning text-center mt-2">
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                </div>
                <div class="card-body">
                    <p class="card-text">Lần đầu học online mình cũng hơi ngần ngại vì không biết có tốt như học offline
                        không. Nhưng khi đến với Biz English mình thay đổi suy nghĩ ấy liền, vì học 1 kèm 1 trực tuyến
                        thế này cũng giống như được kèm cặp ở trên lớp, cô giáo nhiệt tình và đặc biệt dạy rất giỏi. Hơn
                        thế nữa ngồi học ở nhà mình thấy rất chủ động về thời gian. Mình sẽ đồng hành cùng Biz English
                        lâu dài</p>
                    <div class="h5">- Minh Phương -</div>
                </div>
            </div>
            <div class=" p-2 reviews">
                <img src="https://anhdepfree.com/wp-content/uploads/2020/08/anh-con-gai-toc-ngan-xinh-xan.jpg"
                     class="card-img-top rounded-circle w-50 m-auto" alt="Sunset Over the Sea"/>
                <div class="text-warning text-center mt-2">
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                </div>
                <div class="card-body">
                    <p class="card-text">Mình đã tham gia được 2 khóa học của Biz , hiện tại khả năng viết của mình cải
                        thiện rõ rệt, mình có thể viết mail cho đối tác nước ngoài mà không bị nhiều lỗi ngữ pháp - từ
                        vựng như trước. Mình đang học khóa giao tiếp với giáo viên Philipines. Cô giáo rất nhiệt tình và
                        dễ mến. Học với cô giúp mình tăng phản xạ nói rất nhanh. Cám ơn BIZ English.</p>
                    <div class="h5">- Mỹ Linh -</div>
                </div>
            </div>
            <div class=" p-2 reviews">
                <img src="https://cf.shopee.vn/file/5eb7c132ec43c5c125e9055409b81600"
                     class="card-img-top rounded-circle w-50 m-auto" alt="Sunset Over the Sea"/>
                <div class="text-warning text-center mt-2">
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                </div>
                <div class="card-body">
                    <p class="card-text">Tôi rất hài lòng về các khóa học của Biz English. Sau vài tháng học speaking
                        tôi đã có thể tự tin giao tiếp với người nước ngoài rồi. Giáo viên rất nhiệt tình!</p>
                    <div class="h5">- Yến Nhi -</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dark">
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-6 bg-white d-none d-lg-block rounded-start">
                <div class="my-5">
                    <img src="https://files.catbox.moe/kl9wtu.jpg" class="w-100">
                </div>
            </div>
            <div class="col-md-6 bg-white rounded-end">
                <div class=" my-5 p-3 pt-4 rounded">
                    <form>
                        <div class="p-2 h4 mb-5 text-center text-primary">Chia sẻ nhu cầu học tập của bạn</div>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="name" class="form-control"/>
                            <label class="form-label" for="name">Tên của bạn</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control"/>
                            <label class="form-label" for="email">Địa chỉ email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="tel" id="phone" class="form-control"/>
                            <label class="form-label" for="phone">Số điện thoại</label>
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="message" rows="4"></textarea>
                            <label class="form-label" for="message">Nhu cầu học tập của bạn</label>
                        </div>

                        <!-- Checkbox -->

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Gửi ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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
            <div class="d-flex mt-3 justify-content-between">
                <!-- Grid column -->
                <div class="col-sm-12 col-md-5">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>CÔNG TY TNHH ZE EDUCATION
                    </h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i>Trụ sở: Số 9, ngõ 908/36 Kim Giang, thành phố Hà
                        Nội</p>
                    <p><i class="fas fa-home me-3 text-secondary"></i> Văn phòng giao dịch Hà Nội:
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

                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
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
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1,
                    mergeFit: true
                },
                600: {
                    items: 2,
                    mergeFit: true
                },
                1000: {
                    items: 4,
                    mergeFit: true
                },
                autoHeight: true
            }
        });
    });
</script>
</body>
</html>
