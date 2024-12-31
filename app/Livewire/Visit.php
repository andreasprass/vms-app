<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\GuestVisit;

class Visit extends Component
{
    public function render()
    {
        $visits = GuestVisit::paginate(10);
        // Loop through each visit and format the clock_in value
        foreach ($visits as $visit) {
            $visit->clock_in = Carbon::parse($visit->clock_in)->format('d M Y -  H:i');
            if($visit->clock_out == null){
                $visit->clock_out = null;
            }else{
                $visit->clock_out = Carbon::parse($visit->clock_out)->format('d M Y -  H:i');
            }
        }
        return view('livewire..dashboard.visit',[
            'titlePage' => 'Visit',
            'breadcrumb' => 'Visit',
            'visits' => $visits,
        ]);
    }
}
