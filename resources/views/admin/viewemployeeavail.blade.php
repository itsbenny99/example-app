<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <br>
                <form action="/admin/create/employeeskill">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create New Skills</button>
                </form>
                <div class="p-6 bg-white border-b border-gray-200"></div>
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">Employee Name</th>
                           <th scope="col" class="py-3 px-6">Monday</th>
                            <th scope="col" class="py-3 px-6">Tuesday</></th>
                            <th scope="col" class="py-3 px-6">Wednesday</th>
                            <th scope="col" class="py-3 px-6">Thursday</></th>
                            <th scope="col" class="py-3 px-6">Friday</th>
                            <th scope="col" class="py-3 px-6">Saturday</></th>
                            <th scope="col" class="py-3 px-6">Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $u)
                        @foreach($availability as $a)
                        
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                  <td class="py-4 px-6">
                                    {{$u->name}}
                                </td>
                                
                                
                                <td class="py-4 px-6">
                                    {{$a->MondayStart}} -> {{$a->MondayEnd}}
                                </td>
                                <td class="py-4 px-6">
                                     {{$a->TuesdayStart}} -> {{$a->TuesdayEnd}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$a->WednesdayStart}} -> {{$a->WednesdayEnd}}
                                </td>
                                <td class="py-4 px-6">
                                     {{$a->ThursdayStart}} -> {{$a->ThursdayEnd}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$a->FridayStart}} -> {{$a->FridayEnd}}
                                </td>
                                <td class="py-4 px-6">
                                     {{$a->SaturdayStart}} -> {{$a->SaturdayEnd}}                                   
                                </td>  
                                 <td class="py-4 px-6">
                                     {{$a->SundayStart}} -> {{$a->SundayEnd}}
                                </td>     
                                <td class="py-4 px-6">
                                  </td>  
                           </tr>
                            
                        @endforeach
                        @endforeach
                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
