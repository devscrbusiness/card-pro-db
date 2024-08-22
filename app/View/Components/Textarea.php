<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $id;
    public $class;
    public $rows;
    public $autofocus;
    public $autocomplete;

    public function __construct($name, $id = null, $class = null, $rows = '3', $autofocus = false, $autocomplete = '')
    {
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->rows = $rows;
        $this->autofocus = $autofocus;
        $this->autocomplete = $autocomplete;
    }

    public function render()
    {
        return view('components.textarea');
    }
}
