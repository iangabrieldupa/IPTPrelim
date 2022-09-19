<?php

namespace App\Http\Livewire\Animes;

use Livewire\Component;
use App\Models\Anime;

class Edit extends Component
{
    public $animeId;
    public $name, $genre, $status, $studio;

    public function mount() {
        $this->name = $this->anime->name;
        $this->genre = $this->anime->genre;
        $this->status = $this->anime->status;
        $this->studio = $this->anime->studio;
    }

    public function editAnime() {
        $this->validate([
            'name'          =>      ['required', 'string', 'max:255'],
            'genre'         =>      ['required', 'string', 'max:255'],
            'status'        =>      ['required', 'string', 'max:255'],
            'studio'        =>      ['required', 'string', 'max:255'],
        ]);

        $this->anime->update([
            'name'          =>      $this->name,
            'genre'          =>      $this->genre,
            'status'          =>      $this->status,
            'studio'          =>      $this->studio,
        ]);

        return redirect('/anime')->with('message', 'Updated successfuly');
    }

    public function getAnimeProperty() {
        return Anime::find($this->animeId);
    }

    public function render()
    {
        return view('livewire.animes.edit');
    }
}
