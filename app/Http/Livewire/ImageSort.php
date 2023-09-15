<?php

namespace App\Http\Livewire;
use Livewire\Component;

class ImageSort extends Component
{
    // public $images = [];
    // public $sortedImages = [];

    // public function mount($images)
    // {
    //     $this->images = $images;
    // }

    public function render()
    {
        return view('livewire.image-sort');
    }

    // public function updateImageOrder($list)
    public function updateImageOrder($list)
    {
        echo "test";
        // $this->sortedImages = $list;
    }
}

