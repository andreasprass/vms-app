<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GuestVisit;

class ChartVisitComponent extends Component
{
    public $visitsPerDay = [];
    public $dates = [];
    public $totals = [];

    public function mount()
    {
        // Fetch guest visits per day and group by date
        $visits = GuestVisit::selectRaw('DATE(clock_in) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // Prepare dates and totals for Chart.js
        $this->dates = $visits->pluck('date')->toArray();
        $this->totals = $visits->pluck('total')->toArray();
    }

    public function render()
    {
        return view('livewire.chart-visit-component', [
            'dates' => $this->dates,
            'totals' => $this->totals,
        ]);
    }
}
