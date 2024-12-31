
<div class="w-full relative flex h-screen" 
    x-data="{ 
        sideNav: $persist(false), 
        isSmallScreen: window.innerWidth < 768 
    }"
        x-init="
            // Initialize sideNav state based on window width
            sideNav = window.innerWidth >= 768;
            
            // Watch for changes in screen size
            $watch('isSmallScreen', value => {
                if (!value) {
                    sideNav = true; // Keep sideNav open on larger screens
                } else {
                    sideNav = false; // Close it on smaller screens
                }
            });

            // Add event listener to handle resizing of the window
            window.addEventListener('resize', () => {
                isSmallScreen = window.innerWidth < 768;
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
        class="absolute h-full w-4/6 p-8 md:p-5 xl:p-6 flex flex-col justify-between shadow-2xl md:shadow-sm bg-blue-900 text-white text-bold sm:w-3/6 md:w-3/12 md:static xl:w-1/6"
        @click.outside="sideNav = isSmallScreen ? false : sideNav"
        >

        <div>
            <div class="mb-10 flex justify-between">
                <h4 class="font-bold">VMS App</h4>
                <div class="md:hidden">
                    <button @click="sideNav = false"><x-heroicon-s-chevron-left class="w-6 h-6"/></button>
                </div>
            </div>
            {{-- Start Side Nav Links --}}
            <div class="flex flex-col gap-1 mb-3">
                <div>
                    <h4 class="text-slate-400">General</h4>
                </div>
                <div>
                    <a href="{{ route('home') }}" wire:navigate class="{{ request()->routeIs('home') ? 'active' : 'sideNavHover' }} p-2 flex items-center gap-2">
                       <x-heroicon-o-squares-2x2 class="w-5 h-5"/>Dashboard
                    </a>
                    <a href="/visits" wire:navigate class="{{ request()->routeIs('visits') ? 'active' : 'sideNavHover' }} p-2 flex items-center gap-2 ">
                       <x-heroicon-o-calendar-date-range class="w-5 h-5"/>Visit
                    </a>
                    <a href="#" wire:navigate class="p-2 flex items-center gap-2 ">
                        <x-heroicon-o-information-circle class="w-5 h-5"/>Regulation
                    </a>
                    <a href="#" wire:navigate class=" p-2 flex items-center gap-2 ">
                       <x-heroicon-o-user class="w-5 h-5"/>Guest
                    </a>
                </div>
            </div>
            {{-- End Side Nav Links --}}
        </div>

        <div class="p-2 flex justify-center items-center rounded-md bg-blue-950 hover:bg-white text-white hover:text-blue-950">
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
            <div class="flex justify-between items-center">
                <h1 class="text-lg font-medium">{{ $titlePage }}</h1>
                <p class="text-sm text-slate-400">Home / {{ $breadcrumb }}</p>
            </div>
            {{-- End Page Title --}}

            <div class="flex flex-col gap-3">
                {{-- First Content --}}
                <div class="min-h-screen">
                    @yield('content')
                </div>
                {{-- End First Content --}}
            </div>
        </main>
        {{-- Content End --}}
    </div>
    {{-- End Main --}}
</div>
