<!DOCTYPE html>
<html>

<body>

<!-- banner -->
<div class="banner">
    <div class="container">
        <script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>

        <div  id="top" class="callbacks_container">
            <div style="width: 100%; height: auto; background-color: rgba(0,0,0,0.5); margin-top: 150px;">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-info">
                            <h3>Every Kind of Food at One Place..</h3>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3>Experience the Food at Lowers Budget..</h3>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3>Simply Place Your Order and Enjoy!</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


</body>
</html>
