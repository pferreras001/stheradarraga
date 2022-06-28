<?php


namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Tarta;

class tartas extends Component
{

  public $tartas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tartas = Tarta::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
      return view('components.tartas');
    }
  }
