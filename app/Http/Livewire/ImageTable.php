<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class ImageTable extends Component
{
    protected $listener = [
        'delete',
    ];

    public function delete ($id) {
        Image::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.image-table', [
            'images' => Image::all(),
        ]);
    }
}
