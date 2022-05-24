<?php $url_image = get_template_directory_uri().'/images' ?>
<?php $url_video = get_template_directory_uri().'/lotties' ?>
<?php get_header() ?>
        <div id="left-sidebar">
            <ul class="box-menu">
                <li class="item active"><a href="#" class="item-link">Trang chủ</a></li>
                <li class="item"><a href="#" class="item-link">Bảng Giá</a></li>
                <li class="item"><a href="#" class="item-link">Phòng Trưng Bày</a></li>
                <li class="item"><a href="#" class="item-link">Thảo Luận</a></li>
                <li class="item"><a href="#" class="item-link">Dự Án Mở Bán</a></li>
                <li class="item"><a href="#" class="item-link">Về Chúng Tôi</a></li>
                <li class="item"><a href="#" class="item-link">Văn Phòng Phẩm</a></li>
                <li class="item"><a href="#" class="item-link">Liên Hệ</a></li>
            </ul>
            <div class="box-posts">
                <div class="title">Bài viết mới</div>
                <div class="items-container">
                    <div class="items">
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" class="img" />
                            <div class="item-info">
                                <div class="name">TBLOTY ©2021 Cillgold</div>
                                <div class="description">
                                    Mavenpoint is one of our very first customers. They have been working with Cillgold
                                    for more than 1 year, since 2019.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-gallery">
                <div class="main-layer">
                    <div class="name">Hình ảnh yêu thích</div>
                    <div class="star">
                        <img src="<?=$url_image?>/menu-star-white.svg" alt="" />
                        <div class="badge">2</div>
                    </div>
                </div>
                <div class="layer-1"></div>
                <div class="layer-2"></div>
                <div class="layer-3"></div>
            </div>
        </div>
        <div id="right-sidebar">
            <div class="box-calendar">
                <div class="current-time">
                    <span class="hours">00</span>
                    :
                    <span class="minutes">00</span>
                    :
                    <span class="seconds">00</span>
                </div>
                <div class="current-date">--, --/--/--</div>
                <div class="calendar">
                    <div class="btn-register">Đặt hẹn tư vấn</div>
                    <div class="btn-register-disabled">Ngoài giờ làm việc</div>
                </div>
            </div>
        </div>
        <div id="main-content">
            <div id="lottie-preload-red"></div>
            <lottie-player
                id="lottie-preload"
                src="<?=$url_video?>/autoplay/Lottie_Lighthouse-start_2.json"
                preserveAspectRatio="xMidYMid slice"
                speed="1"
            ></lottie-player>
            <div id="bandroll">
                <div class="track">
                    <div class="content" behavior="slide" direction="left">
                        Ý TƯỞNG RA KHƠI, BẾN NƠI VỮNG VÀNG
                        <lottie-player
                            class="icon"
                            src="<?=$url_video?>/autoplay/Lottie_Icon_Lighthouse.json"
                            preserveAspectRatio="xMidYMid slice"
                            speed="1"
                            loop
                            autoplay
                        ></lottie-player>
                        Ý TƯỞNG RA KHƠI, BẾN NƠI VỮNG VÀNG
                        <lottie-player
                            class="icon"
                            src="<?=$url_video?>/autoplay/Lottie_Icon_Lighthouse.json"
                            preserveAspectRatio="xMidYMid slice"
                            speed="1"
                            loop
                            autoplay
                        ></lottie-player>
                    </div>
                </div>
            </div>
            <div class="menu">
                <!-- <lottie-player
                class="lottie-bg"
                src="<?=$url_video?>/autoplay/Lottie_Menu-lighthouse.json"
                preserveAspectRatio="xMidYMid slice"
            ></lottie-player> -->
                <div class="lottie-bg-container">
                    <video
                        src="<?=$url_video?>/autoplay/Lottie_Menu_Lighthouse.mp4"
                        class="lottie-bg"
                        playsinline
                        loop
                        muted
                    ></video>
                </div>
                <div class="header-menu">
                    <div class="star">
                        <img src="<?=$url_image?>/menu-star.svg" alt="" />
                        <div class="badge">2</div>
                    </div>
                    <div class="languages">
                        <span class="active language">vi</span>
                        <a href="#" class="language">/en</a>
                    </div>
                    <a href="#" class="btn">Đặt Dịch Vụ</a>
                </div>
                <div class="items">
                    <a href="#" class="item active">Trang chủ</a>
                    <a href="#" class="item">Phòng Trưng Bày</a>
                    <a href="#" class="item">Dự Án Mở Bán</a>
                    <a href="#" class="item">Văn Phòng Phẩm</a>
                    <a href="#" class="item">Bảng Giá</a>
                    <a href="#" class="item">Thảo Luận</a>
                    <a href="#" class="item">Về Chúng Tôi</a>
                    <a href="#" class="item">Liên Hệ</a>
                </div>
            </div>
            <div class="menu-icon">
                <img src="<?=$url_image?>/icon-menu.svg" alt="" />
            </div>
            <section class="section-banner">
                <div class="content">
                    <!-- <lottie-player
                    id="lottie-banner"
                    src="<?=$url_video?>/autoplay/Lottie_Lighthouse-loop.json"
                    preserveAspectRatio="xMidYMid slice"
                ></lottie-player> -->
                    <video
                        id="lottie-banner"
                        src="<?=$url_video?>/autoplay/Lottie_Lighthouse-loop.mp4"
                        playsinline
                        muted
                    ></video>
                    <video
                        id="lottie-banner-start"
                        src="<?=$url_video?>/autoplay/Lottie_Lighthouse-loop_start.mp4"
                        playsinline
                        muted
                        loop
                    ></video>
                    <img src="<?=$url_image?>/logo.png" alt="" class="logo" />
                    <h1 class="title">Tầm nhìn sáng tỏ, lựa chọn đã rõ</h1>
                </div>
                <div class="button-container">
                    <a class="button" href="#">Đặt dịch vụ</a>
                </div>
            </section>
            <section class="section-showroom">
                <div class="content">
                    <h2 class="title">Phòng<br />Trưng Bày</h2>
                    <div class="description">Tuyển tập những dự án tốt nhất của chúng tôi</div>
                    <div class="swiper list-slider showroom-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img"><img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" /></div>
                                <h3 class="name">CeraHome <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                                <div class="info">
                                    Awesome Mix Projects #15 /<br />
                                    The best logos of the year ©2020
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img"><img src="<?=$url_image?>/phong-trung-bay-2.png" alt="" /></div>
                                <h3 class="name">Roy Cuisine <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                                <div class="info">Awesome Mix Projects #15</div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img"><img src="<?=$url_image?>/phong-trung-bay-3.png" alt="" /></div>
                                <h3 class="name">Mama ơi <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                                <div class="info">
                                    Stationery Projects #3<br />
                                    Awesome Mix Projects #15
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img"><img src="<?=$url_image?>/phong-trung-bay-4.png" alt="" /></div>
                                <h3 class="name">Amase <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                                <div class="info">Packaging Projects #8</div>
                            </div>
                            <div class="swiper-slide">
                                <lottie-player
                                    class="lottie"
                                    src="<?=$url_video?>/autoplay/Lottie_Menu-lighthouse.json"
                                    preserveAspectRatio="xMidYMid slice"
                                    speed="1"
                                ></lottie-player>
                            </div>
                        </div>
                    </div>
                    <a class="view-all" href="#">Xem tất cả <img src="<?=$url_image?>/arrow-top-right-orange.svg" alt="" /></a>
                </div>
            </section>
            <section class="section-project-banner">
                <lottie-player
                    class="lottie-bg"
                    src="<?=$url_video?>/scroll/Lottie_1-2.json"
                    preserveAspectRatio="xMidYMid slice"
                ></lottie-player>
                <h2 class="title">
                    <span class="top">Thời gian gấp rút?</span>
                    <span class="bottom">Chỉ cần 5 phút tại Dự Án Mở Bán</span>
                </h2>
            </section>
            <section class="section-project">
                <div class="title">Dự Án <br />Mở Bán</div>
                <div class="description">
                    Khởi nghiệp kinh doanh thật nhanh và đúng ý. Dự án mở bán (Ready Projects) đã có sẵn Logo, bộ nhận
                    diện thương hiệu và những thủ tục pháp lý thiết yếu.
                </div>
                <div class="swiper list-slider projects-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <div class="status">Mở<br />Bán</div>
                                <img src="<?=$url_image?>/phong-trung-bay-1.png" alt="" />
                            </div>
                            <h3 class="name">CeraHome <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                            <div class="info white">
                                Awesome Mix Projects #15 /<br />
                                The best logos of the year ©2020
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <div class="status">Mở<br />Bán</div>
                                <img src="<?=$url_image?>/phong-trung-bay-2.png" alt="" />
                            </div>
                            <h3 class="name">Roy Cuisine <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                            <div class="info white">Awesome Mix Projects #15</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <div class="status">Mở<br />Bán</div>
                                <img src="<?=$url_image?>/phong-trung-bay-3.png" alt="" />
                            </div>
                            <h3 class="name">Mama ơi <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                            <div class="info white">
                                Stationery Projects #3<br />
                                Awesome Mix Projects #15
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <div class="status">Mở<br />Bán</div>
                                <img src="<?=$url_image?>/phong-trung-bay-4.png" alt="" />
                            </div>
                            <h3 class="name">Amase <img src="<?=$url_image?>/arrow-top-right.svg" alt="" /></h3>
                            <div class="info white">Packaging Projects #8</div>
                        </div>
                        <div class="swiper-slide">
                            <lottie-player
                                class="lottie"
                                src="<?=$url_video?>/autoplay/Lottie_Menu-lighthouse.json"
                                preserveAspectRatio="xMidYMid slice"
                                speed="1"
                            ></lottie-player>
                        </div>
                    </div>
                </div>
                <a class="view-all-yellow" href="#"
                    >Xem tất cả <img src="<?=$url_image?>/arrow-top-right-yellow.svg" alt=""
                /></a>
            </section>
            <section class="section-question">
                <div class="content">
                    <div class="title">Câu hỏi thường gặp</div>
                    <a href="#" class="item">
                        <span class="text">Dự án mở bán <br />(Ready Projects) là gì?</span>
                        <img src="<?=$url_image?>/arrow-top-right-yellow.svg" alt="" />
                    </a>
                    <a href="#" class="item">
                        <span class="text">Gói Ready(R) đã hoàn thiện thủ tục pháp lý?</span>
                        <img src="<?=$url_image?>/arrow-top-right-yellow.svg" alt="" />
                    </a>
                </div>
                <lottie-player
                    class="lottie-bg"
                    src="<?=$url_video?>/scroll/Lottie_2-3.json"
                    preserveAspectRatio="xMidYMid slice"
                ></lottie-player>
            </section>
            <section class="section-office">
                <div class="content">
                    <h2 class="title">Văn Phòng <br />Phẩm</h2>
                    <div class="description">
                        Trên hành trình kinh doanh của bạn có thể sẽ cần thêm gia vị của sự sáng tạo và hữu dụng.
                    </div>
                    <div class="swiper office-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img" src="<?=$url_image?>/office-1.png" alt="" />
                                <h3 class="name">Bình nước</h3>
                                <div class="price">200.000đ</div>
                            </div>
                            <div class="swiper-slide">
                                <img class="img" src="<?=$url_image?>/office-2.png" alt="" />
                                <h3 class="name">Poster</h3>
                                <div class="price">SOLD OUT</div>
                            </div>
                            <div class="swiper-slide">
                                <img class="img" src="<?=$url_image?>/office-1.png" alt="" />
                                <h3 class="name">Bình nước</h3>
                                <div class="price">200.000đ</div>
                            </div>
                            <div class="swiper-slide">
                                <img class="img" src="<?=$url_image?>/office-2.png" alt="" />
                                <h3 class="name">Poster</h3>
                                <div class="price">SOLD OUT</div>
                            </div>
                            <div class="swiper-slide custom">
                                <a href="#" class="item">
                                    <span class="text">Gia công sản phẩm <br />theo yêu cầu?</span>
                                    <img src="<?=$url_image?>/arrow-top-right-green.svg" alt="" />
                                </a>
                                <a href="#" class="item">
                                    <span class="text">Không có sản phẩm <br />cần tìm?</span>
                                    <img src="<?=$url_image?>/arrow-top-right-green.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="view-all" href="#">
                        Xem tất cả <img src="<?=$url_image?>/arrow-top-right-orange.svg" alt="" />
                    </a>
                </div>
            </section>
            <section class="section-price-banner">
                <h2 class="title">Giá được niêm yết, chờ gì chưa quyết?</h2>
                <lottie-player
                    class="lottie-bg"
                    src="<?=$url_video?>/scroll/Lottie_3-4.json"
                    preserveAspectRatio="xMidYMid slice"
                ></lottie-player>
            </section>
            <section class="section-price">
                <h2 class="title">Bảng Giá</h2>

                <div class="swiper price-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-green">
                            <div class="price-tag-container">
                                <div class="price-tag">Logo & Thương Hiệu</div>
                                <div class="price-count"><span>1/</span>4</div>
                            </div>
                            <div class="price-name">Gói Khởi Nghiệp<br />Startup (S)</div>
                            <div class="price-price">15.800.000 VND</div>
                            <div class="price-description">
                                Gói S phù hợp với khách hàng có nhu cầu cắt giảm tối đa chi phí.
                                <ul>
                                    <li>Quy trình rút gọn (2 giai đoạn)</li>
                                    <li>Thời gian chờ: tối đa 16 ngày</li>
                                    <li>Bắt đầu với 5 hạng mục</li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-green btn-orange-border">Xem thêm</a>
                                <a href="#" class="btn btn-orange">Đặt dịch vụ</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-orange">
                            <div class="price-tag-container">
                                <div class="price-tag">Logo & Thương Hiệu</div>
                                <div class="price-count"><span>2/</span>4</div>
                            </div>
                            <div class="price-name">Gói Chuyên Nghiệp <br />Team (T)</div>
                            <div class="price-price">35.900.000 VND</div>
                            <div class="price-description">
                                Gói T phù hợp với khách hàng có nhu cầu đầu tư một bộ nhận diện thương hiệu chỉn chu,
                                bắt đầu với mức phí hợp lý.
                                <ul>
                                    <li>Quy trình tiêu chuẩn (3 giai đoạn)</li>
                                    <li>Thời gian chờ: từ 19-38 ngày</li>
                                    <li>Bắt đầu với 9 hạng mục</li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-orange btn-green-border">Xem thêm</a>
                                <a href="#" class="btn btn-green">Đặt dịch vụ</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-yellow">
                            <div class="price-tag-container">
                                <div class="price-tag">Logo & Thương Hiệu</div>
                                <div class="price-count"><span>3/</span>4</div>
                            </div>
                            <div class="price-name">Gói Doanh Nghiệp <br />Enterprise (E)</div>
                            <div class="price-price">78.900.000 VND</div>
                            <div class="price-description">
                                Gói E phù hợp với khách hàng có nhu cầu tham khảo cùng lúc nhiều phong cách thiết kế
                                khác nhau, tự lựa chọn thành phẩm đúng với quan điểm thẩm mỹ của mình.
                                <ul>
                                    <li>Quy trình mở rộng (4 giai đoạn)</li>
                                    <li>Thời gian chờ: từ 31-68 ngày</li>
                                    <li>Bắt đầu với 13 hạng mục</li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-yellow btn-green-light-border">Xem thêm</a>
                                <a href="#" class="btn btn-green-light">Đặt dịch vụ</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-green-light">
                            <div class="price-tag-container">
                                <div class="price-tag">Logo & Thương Hiệu</div>
                                <div class="price-count"><span>4/</span>4</div>
                            </div>
                            <div class="price-name">Dự Án Mở Bán <br />Ready (R)</div>
                            <div class="price-price">58.800.000 VND</div>
                            <div class="price-description">
                                Gói R là những dự án đã được thiết kế hoàn chỉnh, đã đăng ký bản quyền và sở hữu trí
                                tuệ, đã sẵn sàng cho việc kinh doanh.
                                <ul>
                                    <li>Có sẵn thành phẩm để xem và chọn mua</li>
                                    <li>Không cần phải chờ đợi</li>
                                    <li>Có sẵn 13 hạng mục</li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-green-light btn-yellow-border">Xem thêm</a>
                                <a href="#" class="btn btn-yellow">Đặt dịch vụ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper price-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-green">
                            <div class="price-tag-container">
                                <div class="price-tag">Bao Bì & Hộp Quà</div>
                                <div class="price-count"><span>1/</span>2</div>
                            </div>
                            <div class="price-name">Gói Bao Bì <br />Packaging (P)</div>
                            <div class="price-description">
                                Chi phí thiết kế bao bì sẽ tùy thuộc vào yêu cầu của từng dự án, bạn có thể “Tùy chọn”
                                danh sách hạng mục và xác định được mức ngân sách.
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-green btn-orange-border">Tùy chọn</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-orange">
                            <div class="price-tag-container">
                                <div class="price-tag">Bao Bì & Hộp Quà</div>
                                <div class="price-count"><span>2/</span>2</div>
                            </div>
                            <div class="price-name">Gói Hộp Quà <br />Gift (G)</div>
                            <div class="price-description">
                                Cillgold cung cấp dịch vụ thiết kế và gia công hộp quà theo yêu cầu, đồng thời có sẵn
                                những sản phẩm thú vị đáng để mua ngay.
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-orange btn-green-border">Tùy chọn</a>
                                <a href="#" class="btn btn-green">Có sẵn</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper price-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-green">
                            <div class="price-tag-container">
                                <div class="price-tag">Thuê Cillgold Dài Hạn</div>
                                <div class="price-count"><span>1/</span>3</div>
                            </div>
                            <div class="price-name">Gói Cill (C)</div>
                            <div class="price-description">
                                Gói Cill (C) là giải pháp thay thế hiệu quả vị trí thiết kế đồ họa trong doanh nghiệp.
                                Mỗi gói Cill (C) sẽ cung cấp một số lượng Gold, khách hàng dùng Gold này để chi trả cho
                                từng công việc phát sinh. Sử dụng gói Cill (C), doanh nghiệp có được 8 điều lợi ích
                            </div>
                            <div class="btn-group">
                                <a href="#" class="next-slide">
                                    <img src="<?=$url_image?>/price-next-slide.svg" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-green">
                            <div class="price-tag-container">
                                <div class="price-tag">Thuê Cillgold Dài Hạn</div>
                                <div class="price-count"><span>2/</span>3</div>
                            </div>
                            <div class="price-description">
                                <ol>
                                    <li>Có đội ngũ thiết kế chuyên nghiệp với chi phí cực thấp.</li>
                                    <li>Có sự chủ động trong chi tiêu, tránh lãng phí quỹ lương.</li>
                                    <li>Có được sự liền mạch, loại bỏ rủi ro nhân sự nghỉ việc.</li>
                                    <li>Có được sự hiệu quả nhờ quy trình làm việc tinh gọn.</li>
                                    <li>Không tốn chi phí máy móc, thiết bị chuyên dụng.</li>
                                    <li>Không tốn chi phí văn phòng, chỗ ngồi làm việc.</li>
                                    <li>Không tốn chi phí tuyển dụng, đào tạo, quản lý nhân sự.</li>
                                    <li>Không tốn chi phí sinh hoạt, bảo hiểm, lương thưởng.</li>
                                </ol>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="next-slide">
                                    <img src="<?=$url_image?>/price-next-slide.svg" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-orange">
                            <div class="price-tag-container">
                                <div class="price-tag">Thuê Cillgold Dài Hạn</div>
                                <div class="price-count"><span>3/</span>3</div>
                            </div>
                            <div class="price-description">
                                <div class="price-name">Gói Cill (C)</div>
                                <div class="price-price">8.800.000 VND<br />25 Gold</div>
                                <br />
                                <div class="price-name">Gói Cill x3 (C3)</div>
                                <div class="price-price">25.800.000 VND<br />80 Gold</div>
                                <br />
                                <div class="price-name">Gói Cill x6 (C6)</div>
                                <div class="price-price">49.800.000 VND<br />166 Gold</div>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn btn-orange btn-green-border">Tùy chọn</a>
                                <a href="#" class="btn btn-green">Đặt dịch vụ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <a class="view-all" href="#">Xem tất cả <img src="<?=$url_image?>/arrow-top-right-orange.svg" alt="" /></a>
            </section>
            <section class="section-discussion">
                <h2 class="title">Thảo luận</h2>
                <div class="description">
                    Hãy nghe những điều mà chúng tôi bàn luận, để biết quan điểm của chúng tôi như thế nào.
                </div>
                <div class="swiper discussion-slider">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide">
                            <img class="img" src="<?=$url_image?>/discussion-1.png" alt="" />
                            <div class="info">
                                <div class="tag-container">
                                    <div class="tag-name">Branding</div>
                                    <div class="date">30.10.2021</div>
                                </div>
                                <div class="name">Các Phong Cách Thiết Kế Logo (Phần 2 - Geometric)</div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img class="img" src="<?=$url_image?>/discussion-2.png" alt="" />
                            <div class="info">
                                <div class="tag-container">
                                    <div class="tag-name">Podcast</div>
                                    <div class="date">02.12.2021</div>
                                </div>
                                <div class="name">The Light Between Oceans</div>
                            </div>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img class="img" src="<?=$url_image?>/discussion-1.png" alt="" />
                            <div class="info">
                                <div class="tag-container">
                                    <div class="tag-name">Branding</div>
                                    <div class="date">30.10.2021</div>
                                </div>
                                <div class="name">Các Phong Cách Thiết Kế Logo (Phần 2 - Geometric)</div>
                            </div>
                        </a>
                        <div class="swiper-slide custom">
                            <div class="name">Chuyên mục</div>
                            <a href="#" class="item">
                                <span class="text">Trải nghiệm dự án</span>
                                <img src="<?=$url_image?>/arrow-top-right-white.svg" alt="" />
                            </a>
                            <a href="#" class="item">
                                <span class="text">Góc nhìn chuyên môn</span>
                                <img src="<?=$url_image?>/arrow-top-right-white.svg" alt="" />
                            </a>
                            <a href="#" class="item">
                                <span class="text">Podcast buổi cà phê</span>
                                <img src="<?=$url_image?>/arrow-top-right-white.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <a class="view-all" href="#">Xem tất cả <img src="<?=$url_image?>/arrow-top-right-orange.svg" alt="" /></a>
            </section>
            <section class="section-about-banner">
                <lottie-player
                    class="lottie-bg"
                    src="<?=$url_video?>/scroll/Lottie_5-6.json"
                    preserveAspectRatio="xMidYMid slice"
                ></lottie-player>
            </section>
            <section class="section-about">
                <div class="content">
                    <h2 class="title">Về<br />Chúng<br />Tôi</h2>
                    <div class="description">
                        <p>
                            Chúng tôi là những nhà thiết kế sáng tạo tạo ra những thiết kế nhận diện thương hiệu ấn
                            tượng.
                        </p>
                        <p>
                            Chúng tôi tập trung vào tính thực tiễn và các quy trình hợp lý nhất để thúc đẩy các doanh
                            nghiệp hướng đến vị trí dẫn đầu trên thị trường.
                        </p>
                        <a class="view-all" href="#"
                            >Xem tất cả <img src="<?=$url_image?>/arrow-top-right-orange.svg" alt=""
                        /></a>
                    </div>
                </div>
                <div class="lottie-bg-container">
                    <lottie-player
                        class="lottie-bg"
                        src="<?=$url_video?>/scroll/Lottie_Stairs.json"
                        preserveAspectRatio="xMidYMid slice"
                    ></lottie-player>
                </div>
            </section>
            <section class="section-contact">
                <h2 class="title">Liên hệ</h2>
                <div class="item">
                    <div class="label">ĐKKD</div>
                    <div class="value">
                        L18–11-13, Tầng 18, Toà nhà Vincom Center Đồng Khởi, 72 Lê Thánh Tôn, Bến Nghé, Quận 1, TP.Hồ
                        Chí Minh.
                    </div>
                </div>
                <div class="item">
                    <div class="label">Studio</div>
                    <div class="value">Tầng 23, Chung cư Saigon Mia, Đường 9A, Bình Chánh, TP.Hồ Chí Minh.</div>
                </div>
                <div class="item">
                    <div class="label">Email</div>
                    <div class="value">
                        <a href="mailto:hi@cillgold.com">hi@cillgold.com</a>
                    </div>
                </div>
                <div class="item">
                    <div class="label">Hotline</div>
                    <div class="value">
                        <a href="tel:0588 112358">0588 112358 (Chou)</a>
                        <br />
                        <a href="tel:0784 112358">0784 112358 (Liêm)</a>
                    </div>
                </div>
            </section>
            <section class="section-footer">
                <div class="items">
                    <div class="item">
                        <img src="<?=$url_image?>/icon-phone.svg" alt="" />
                    </div>
                    <div class="item">
                        <img src="<?=$url_image?>/icon-message.svg" alt="" />
                    </div>
                    <div class="item">
                        <img src="<?=$url_image?>/icon-mail.svg" alt="" />
                    </div>
                    <div class="item">
                        <img src="<?=$url_image?>/icon-web.svg" alt="" />
                    </div>
                </div>
                <div class="copyright">©2021 Cillgold</div>
            </section>
            <div class="footer-items-active">
                <div class="item">
                    <img class="img" src="<?=$url_image?>/icon-phone-active.svg" alt="" />
                </div>
                <div class="actions">
                    <a href="tel:0588 112358" class="action">
                        Chou<br />
                        0588 112358
                    </a>
                    <a href="tel:0588 112358" class="action">
                        Liêm<br />
                        0784 112358
                    </a>
                </div>
                <div class="item">
                    <img class="img" src="<?=$url_image?>/icon-message-active.svg" alt="" />
                </div>
                <div class="actions">
                    <a href="#" class="action"> Zalo </a>
                    <a href="#" class="action"> Messenger </a>
                </div>
                <div class="item">
                    <img class="img" src="<?=$url_image?>/icon-mail-active.svg" alt="" />
                </div>
                <div class="actions">
                    <a href="mailto:hi@cillgold.com" class="action"> hi@cillgold.com </a>
                    <a href="mailto:feedback@cillgold.com" class="action"> feedback@cillgold.com </a>
                </div>
                <div class="item">
                    <img class="img" src="<?=$url_image?>/icon-web-active.svg" alt="" />
                </div>
                <div class="actions">
                    <a href="#" class="action"> Facebook </a>
                    <a href="#" class="action"> Instagram </a>
                    <a href="#" class="action"> Behance </a>
                </div>
            </div>
        </div>
        <div id="popup-register">
            <form method="post" action="" class="box">
                <div class="close">
                    <img src="<?=$url_image?>/icon-close.svg" alt="" />
                </div>
                <div class="title">Đặt lịch hẹn</div>
                <div class="input-group">
                    <input type="text" class="input" placeholder="Họ và tên" />
                </div>
                <div class="input-group">
                    <input type="text" class="input" placeholder="Số điện thoại" />
                </div>
                <div class="input-group">
                    <textarea name="content" class="input" rows="5" placeholder="Lời nhắn"></textarea>
                </div>
                <input type="hidden" name="date" class="date" />
                <button class="btn">Đặt hẹn</button>
            </form>
        </div>
<?php get_footer() ?>
