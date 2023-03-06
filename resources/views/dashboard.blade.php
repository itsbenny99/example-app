<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Date</th>
                                <th scope="col" class="py-3 px-6">Shift Start</></th>
                                <th scope="col" class="py-3 px-6">Shift End</></th>
                            </tr>
                            </thead>
                            @if($shift =! null)
                            @foreach($shift as $s)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$s->date}}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{$s->start_time}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$s->end_time}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <p> No Shifts Found </p>
                                @endif
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
