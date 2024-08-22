<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FileInput extends Component
{
    public $id;
    public $name;
    public $value;
    public $attributes;

    public function __construct($id, $name, $value = '', $attributes = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->attributes = $attributes;
    }

    public function render()
    {
        return view('components.file-input');
    }
}
