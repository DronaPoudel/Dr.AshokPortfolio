<footer class=" mt-5 ">
		<div class="container">
		<div class="row py-5">
			<div class="col-md-4 text-left">
				<!-- <div class="col"> -->
                    <h3 class="bold">About</h3>
                    <div class="foo-title"></div>
                    <h4>Dr. ASHOK PANDE</h4>
                    <ul class="pl-0">
                        <li> <a href="mailto:drpande.ashok@gmail.com"><i class="fa fa-envelope"></i> drpande.ashok@gmail.com</a> </li>
                        <li> <a href="tel:+977 985 1234 149"><i class="fa fa-phone-square-alt"></i> +977 985 1234 149</a></li>
                        <li> <i class="fa fa-map-signs"></i> Saket Colony, Kinara Marg Sukedhara, Kathmandu, Nepal</li>
                    </ul>
                <!-- </div> -->
			</div>
			<div class="col-md-4 text-left">
                <h3 class="bold">Quick Links</h3>
                <div class="foo-title"></div>
                <ul class="pl-0">
                    <li> <a href="#"> Read articles</a> </li>
                    <li> <a href="#"> Blog</a></li>
                    <li> <a href="#"> Consultation</a></li>
                    <li> <a href="#"> Get Book</a></li>
                </ul>
			</div>
			<div class="col-md-4 text-left">
                    <h3 class="bold">Get in touch</h3>
                    <div class="foo-title"></div>
                    <form class="w-75" action="">
                        <input transparency = 'half' type="text" class="form-control" placeholder="Name">
                        <input transparency = 'half' type="text" class="form-control" placeholder="Email">
                        <textarea transparency = 'half' class="form-control rounded-0" placeholder="message here" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </form>
			</div>
			</div>
		</div>
       <div class="copyright border-top border-white">
        <p class="text-center">copyright Dr. Ashok Pande 2021</p>
       </div>
	</footer>
    <script src="./vendors/js/jquery-3.4.1.min.js"></script>
    <script src="./vendors/js/bootstrap.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
   

    <script>
        $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        });
    </script>

    <!-- Timeline JS -->
      <script>
          (function($) {
    $.fn.timeline = function() {
      var selectors = {
        id: $(this),
        item: $(this).find(".timeline-item"),
        activeClass: "timeline-item--active",
        img: ".timeline__img"
      };
      selectors.item.eq(0).addClass(selectors.activeClass);
      selectors.id.css(
        "background-image",
        "url(" +
          selectors.item
            .first()
            .find(selectors.img)
            .attr("src") +
          ")"
      );
      var itemLength = selectors.item.length;
      $(window).scroll(function() {
        var max, min;
        var pos = $(this).scrollTop();
        selectors.item.each(function(i) {
          min = $(this).offset().top;
          max = $(this).height() + $(this).offset().top;
          var that = $(this);
          if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
            selectors.item.removeClass(selectors.activeClass);
            selectors.id.css(
              "background-image",
              "url(" +
                selectors.item
                  .last()
                  .find(selectors.img)
                  .attr("src") +
                ")"
            );
            selectors.item.last().addClass(selectors.activeClass);
          } else if (pos <= max - 40 && pos >= min) {
            selectors.id.css(
              "background-image",
              "url(" +
                $(this)
                  .find(selectors.img)
                  .attr("src") +
                ")"
            );
            selectors.item.removeClass(selectors.activeClass);
            $(this).addClass(selectors.activeClass);
          }
        });
      });
    };
  })(jQuery);

  $("#timeline-1").timeline();
      </script>
    <script src="./custom.js"></script>
</body>
</html>