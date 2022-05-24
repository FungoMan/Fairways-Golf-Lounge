jQuery(document).ready(function ($) {
    const windowHeight = window.outerHeight;
    const windowWidth = $("#main-content").outerWidth();

    const isDesktop = window.outerWidth > 991;

    // get Top
    let reGetElementRect = null;
    function getElementRect(selector, callback) {
        if (!$(selector).length) return;
        const $selector = $($(selector)[0]);
        const top = $selector.offset().top;
        const height = $selector.outerHeight();
        const bottom = top + height;

        reGetElementRect = function () {
            if (!callback) return;
            const top = $selector.offset().top;
            const height = $selector.outerHeight();
            const bottom = top + height;
            callback({ top, bottom });
        };
        setTimeout(function () {
            reGetElementRect();
            const top = $selector.offset().top;
            const height = $selector.outerHeight();
            const bottom = top + height;
            callback({ top, bottom });
        }, 1000);

        return { top, bottom };
    }

    // Scroll
    const scrollCallbackList = [];
    function onScroll(callback, throttleTime = 0) {
        if (!callback) return;
        if (!throttleTime) {
            scrollCallbackList.push(callback);
            return;
        }
        let wait = false;
        function throttleCallback(object) {
            if (wait) return;
            wait = true;
            setTimeout(function () {
                wait = false;
            }, throttleTime);
            callback(object);
        }
        scrollCallbackList.push(throttleCallback);
    }
    $(window).scroll(function () {
        const scrollTop = $(window).scrollTop();
        scrollCallbackList.forEach(function (scrollCallback) {
            if (scrollCallback) scrollCallback({ scrollTop });
        });
    });

    // Preloading + Banner
    {
        if (!isDesktop) $("body").css("overflow", "hidden");
        setTimeout(function () {
            window.scrollTo(0, 0);
        }, 1000);

        if (isDesktop) {
            setTimeout(function () {
                $(".section-banner .title").addClass("active");
            }, 2000);
            setTimeout(function () {
                $(".menu-icon").addClass("active");
            }, 3000);
        }
        $("#lottie-preload")[0].addEventListener("ready", function () {
            $("#lottie-preload-red").css("display", "none");
            setTimeout(function () {
                $(".section-banner .title").addClass("active");
            }, 2000);
            setTimeout(function () {
                $(".menu-icon").addClass("active");
            }, 3000);
        });
        $("#lottie-preload")[0].getLottie().play();
        $("#lottie-preload")[0].addEventListener("complete", function () {
            $("body").css("overflow", "");
            $("#lottie-preload").hide(100);
            // $("#lottie-banner")[0].getLottie().loop = true;
            // $("#lottie-banner")[0].getLottie().play();

            $("#lottie-banner-start")[0].loop = false;
            $("#lottie-banner-start")[0].play();

            $("#lottie-banner-start")[0].addEventListener("ended", () => {
                $("#lottie-banner-start").hide(100);
                $("#lottie-banner")[0].loop = true;
                $("#lottie-banner")[0].play();
            });
        });

        let isPause = false;
        onScroll(function (object) {
            const scrollTop = object.scrollTop;
            if (scrollTop > windowHeight && !isPause) {
                isPause = true;
                // $("#lottie-banner")[0].getLottie().pause();
                $("#lottie-banner")[0].pause();
            }
            if (scrollTop <= windowHeight && isPause) {
                isPause = false;
                // $("#lottie-banner")[0].getLottie().play();
                $("#lottie-banner")[0].play();
            }
        });
    }
    {
        // Banner
        let showBanner = false;
        onScroll(function (object) {
            const scrollTop = object.scrollTop;
            if (scrollTop > 50 && !showBanner) {
                showBanner = true;
                $("#bandroll").addClass("active");
            }
            if (scrollTop <= 50 && showBanner) {
                showBanner = false;
                $("#bandroll").removeClass("active");
            }
        });
    }
    // Menu
    {
        const $bgWrap = $(".menu .lottie-bg-container");
        const $bg = $(".menu .lottie-bg");
        // const player = $bg[0].getLottie();
        const player = $bg[0];
        $(".menu .items").scroll(function () {
            const scrollTop = $(this).scrollTop();
            $bgWrap.css("transform", "translateY(-" + scrollTop / 3 + "px)");
        });

        let timeout = null;
        $(".menu-icon").click(function () {
            if ($(".menu").hasClass("active")) {
                if (timeout) clearTimeout(timeout);
                $(".menu").removeClass("active");
                $("html,body").css("overflow", "");
                player.pause();
            } else {
                $(".menu").addClass("active");
                $("html,body").css("overflow", "hidden");
                timeout = setTimeout(function () {
                    player.play();
                }, 500);
            }
        });
    }
    // Showroom + project
    {
        $(".list-slider").each(function () {
            const $container = $(this);
            let rect = getElementRect(this, function (_rect) {
                rect = _rect;
            });
            let isPause = true;
            $container.find(".lottie").each(function () {
                this.getLottie().loop = true;
            });
            onScroll(function (object) {
                if (object.scrollTop > rect.bottom || object.scrollTop + windowHeight < rect.top) {
                    if (!isPause) {
                        isPause = true;
                        $container.find(".lottie").each(function () {
                            this.getLottie().pause();
                        });
                    }
                } else {
                    if (isPause) {
                        isPause = false;
                        $container.find(".lottie").each(function () {
                            this.getLottie().play();
                        });
                    }
                }
            }, 100);
            new Swiper(this, {
                slidesPerView: "auto",
            });
        });
    }
    // Project banner
    {
        let rect = getElementRect(".section-project-banner", function (_rect) {
            rect = _rect;
        });
        const $title = $(".section-project-banner .title");
        const player = $(".section-project-banner .lottie-bg")[0].getLottie();
        const sectionHeight = rect.bottom - rect.top;
        const offsetTop = windowHeight;
        const totalFrames = 2100;
        let prevFrame = 0;
        onScroll(function (object) {
            if (object.scrollTop > rect.bottom || object.scrollTop + windowHeight < rect.top) return;
            const scrollTopOfSection = object.scrollTop + windowHeight - rect.top;
            let frame = Math.floor(((scrollTopOfSection - offsetTop) / (sectionHeight - offsetTop)) * totalFrames);
            if (frame < 0 && prevFrame) frame = 0;
            if (frame < 0 || frame > totalFrames) return;
            prevFrame = frame;
            player.goToAndStop(frame);
            $title.css("opacity", (frame * 1.5) / totalFrames);
        });
    }
    // Question
    {
        let rect = getElementRect(".section-question", function (_rect) {
            rect = _rect;
        });
        const sectionHeight = rect.bottom - rect.top;
        const player = $(".section-question .lottie-bg")[0].getLottie();
        const totalFrames = 2500;
        let prevFrame = 0;
        onScroll(function (object) {
            if (object.scrollTop > rect.bottom) {
                if (prevFrame < totalFrames) {
                    prevFrame = totalFrames;
                    player.goToAndStop(prevFrame);
                }
                return;
            }
            const scrollWidthHeight = object.scrollTop + (windowHeight * 3) / 2;
            if (scrollWidthHeight < rect.top) {
                if (prevFrame > 0) {
                    prevFrame = 0;
                    player.goToAndStop(prevFrame);
                }
                return;
            }

            const frame = Math.floor(((scrollWidthHeight - rect.top) / (sectionHeight + windowHeight)) * totalFrames);
            if (frame < 0 || frame > totalFrames) return;
            player.goToAndStop(frame);
        });
    }
    // Office
    {
        new Swiper(".office-slider", {
            slidesPerView: "auto",
        });
    }
    // Price Banner
    {
        let rect = getElementRect(".section-price-banner", function (_rect) {
            rect = _rect;
        });
        const sectionHeight = rect.bottom - rect.top;
        const player = $(".section-price-banner .lottie-bg")[0].getLottie();
        const totalFrames = 1999;
        let prevFrame = 0;
        onScroll(function (object) {
            if (object.scrollTop > rect.bottom) {
                if (prevFrame < totalFrames) {
                    prevFrame = totalFrames;
                    player.goToAndStop(prevFrame);
                }
                return;
            }
            const scrollWidthHeight = object.scrollTop + windowHeight;
            if (scrollWidthHeight < rect.top) {
                if (prevFrame > 0) {
                    prevFrame = 0;
                    player.goToAndStop(prevFrame);
                }
                return;
            }

            const frame = Math.floor(((scrollWidthHeight - rect.top) / (sectionHeight + windowHeight)) * totalFrames);
            if (frame < 0 || frame > totalFrames) return;
            player.goToAndStop(frame);
        });
    }
    // Price
    {
        $(".price-slider").each(function (index) {
            const $container = $(this);
            const $next = $container.find(".next-slide");
            const swiper = new Swiper(this, {
                slidesPerView: "auto",
                on: {
                    afterInit: function () {
                        const height = $container.find(".swiper-wrapper").outerHeight();
                        $container.find(".swiper-wrapper").css("height", height).data("height", height);
                        $container.addClass("active");
                        if (index > 0) {
                            $container.removeClass("active");
                            $container.find(".swiper-wrapper").css("height", 58);
                            $container
                                .find(".swiper-slide")
                                .css({ width: windowWidth - 32, "max-width": windowWidth - 32 });
                        }
                    },
                },
            });
            $next.click(function () {
                swiper.slideNext();
                return false;
            });
            $container.data("swiper", swiper);
            if (index > 0) {
                swiper.allowTouchMove = false;
            }
            $container.find(".price-tag-container").click(function () {
                $(".price-slider").each(function (_index) {
                    if (index === _index) return;
                    const $container = $(this);
                    $container.removeClass("active");
                    const swiper = $container.data("swiper");
                    swiper.allowTouchMove = false;
                    swiper.slideTo(0);
                    $container.find(".swiper-wrapper").css("height", 58).css("transition-duration", "400ms");
                    setTimeout(function () {
                        $container.find(".swiper-wrapper").css("transition-duration", "0");
                    }, 400);
                    $container.find(".swiper-slide").css({ width: windowWidth - 32, "max-width": windowWidth - 32 });
                });

                swiper.allowTouchMove = true;
                $container.addClass("active");
                const height = $container.find(".swiper-wrapper").data("height");
                $container.find(".swiper-wrapper").css("height", height).css("transition-duration", "400ms");
                setTimeout(function () {
                    $container.find(".swiper-wrapper").css("transition-duration", "0");
                }, 400);
                $container.find(".swiper-slide").css({ width: "", "max-width": "" });

                setTimeout(function () {
                    reGetElementRect();
                }, 2000);
            });
        });
    }
    // Discussion
    {
        new Swiper(".discussion-slider", {
            slidesPerView: "auto",
            on: {
                afterInit: function () {
                    const $container = $(".discussion-slider");
                    const height = $container.find(".swiper-wrapper").outerHeight();
                    $container.find(".swiper-wrapper").css("height", height);
                },
            },
        });
    }
    // About banner
    {
        let rect = getElementRect(".section-about-banner", function (_rect) {
            rect = _rect;
        });
        rect.top -= 200;
        const sectionHeight = rect.bottom - rect.top;
        const player = $(".section-about-banner .lottie-bg")[0].getLottie();
        const totalFrames = 2200;
        let prevFrame = 0;
        onScroll(function (object) {
            if (object.scrollTop > rect.bottom) {
                if (prevFrame < totalFrames) {
                    prevFrame = totalFrames;
                    player.goToAndStop(prevFrame);
                }
                return;
            }
            const scrollWidthHeight = object.scrollTop + windowHeight;
            if (scrollWidthHeight < rect.top) {
                if (prevFrame > 0) {
                    prevFrame = 0;
                    player.goToAndStop(prevFrame);
                }
                return;
            }

            const frame = Math.floor(((scrollWidthHeight - rect.top) / (sectionHeight + windowHeight)) * totalFrames);
            if (frame < 0 || frame > totalFrames) return;
            player.goToAndStop(frame);
        });
    }
    {
        let rect = getElementRect(".section-about", function (_rect) {
            rect = _rect;
        });
        const sectionHeight = rect.bottom - rect.top;
        const player = $(".section-about .lottie-bg")[0].getLottie();
        const totalFrames = 2200;
        let prevFrame = 0;
        onScroll(function (object) {
            if (object.scrollTop > rect.bottom) {
                if (prevFrame < totalFrames) {
                    prevFrame = totalFrames;
                    player.goToAndStop(prevFrame);
                }
                return;
            }
            const scrollWidthHeight = object.scrollTop + windowHeight;
            if (scrollWidthHeight < rect.top) {
                if (prevFrame > 0) {
                    prevFrame = 0;
                    player.goToAndStop(prevFrame);
                }
                return;
            }

            const frame = Math.floor(((scrollWidthHeight - rect.top) / (sectionHeight + windowHeight)) * totalFrames);
            if (frame < 0 || frame > totalFrames) return;
            player.goToAndStop(frame);
        });
    }
    // Footer
    {
        function setPositions() {
            const containerHeight = $(".section-footer").outerHeight();
            $(".section-footer .item").each(function (index) {
                const $item = $(this);
                const width = $item.outerWidth();
                const height = $item.outerHeight();
                const left = $item.offset().left;
                const bottom = containerHeight - height - 28;
                const $activeItem = $($(".footer-items-active .item")[index]);
                const $actions = $($(".footer-items-active .actions")[index]);
                if (!$activeItem.length || !$actions.length) return;
                $actions.css({ bottom: height + bottom });
                $activeItem.css({ width: width, left: left, bottom: bottom });
            });
        }
        setPositions();
        setTimeout(function () {
            setPositions();
        }, 3000);
        $(".section-footer .item").each(function (index) {
            const $item = $(this);
            const $activeItem = $($(".footer-items-active .item")[index]);
            const $actions = $($(".footer-items-active .actions")[index]);
            $item.click(function () {
                $(".footer-items-active .item").removeClass("active");
                $(".footer-items-active .actions").removeClass("active");
                $("html,body").css("overflow", "hidden");
                $("section").addClass("blur");
                $activeItem.addClass("active");
                $actions.addClass("active");
            });
        });
        $(window).click(function (event) {
            const $target = $(event.target);
            if (!$target.closest(".section-footer .item").length) {
                $("html,body").css("overflow", "");
                $("section").removeClass("blur");
                $(".footer-items-active .item").removeClass("active");
                $(".footer-items-active .actions").removeClass("active");
            }
        });
    }
    // Datepicker
    {
        $.fn.datepicker.dates["en"] = {
            ...$.fn.datepicker.dates["en"],
            days: ["Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
            daysShort: ["CN", "T2", "T3", "T4", "T5", "T6", "T7", "CN"],
            daysMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7", "CN"],
            months: [
                "Tháng 1",
                "Tháng 2",
                "Tháng 3",
                "Tháng 4",
                "Tháng 5",
                "Tháng 6",
                "Tháng 7",
                "Tháng 8",
                "Tháng 9",
                "Tháng 10",
                "Tháng 11",
                "Tháng 12",
            ],
            monthsShort: ["T1", "T2", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
            today: "Hôm nay",
        };
        $(".box-calendar").each(function () {
            const $container = $(this);
            const $calendar = $container.find(".calendar");
            const $btnRegister = $container.find(".btn-register");
            const $btnRegisterDisabled = $container.find(".btn-register-disabled");
            $calendar
                .datepicker({
                    multidate: false,
                    todayHighlight: true,
                    maxViewMode: 0,
                })
                .on("changeDate", function (e) {
                    const $day = $container.find(".day.active");
                    $btnRegister.removeClass("active");
                    $btnRegisterDisabled.removeClass("active");
                    $btnRegister.data("date", "");
                    if (!$day.length) return;

                    const date = e.date;
                    $btnRegister.data("date", date);
                    if (date.getDay() === 0 || date.getDay() === 6) {
                        $btnRegisterDisabled.addClass("active");
                    } else {
                        $btnRegister.addClass("active");
                    }

                    const scrollTop = $(window).scrollTop();
                    const top = $day.offset().top - scrollTop;
                    $btnRegister.css({ top: top - 40 });
                    $btnRegisterDisabled.css({ top: top - 40 });

                    const dateLeft = $day.offset().left;
                    const dateWidth = $day.outerWidth();
                    const containerLeft = $container.offset().left;
                    const containerWidth = $container.outerWidth();

                    if (dateLeft + dateWidth / 2 < containerLeft + containerWidth / 2 + 10) {
                        $btnRegister.removeClass("revert").css({ left: dateLeft + dateWidth / 2 - 13 });
                        $btnRegisterDisabled.removeClass("revert").css({ left: dateLeft + dateWidth / 2 - 13 });
                    } else {
                        $btnRegister.addClass("revert").css({ left: dateLeft + dateWidth / 2 - 13 });
                        $btnRegisterDisabled.addClass("revert").css({ left: dateLeft + dateWidth / 2 - 13 });
                    }
                });

            $btnRegister.click(function () {
                const date = $(this).data("date");
                $("#popup-register .date").val(date);
                $("#popup-register").addClass("open");
                $("#left-sidebar,#right-sidebar,#main-content").addClass("filter-blur");
            });
            $("#popup-register .close").click(function () {
                $("#popup-register .date").val("");
                $("#popup-register").removeClass("open");
                $("#left-sidebar,#right-sidebar,#main-content").removeClass("filter-blur");
            });
        });
        $(".current-date").each(function () {
            const date = new Date();
            const dayNames = ["Chủ Nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
            const dayName = dayNames[date.getDay()];
            let dateString =
                date.getDate().toString().padStart(2, "0") +
                ":" +
                (date.getMonth() + 1).toString().padStart(2, "0") +
                ":" +
                date.getFullYear().toString().padStart(4, "0");
            $(this).text(dayName + ", " + dateString);
        });
        $(".current-time").each(function () {
            const $container = $(this);
            const $hours = $container.find(".hours");
            const $minutes = $container.find(".minutes");
            const $seconds = $container.find(".seconds");

            setInterval(function () {
                const date = new Date();
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const seconds = date.getSeconds();
                $hours.text(hours.toString().padStart(2, "0"));
                $minutes.text(minutes.toString().padStart(2, "0"));
                $seconds.text(seconds.toString().padStart(2, "0"));
            }, 1000);
        });
    }
});
