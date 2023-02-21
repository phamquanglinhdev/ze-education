@extends("layouts.client")
@section("content")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.2/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.2/sweetalert2.min.js"></script>
    @if ($errors->any())
        @php
            $data = "";
            foreach ($errors->all() as $error){
                $data .= "<div>$error</div>";
            }

        @endphp
        <script>
            Swal.fire({
                title: 'Thiếu thông tin',
                html: '{!! $data !!}',
                icon: 'error',
                showConfirmButton: false,
                timer: 1500,
            })
        </script>
        {{--        <div class="alert alert-danger">--}}
        {{--            <ul>--}}
        {{--                @foreach ($errors->all() as $error)--}}
        {{--                    <li>{{ $error }}</li>--}}
        {{--                @endforeach--}}
        {{--            </ul>--}}
        {{--        </div>--}}
    @endif
    @if(session("success"))
        <script>
            Swal.fire({
                title: 'Gửi thành công',
                text: 'Nhân viên ZE Education sẽ sớm liên hệ với bạn',
                icon: 'success',
                // confirmButtonText: 'Cool'
            })
        </script>
    @endif
    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{$_SERVER["BANNER"]??asset("img/carousel.png")}}"
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
                            Bạn không cần mất thời gian cho việc đi lại hay tắc đường để có thể tới trung tâm học. Bạn
                            có
                            thể ngồi tại nhà để học và giỏi tiếng Anh chỉ với chiếc điện thoại, máy tính hoặc ipad kết
                            nối
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
                            Học 1 kèm 1 nên giáo viên có thể hiểu rõ trình độ bạn và dạy bạn theo lộ trình được cá nhân
                            hóa
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
                            Học 1 kèm 1 nhưng chi phí cho mỗi buổi học thấp hơn so với học lớp 10 – 12 người tại trung
                            tâm.
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
                                <p class="card-text">Giáo viên Việt Nam với chứng chỉ IELTS 6.5 – 8.0 hoặc du học sinh
                                    tại
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
                                <p class="card-text">Giáo viên Philippines nổi tiếng là những người chuyên dạy tiếng Anh
                                    cho
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
                        <p class="card-text">Lần đầu học online mình cũng hơi ngần ngại vì không biết có tốt như học
                            offline
                            không. Nhưng khi đến với Biz English mình thay đổi suy nghĩ ấy liền, vì học 1 kèm 1 trực
                            tuyến
                            thế này cũng giống như được kèm cặp ở trên lớp, cô giáo nhiệt tình và đặc biệt dạy rất giỏi.
                            Hơn
                            thế nữa ngồi học ở nhà mình thấy rất chủ động về thời gian. Mình sẽ đồng hành cùng Biz
                            English
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
                        <p class="card-text">Mình đã tham gia được 2 khóa học của Biz , hiện tại khả năng viết của mình
                            cải
                            thiện rõ rệt, mình có thể viết mail cho đối tác nước ngoài mà không bị nhiều lỗi ngữ pháp -
                            từ
                            vựng như trước. Mình đang học khóa giao tiếp với giáo viên Philipines. Cô giáo rất nhiệt
                            tình và
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
                        <p class="card-text">Tôi rất hài lòng về các khóa học của Biz English. Sau vài tháng học
                            speaking
                            tôi đã có thể tự tin giao tiếp với người nước ngoài rồi. Giáo viên rất nhiệt tình!</p>
                        <div class="h5">- Yến Nhi -</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark" id="lien-he">
        <div class="container">
            <div class="row my-5 py-5">
                <div class="col-md-6 bg-white d-none d-lg-block rounded-start">
                    <div class="my-5">
                        <img src="https://files.catbox.moe/kl9wtu.jpg" class="w-100">
                    </div>
                </div>
                <div class="col-md-6 bg-white rounded-end">
                    <div class=" my-5 p-3 pt-4 rounded">
                        <form action="{{route("contact.save")}}" method="post">
                            @csrf
                            <div class="p-2 h4 mb-5 text-center text-primary">Chia sẻ nhu cầu học tập của bạn</div>
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control"/>
                                <label class="form-label" for="name">Tên của bạn</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control"/>
                                <label class="form-label" for="email">Địa chỉ email</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="tel" id="phone" name="phone" class="form-control"/>
                                <label class="form-label" for="phone">Số điện thoại</label>
                            </div>
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
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
@endsection
@section("after_scripts")
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
@endsection
