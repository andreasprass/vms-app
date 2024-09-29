<div class="w-full relative flex h-screen" 
    x-data="{ 
        sideNav: $persist(false), 
        isSmallScreen: window.innerWidth < 768 
    }"
    x-init="
        // Initialize sideNav state
        if (window.innerWidth >= 768) { 
            sideNav = true; 
        } 
        // Watch for changes in screen size
        $watch('isSmallScreen', value => {
            if (!value) {
                sideNav = true; // Keep sideNav open on larger screens
            } else {
                sideNav = false; // Close it on smaller screens
            }
        });
    "
    @resize.window="isSmallScreen = window.innerWidth < 768; if (!isSmallScreen) sideNav = true">

    {{-- Sidenav Start --}}
    <div 
        x-show="sideNav" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="absolute h-full w-4/6 p-8 flex flex-col justify-between shadow-lg bg-blue-900 text-white text-bold sm:w-3/6 md:w-3/12 md:static xl:w-1/6"
        @click.outside="sideNav = isSmallScreen ? false : sideNav"
        >

        <div>
            <div class="mb-10 flex justify-between">
                <h4 class="font-bold">VMS App</h4>
                <div class="md:hidden">
                    <button @click="sideNav = false"><x-heroicon-s-chevron-left class="w-6 h-6"/></button>
                </div>
            </div>
            <div class="flex flex-col gap-1 mb-3">
                <div>
                    <h4 class="text-slate-400">General</h4>
                </div>
                <ul>
                    <a href="#">
                        <li class="p-2 active flex items-center gap-2"><x-heroicon-o-squares-2x2 class="w-5 h-5"/>Dashboard</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-calendar-date-range class="w-5 h-5"/>Visit</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-information-circle class="w-5 h-5"/>Regulation</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-user class="w-5 h-5"/>Guest</li>
                    </a>
                </ul>
            </div>

            <div class="flex flex-col gap-1 mb-3">
                <div>
                    <h4 class="text-slate-400">Setting</h4>
                </div>
                <ul>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-squares-2x2 class="w-5 h-5"/>User</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-calendar-date-range class="w-5 h-5"/>Visit</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-information-circle class="w-5 h-5"/>Regulation</li>
                    </a>
                    <a href="#">
                        <li class="p-2 flex items-center gap-2 sideNavHover"><x-heroicon-o-user class="w-5 h-5"/>Guest</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="p-2 flex justify-center items-center rounded-md bg-blue-950 hover:bg-black hover:text-white">
            Logout
            <x-heroicon-s-arrow-right-start-on-rectangle class="w-5 h-5 ms-3"/>
        </div>
    </div>
    {{-- Sidenav End --}}

    {{-- Main --}}
    <div class="w-full h-full overflow-y-auto" x-transition:enter="transition ease-out duration-300" x-transition:leave="transition ease-in duration-300">
        {{-- Top Nav --}}
        <div class="p-4 flex justify-between shadow-sm">
            <button @click="sideNav = !sideNav" class=""><x-heroicon-s-bars-3 class="w-6 h-6" /></button>
            <div class="flex gap-2 items-center">
                <div class="border rounded-full p-1 flex">
                    <x-heroicon-o-sun class="w-6 h-6"/>
                </div>
                <img src="https://via.placeholder.com/150" alt="Avatar" class="w-10 h-10 rounded-full border-2 border-white"/>
                <div>
                    <h3>Zack Sigmund</h3>
                </div>
            </div>
        </div>
        {{-- End Top Nav --}}

        {{-- Content Start --}}
        <main class="p-5 flex flex-col gap-5 bg-slate-50">
            {{-- Page Title --}}
            <div class="flex justify-between">
                <h1 class="text-lg font-medium">Dashboard</h1>
                <p class="text-lg">Home / Dashboard</p>
            </div>
            {{-- End Page Title --}}

            <div class="flex flex-col gap-3">
                {{-- First Content --}}
                <div class="text-white">
                    <div class="p-10 bg-teal-500 rounded-3xl mb-3 bg-cover bg-center">
                        <p class="text-xl">Welcome back, Zack! ✨</p>
                        <p class="text-xs">Here's what's happening with your system today</p>
                    </div>
                    <div class="p-4 bg-sky-50 rounded-3xl flex flex-col gap-3">
                        {{-- statistic start --}}
                        <div class="p-4 bg-white rounded-3xl flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-blue-900">Today Visit</h3>
                                <a href="#">
                                    <button class="pt-1 pb-1 ps-3 pe-3 bg-sky-200 rounded-full flex items-center text-sm text-blue-950">All visits 
                                        <x-heroicon-s-chevron-right class="w-4 h-4"/>
                                    </button>
                                </a>
                            </div>
                            <hr>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="flex items-center">
                                        <p class="font-semibold text-blue-900 me-2 text-lg flex items-center">35 <x-heroicon-o-arrow-trending-up class="w-5 h-5 ms-2" /></p>
                                    </div>
                                    
                                    <div class="text-slate-400">
                                        <p class="text-xs">Visit</p>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center">
                                        <p class="font-semibold text-blue-900 me-2 text-lg flex items-center">35 <x-heroicon-o-arrow-long-right class="w-5 h-5 ms-2" /></p>
                                    </div>
                                    <div class="text-slate-400">
                                        <p class="text-xs">Yesterday Visit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- statistic end --}}
                        {{-- statistic start --}}
                        <div class="p-4 bg-white rounded-3xl flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-blue-900">Today Visit</h3>
                                <a href="#">
                                    <button class="pt-1 pb-1 ps-3 pe-3 bg-sky-200 rounded-full flex items-center text-sm text-blue-950">All visits 
                                        <x-heroicon-s-chevron-right class="w-4 h-4"/>
                                    </button>
                                </a>
                            </div>
                            <hr>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="flex items-center">
                                        <p class="font-semibold text-blue-900 me-2 text-lg flex items-center">35 <x-heroicon-o-arrow-trending-up class="w-5 h-5 ms-2" /></p>
                                    </div>
                                    
                                    <div class="text-slate-400">
                                        <p class="text-xs">Visit</p>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center">
                                        <p class="font-semibold text-blue-900 me-2 text-lg flex items-center">35 <x-heroicon-o-arrow-long-right class="w-5 h-5 ms-2" /></p>
                                    </div>
                                    <div class="text-slate-400">
                                        <p class="text-xs">Yesterday Visit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- statistic end --}}
                    </div>
                </div>
                {{-- End First Content --}}

                {{-- Second Content --}}
                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center">
                        <h3 class="font-medium">Summary</h3>
                        <button class="ps-3 pt-2 pe-3 pb-2 text-white flex items-center bg-blue-900 rounded-full"><h3 class="text-xs">All Export</h3> <x-heroicon-o-arrow-down-on-square class="w-4 h-4"/></button>
                    </div>
                    <div class="flex flex-col gap-4 justify-between">
                        @livewire('chart-visit-component')
                        <div class="p-4 bg-white rounded-3xl">
                            chart 2
                        </div>
                    </div>
                </div>
                {{-- End Second Content --}}
            </div>
        </main>
        {{-- Content End --}}
    </div>
    {{-- End Main --}}
</div>
