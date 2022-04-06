<script src="{{ asset('/frontend/vendor/js/bootstrap.min.js') }}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js') }}"
    integrity="sha512-M+qMI1PHRcYcOpJzeJlaWbVVx2JJyPIwZas8or7dc97LZOokjvbpfRxymhVtlJLyjiF3wGyr0FJOA4DLONLVLw=="
    crossorigin="anonymous"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>
<script src="{{ url('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') }}"></script>

<!-- Owl Carousel init & navigation -->
<script>
    $(document).ready(function () {
        $("#owl-content-8-2").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 20,
                },
                768: {
                    items: 3.2,
                    margin: 30,
                },
            },
        });

        $(".content-8-2 #next-slide").click(function () {
            $("#owl-content-8-2").trigger("next.owl.carousel");
        });
        $(".content-8-2 #prev-slide").click(function () {
            $("#owl-content-8-2").trigger("prev.owl.carousel");
        });

        function navDesktop() {
            $("#owl-content-8-2").on(
                "changed.owl.carousel",
                function (property) {
                    var current = property.item.index;
                    var total = property.item.count;
                    console.log(total - 3);
                    var getId = $(property.target)
                        .find(".owl-item")
                        .eq(current)
                        .find("img")
                        .attr("id");
                    var $pevious_disabled = $(".content-8-2 #prev-slide");
                    var $next_disabled = $(".content-8-2 #next-slide");
                    if (getId == 1) {
                        $pevious_disabled.attr("disabled", true);
                        $pevious_disabled.attr("class", "disabled btn p-1");
                        $next_disabled.attr("disabled", false);
                        $next_disabled.attr("class", "active btn p-1");
                    } else if (getId == total - 3) {
                        $pevious_disabled.attr("disabled", false);
                        $pevious_disabled.attr("class", "active btn p-1");
                        $next_disabled.attr("disabled", true);
                        $next_disabled.attr("class", "disabled btn p-1");
                    } else if (getId <= total - 3) {
                        $pevious_disabled.attr("disabled", false);
                        $pevious_disabled.attr("class", "active btn p-1");
                        $next_disabled.attr("disabled", false);
                        $next_disabled.attr("class", "active btn p-1");
                    }
                }
            );
        }

        function navMobile() {
            $("#owl-content-8-2").on(
                "changed.owl.carousel",
                function (property) {
                    var current = property.item.index;
                    var total = property.item.count;
                    var getId = $(property.target)
                        .find(".owl-item")
                        .eq(current)
                        .find("img")
                        .attr("id");
                    var $pevious_disabled = $(".content-8-2 #prev-slide");
                    var $next_disabled = $(".content-8-2 #next-slide");
                    if (getId == 1) {
                        $pevious_disabled.attr("disabled", true);
                        $pevious_disabled.attr("class", "disabled btn p-1");
                        $next_disabled.attr("disabled", false);
                        $next_disabled.attr("class", "active btn p-1");
                    } else if (getId == total - 1) {
                        $pevious_disabled.attr("disabled", false);
                        $pevious_disabled.attr("class", "active btn p-1");
                        $next_disabled.attr("disabled", true);
                        $next_disabled.attr("class", "disabled btn p-1");
                    } else if (getId <= total - 1) {
                        $pevious_disabled.attr("disabled", false);
                        $pevious_disabled.attr("class", "active btn p-1");
                        $next_disabled.attr("disabled", false);
                        $next_disabled.attr("class", "active btn p-1");
                    }
                }
            );
        }

        var width = $(window).width();
        if (width > 768) {
            navDesktop();
        } else if (width < 768) {
            navMobile();
        }
        $(window).resize(function () {
            var width = $(window).width();
            console.log(width);
            if (width > 768) {
                navDesktop();
            } else if (width < 768) {
                navMobile();
            }
        });
    });
</script>
