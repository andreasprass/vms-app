@extends('layout.dashboard_layout')

@section('content')
<div class="bg-white p-5 rounded-lg w-full border border-1 border-slate-300 shadow-lg">
    <h2 class="mb-5 font-medium">Visitor Data</h2>
    <!-- Make table responsive by wrapping it with overflow-x-auto -->
    <div class="overflow-x-auto"> <!-- Added for responsiveness -->
        <table class="table-auto w-full min-w-max" >
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-2 px-4 text-left text-sm">No</th>
                    <th class="py-2 px-4 text-left text-sm">Visitor Name</th>
                    <th class="py-2 px-4 text-left text-sm">Reason</th>
                    <th class="py-2 px-4 text-left text-sm">Appointment Person</th>
                    <th class="py-2 px-4 text-left text-sm">Clock In</th>
                    <th class="py-2 px-4 text-left text-sm">Clock Out</th>
                    <th class="py-2 px-4 text-left text-sm">Status</th>
                    <th class="py-2 px-4 text-left text-sm">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($visits as $visit)
                <tr class="odd:bg-slate-300 even:bg-slate-100"> <!-- Add odd/even background colors -->
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $visit->id_guest }}</td>
                    <td class="py-2 px-4">{{ $visit->reason }}</td>
                    <td class="py-2 px-4">{{ $visit->id_user }}</td>
                    {{-- Clock In --}}
                    @if($visit->clock_in <> null)
                    <td class="py-2 px-4 text-center">{{ $visit->clock_in }}</td>
                    @else
                    <td class="py-2 px-4 text-center">-</td>
                    @endif
                    {{-- Clock Out --}}
                    @if($visit->clock_out <> null)
                    <td class="py-2 px-4 text-center">{{ $visit->clock_out }}</td>
                    @else
                    <td class="py-2 px-4 text-center">-</td>
                    @endif
                    {{-- Status --}}
                    @if ($visit->status == 1)
                    <td class="py-2 px-4 text-center"><span class="bg-yellow-400 px-3 py-1 rounded-full text-sm text-white">Visiting</span></td>
                    @elseif ($visit->status == 2)
                    <td class="py-2 px-4 text-center"><span class="bg-green-400 px-3 py-1 rounded-full text-sm text-white">Done</span></td>
                    @elseif ($visit->status == 4)
                    <td class="py-2 px-4 text-center"><span class="bg-red-400 px-3 py-1 rounded-full text-sm text-white">Cancelled</span></td>
                    @else
                    <td class="py-2 px-4 text-center"><span class="bg-slate-400 px-3 py-1 rounded-full text-sm text-white"> - </span></td>
                    @endif
                    
                    <td class="py-2 px-4 text-center flex items-center justify-center gap-2">
                        <button class="bg-blue-800 hover:bg-blue-600 py-0.5 px-2 rounded-md">Detail</button>
                        <button class="bg-yellow-400 py-0.5 px-2 text-black rounded-md">Edit</button>
                        <button class="bg-red-500 py-0.5 px-2 rounded-md">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="py-2 px-4 text-left text-sm">No</th>
                    <th class="py-2 px-4 text-left text-sm">Visitor Name</th>
                    <th class="py-2 px-4 text-left text-sm">Reason</th>
                    <th class="py-2 px-4 text-left text-sm">Appointment Person</th>
                    <th class="py-2 px-4 text-left text-sm">Clock In</th>
                    <th class="py-2 px-4 text-left text-sm">Clock Out</th>
                    <th class="py-2 px-4 text-left text-sm">Status</th>
                    <th class="py-2 px-4 text-left text-sm">Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
