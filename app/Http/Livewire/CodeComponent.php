<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CodeComponent extends Component
{
    public $code;

    protected $listeners = ['postAdded' => 'codeUpdated'];

    public function codeUpdated($code)
    {
        $this->code = $code;
    }

    public function mount()
    {
        $code = file_get_contents(resource_path('views/front/online-editor/code/tailwind.html'));
        $this->code = $code;
    }

    public function render()
    {
        return view('livewire.code-component');
    }
}
