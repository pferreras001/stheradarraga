   <script>
    $(function() {
        var nabarLogo = $(".logoImg");
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
            if (scroll >= 10) {
                nabarLogo.removeClass('logoImg').addClass("logoImg-scrolldown");
            } else {
                nabarLogo.removeClass("logoImg-scrolldown").addClass('logoImg');
            }
        });
    });
  </script>

<section>
  <div class="logo">
    <img class="logoImg" src="img/logo.png">
  </div>
</section>