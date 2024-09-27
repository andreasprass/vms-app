<div class="w-full relative min-h-screen flex" 
     x-data="{ sideNav: false, isSmallScreen: window.innerWidth < 768 }"
     x-init="$watch('isSmallScreen', value => { if (!value) sideNav = false; })"
     @resize.window="isSmallScreen = window.innerWidth < 768">
    
    {{-- Sidenav Start --}}
    <div 
        x-show="sideNav" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        
        {{-- Apply click.outside only if it's a small screen --}}
        :class="{'@click.outside': isSmallScreen}" 
        @click.outside="isSmallScreen && (sideNav = false)"

    class="absolute h-full w-4/6 p-8 flex flex-col justify-between border-e-2 bg-white text-bold  sm:w-3/6 md:w-3/12 md:static md:min-h-screen xl:w-1/6 ">
        <div class="">
            <div class="mb-5 flex justify-between">
                <h4 class="font-bold">VMS App</h4>
                <div class="md:hidden">
                    <button @click="sideNav = false"><x-heroicon-s-chevron-left  class="w-6 h-6"/></button>
                </div>
            </div>
            <div class="flex flex-col gap-1 mb-3">            
                <div class="">
                    <h4 class="text-slate-500">General</h4>
                </div>
                <div class="">
                    <ul class="">
                        <a href="#" class=" ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-squares-2x2 class="w-5 h-5"/>Dashboard</li>
                        </a>
                        <a href="#" class="  ">
                            <li class="active p-2 flex items-center gap-2 "><x-heroicon-o-calendar-date-range class="w-5 h-5"/>Visit</li>
                        </a>
                        <a href="#" class="  ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-information-circle class="w-5 h-5"/>Regulation</li>
                        </a>
                        <a href="#" class="  ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-user class="w-5 h-5"/>Guest</li>
                        </a>
                    </ul>
                </div>
            </div> 
            <div class="flex flex-col gap-1 mb-3">            
                <div class="">
                    <h4 class="text-slate-500">Setting</h4>
                </div>
                <div class="">
                    <ul class="">
                        <a href="#" class=" ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-squares-2x2 class="w-5 h-5"/>User</li>
                        </a>
                        <a href="#" class="  ">
                            <li class=" p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-calendar-date-range class="w-5 h-5"/>Visit</li>
                        </a>
                        <a href="#" class="  ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-information-circle class="w-5 h-5"/>Regulation</li>
                        </a>
                        <a href="#" class="  ">
                            <li class="p-2 flex items-center gap-2 hover:bg-slate-100  hover:rounded-md"><x-heroicon-o-user class="w-5 h-5"/>Guest</li>
                        </a>
                    </ul>
                </div>
            </div> 
        </div>
        
        <div class="p-2 flex justify-center items-center rounded-md bg-slate-100 hover:bg-black hover:text-white">
            Logout
            <x-heroicon-s-arrow-right-start-on-rectangle  class="w-5 h-5 ms-3"/>
        </div>
    </div>
    {{-- Sidenav End --}}

    {{-- Main Content Start --}}
    <div 
    class="w-full"
    
    x-transition:enter="transition ease-out duration-300"
    x-transition:leave="transition ease-in duration-300"

    >
        <div class="p-4 flex justify-between border-b-2">
            <button @click="sideNav = !sideNav" class=""><x-heroicon-s-bars-3 class="w-6 h-6" /></button>
            <div class="flex gap-2 items-center">
                <div class="border rounded-full p-1 flex">
                    {{-- <x-heroicon-o-moon  class="w-6 h-6"/> --}}
                    <x-heroicon-o-sun  class="w-6 h-6"/>
                </div>
                <img 
                    src="https://via.placeholder.com/150" 
                    alt="Avatar"
                    class=" w-10 h-10 rounded-full border-2 border-white"
                />
            </div>
        </div>
        <div class="p-5 "> 
            main
        </div>
    </div>
    {{-- Main Content End --}}
</div> 
