<?php

namespace App\Http\Livewire\Animes;

use Livewire\Component;
use App\Models\Anime;

class Index extends Component
{
    public function LoadAnimes() {
        $animes = Anime::orderBy('id')->get();

        return compact('animes');
    }
    public function render()
    {
        return view('livewire.animes.index', $this->LoadAnimes());
    }
}
