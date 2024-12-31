@extends('layout.dashboard_layout')
@section('content')
    
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
@endsection
