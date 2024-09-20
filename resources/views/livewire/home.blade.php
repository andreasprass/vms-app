<div class="w-full d-flex" x-data="{ open: false }">
    {{-- Sidenav Start --}}
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        {{-- Close sidenav if clicked outside --}}
        @click.outside="open = false"

        class="absolute h-full w-4/6 -ms-0 p-8 flex justify-between bg-blue-500 text-bold">
        <div class="">
            <ul>
                <li>Dashboard</li>
                <li>Visit</li>
                <li>User</li>
                <li>Setting</li>
            </ul>
        </div>
        <div class="">
            <button @click="open = false">Close</button>
        </div>
    </div>
    {{-- Sidenav End --}}

    <div class="bg-yellow-500">
        <div class="p-4 bg-amber-500">
            <button @click="open = true">ham</button>
            <div>

            </div>
        </div>
        <div class="bg-orange-500"> 
            main
        </div>
    </div>
</div>
