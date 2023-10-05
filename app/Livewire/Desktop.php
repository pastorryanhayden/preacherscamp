<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Speaker;
use App\Models\ScheduleItem;

class Desktop extends Component
{
    public $menu = false;
    public $speakers;
    public $scheduleItems;

    public function toggleMenu()
    {
        $this->menu = !$this->menu;
    }
    
    public function closeMenu()
    {
        $this->menu = false;
    }
    public function mount()
    {
        $this->speakers = Speaker::all();
        $this->scheduleItems = ScheduleItem::all();
    }

    public function render()
    {
        return view('livewire.desktop');
    }
}
