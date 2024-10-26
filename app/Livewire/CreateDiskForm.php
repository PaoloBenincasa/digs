<?php

namespace App\Livewire;

use App\Models\Disk;
use App\Models\Genre;
use App\Models\Format;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateDiskForm extends Component
{
    #[Validate('required|min:1')]
    public $title;
    #[Validate('required|min:1')]
    public $artist;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required|numeric')]
    public $year;
    #[Validate('required')]
    public $format;  
    #[Validate('required')]
    public $genre = [];
    #[Validate('required|min:1')]
    public $label;
    public $disk;
    


    public function rules() :array
    {
        return [
            'title' => 'required|min:1',
            'artist' => 'required|min:1',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric',
            'description' => 'required|min:10',
            'format' => 'required',
            'label' => 'required',
            'genre' => 'required|array',
        ];
    }

    public function messages() :array{
        return [
            '.required' => 'Campo obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 1 carattere',
            'artist.min' => 'L\'artista deve avere almeno 1 carattere',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri',
            'price.numeric' => 'Il prezzo deve essere un numero decimale',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save(){
        $this->validate();
        $this->disk = Disk::create([
            'title' => $this->title,
            'artist' => $this->artist,
            'description' => $this->description,
            'price' => $this->price,
            'year' => $this->year,
            'format_id' => $this->format,
            'label' => $this->label,
            'user_id' => Auth::id()
        ]);

        $this->disk->genres()->sync($this->genre);

        session()->flash('success', 'disco inserito correttamente');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.create-disk-form', [
            'formats' => Format::all(), 
            'genres' => Genre::all(),
        ]);
    }
}
