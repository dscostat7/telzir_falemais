<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\RateRepository;
use Illuminate\Support\Facades\Redirect;

class Counter extends Component
{
    public $count = 0;
    public $rate;
    public $orig;
    public $dest;
    public $plan;
    public $min;
    public $message;
    public $valueMin;
    public $valueFaleMais;
    public $btnCalc = "Calcular";
    protected $listeners = ['origin', 'destiny', 'plane', 'minutes'];

    public function render()
    {
        $this->rate = RateRepository::table();

        return view('livewire/counter');
    }

    public function trash()
    {
        return Redirect::to('/calcule');
    }

    public function origin($orig)
    {
        $this->orig = $orig;
    }

    public function destiny($dest)
    {
        $this->dest = $dest;
    }

    public function plane($plan)
    {
        $this->plan = $plan;
    }

    public function minutes($min)
    {
        $this->min = $min;
    }

    public function calc()
    {
        if($this->orig && $this->dest && $this->plan && $this->min) {
            if($this->orig != $this->dest) {
                $this->getValue($this->orig, $this->dest, $this->plan, $this->min);
                $this->btnCalc = "Realizar outro cálculo";
            } elseif ($this->orig == $this->dest) {
                $this->message = 'Por favor, selecione origem e destino diferentes!';
                $this->btnCalc = "Tentar novamente";
            }
        } else {
            $this->message = 'Por favor, preencha todos os campos';
            $this->btnCalc = "Tentar novamente";
        }
    }

    public function getValue($orig, $dest, $plan, $min)
    {
        foreach($this->rate as $r) {
            if($orig == $r['cod_orig'] && $dest == $r['cod_dest']) {
                $this->valueMin = $r['price'] * $min;

                if($plan == 30 && $min < 30) {
                    $this->valueFaleMais = 0;
                }

                if ($plan == 60 && $min <= 60) {
                    $this->valueFaleMais = 0;
                }

                if ($plan == 120 && $min <= 120) {
                    $this->valueFaleMais = 0;
                }

                if($plan == 30 && $min > 30) {
                    $value = (($min - 30) * $r['price']);
                    $this->valueFaleMais = ($value * 10 * 0.01) + $value;
                }

                if($plan == 60 && $min > 60) {
                    $value = (($min - 60) * $r['price']);
                    $this->valueFaleMais = ($value * 10 * 0.01) + $value;
                }

                if ($plan == 120 && $min > 120) {
                    $value = (($min - 120) * $r['price']);
                    $this->valueFaleMais = ($value * 10 * 0.01) + $value;
                }
            } 
        }
    }
}
