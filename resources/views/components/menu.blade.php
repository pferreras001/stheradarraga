  <script>
    $(window).scroll(function() {
      $('.navbar-default').toggleClass('scrolled', $(this).scrollTop() > 50);
    });
  </script>

  <script>    
    $(function() {
      var nabarLogo = $(".menuContainer");
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        
        if (scroll >= 10) {
          nabarLogo.removeClass('menuContainer').addClass("menuContainer-scrolldown");
        } else {
          nabarLogo.removeClass("menuContainer-scrolldown").addClass('menuContainer');
        }
      });
    });
  </script>

  <script>    
    $(function() {
      var nabarLogo = $(".navbarLogo");
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        
        if (scroll >= 10) {
          nabarLogo.removeClass('navbarLogo').addClass("navbarLogo-scrolldown");
        } else {
          nabarLogo.removeClass("navbarLogo-scrolldown").addClass('navbarLogo');
        }
      });
    });
  </script>


  <section class="menu">
    <div class="menuContainer">
      <div class="navbarLogo">
        <a href="{{ route('home') }}"><img src="img/logo.png"></a>
      </div>
      <div>
        <nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-light fixed-top">
          <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a  href="{{ route('home') }}" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('home') }}"  class="nav-link">Tartas</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('servicios') }}" class="nav-link">Servicios</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contacto') }}" class="nav-link">Contacto</a>
              </li> 
            </ul>
          </div>
        </nav>
      </div>
      <div class="topInfo">
        <div class="tlf">
          <a href="tel:+34747418820"><?php require('imports/svg/telephone.svg') ?><?php require('imports/svg/whatsapp.svg') ?> 747 41 88 20 · Para encargos</a>
        </div>
      </div>
    </div>
  </section>

