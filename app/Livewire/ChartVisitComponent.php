<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GuestVisit;
use Carbon\Carbon; // Import Carbon for date formatting

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
        $this->dates = $visits->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('d M'); // Format as '28 March'
        })->toArray();

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
