<section class="tartas">
  <div class="container">
    <div class="flexContainer">
      @foreach($tartas as $tarta)
      <div  data-aos="zoom-in" class="tartaItem">
        <a href="{{$tarta->id}}">
          <div class="tartaBox">
            <img class="tartaItemImg" src="img/tartas/{{ $tarta->img_small }}">
            <div class="tartasVerPrecios"><div>Ver precios</div></div>
          </div>
        </a>
        <div class="tartaInfo">
          {{ $tarta->name }}
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>