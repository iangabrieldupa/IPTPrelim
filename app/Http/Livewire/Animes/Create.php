<?php

namespace App\Http\Livewire\Animes;

use Livewire\Component;
use App\Models\Anime;

class Create extends Component
{
    public $name, $genre, $status, $studio;

    public function addAnime() {
        $this->validate([
            'name'          =>      ['required', 'string', 'max:255'],
            'genre'         =>      ['required', 'string', 'max:255'],
            'status'        =>      ['required', 'string', 'max:255'],
            'studio'        =>      ['required', 'string', 'max:255'],
        ]);

        Anime::create([
            'name'              =>      $this->name,
            'genre'              =>      $this->genre,
            'status'              =>      $this->status,
            'studio'              =>      $this->studio,
        ]);

        return redirect('/anime')->with('message', 'Anime added successfully');
    }



    public function render()
    {
        return view('livewire.animes.create');
    }
}
