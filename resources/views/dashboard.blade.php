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
                          
                           
                             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                             @php
                                $i=0
                              @endphp
                            @foreach($dates as $d)
                            @php
                            $i= 1
                            @end
                            @foreach($shift as $s)
                            @if ($i = 1)
                            @if ($s->date == $d)
                               
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
                           @else
                                 <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$d}}
                                 </th>
                                  <td class="py-4 px-6">
                                       Not Schdudled
                                    </td>
                                    <td class="py-4 px-6">
                                        Schdudled
                                    </td>
                                </tr>
                             @endif
                             @endif
                             @php
                             $i = $i+1
                             @endphp
                                @endforeach
                              @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
