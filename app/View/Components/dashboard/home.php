<?php

namespace App\View\Components\dashboard;
use App\Models\Team;

use Illuminate\View\Component;

class home extends Component
{
    protected $team;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $teams = Team::all();
        return view('components.dashboard.home', compact('teams'));
    }
}
