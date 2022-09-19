<?php

namespace App\Http\Livewire\Animes;

use Livewire\Component;
use App\Models\Anime;

class Delete extends Component
{
    public $animeId;

    public function getAnimeProperty() {
        return Anime::select('id', 'name', 'studio')->find($this->animeId);
    }

    public function delete() {
        $this->anime->delete();

        return redirect('/anime')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/anime');
    }

    public function render()
    {
        return view('livewire.animes.delete');
    }
}
