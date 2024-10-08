<div class="p-4 bg-white rounded-3xl" x-data="{visit_dropDown: false}">
    <div class="flex justify-between items-center">
        <h3 class="font-medium text-blue-950">Visit</h3>
        <div class="relative inline-block text-left">
            <div>
                <button 
                class="ps-2 pt-1 pe-2 pb-1 font-semibold text-blue-900 flex items-center bg-slate-100 rounded-full"
                @click="visit_dropDown = !visit_dropDown">
                    <h3 class="text-xs me-1">Options </h3> 
                    <x-heroicon-o-chevron-down class="w-4 h-4"/>
                </button>
            </div>
          
            <!--
              Dropdown menu, show/hide based on menu state.
          
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div 
            x-show="visit_dropDown"
            class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-xl text-blue-900 bg-white  shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" >
              <div class="py-1" >
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="#" class="block px-4 py-2 text-sm hover:bg-slate-100">Daily</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-slate-100">Monthly</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-slate-100">Yearly</a>
              </div>
            </div>
          </div>
    </div>
    <canvas id="chart1"></canvas>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('chart1');

  const totals = {!! json_encode($totals) !!};  // Convert PHP array to JS array
  const dates = {!! json_encode($dates) !!};    // Convert PHP array to JS array

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: dates,  // Use the dates array
      datasets: [{
        label: '# of Visits',
        data: totals,  // Use the totals array
        borderWidth: 1,
        lineTension: 0.3,
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            // Set step size to 1
            stepSize: 1,
            // Use callback to ensure ticks are whole numbers
            callback: function(value) {
              return Number.isInteger(value) ? value : ''; // Only show integers
            }
          }
        }
      }
    }
  });
</script>

