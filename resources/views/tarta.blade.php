@extends('layout')

@section('section')

<section class="tarta">
  <div class="container">
    <div class="tartaInfoTitle"><span>{{ $tarta->name }}</span></div>
    <div class="tartaGrid">
      <div class="tartaImg">
        <img src="img/tartas/{{ $tarta->img_big }}">
      </div>
      <div class="tartaInfo">
        <div class="tartaInfoPrecio">
          @if($tarta->type=='multi')
          <div class="tartaInfoPrecioTitle">Precio por Raciones</div>
          <table>
            <thead>
              <td>4</td>
              <td>6</td>
              <td>8</td>
              <td>10</td>
            </thead>
            <tr>
              @foreach(explode(",", $tarta->prices) as $price)
                @if($price == "-")
                  <td>{{ $price }}</td>
                @else
                  <td>{{ $price }}€</td>
                @endif
              @endforeach
            </tr>
          </table>
          @endif
          @if($tarta->type=='single')
          <div class="tartaInfoPrecioTitle">Precio</div>
          <div>{{ $tarta->price }}€/{{ $tarta->unit }}</div>
          @endif
        </div>
        <div class="tartaInfoIngredientes">
          <div class="tartaInfoIngredientesTitle">Ingredientes</div>
          <ul>
            @foreach(explode(",", $tarta->ingredients) as $ingredient)
            <li>{{ $ingredient }}</li>
            @endforeach      
          </ul>
        </div>
      </div>
    </div>
    <div class="tartaInfoEncargo">
      Llama o envíanos un WhatsApp al <a href="tel:+34747418820">747 41 88 20</a> para reservar tu tarta.
    </div> 
  </div>
  
</section>

@endsection