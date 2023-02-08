<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<p> Harry is GAY</p>
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
                                        <th scope="col" class="py-3 px-6">Name</th>
                                        <th scope="col" class="py-3 px-6">Role</></th>
                                        <th scope="col" class="py-3 px-6">Notes</></th>
                                        <th scope="col" class="py-3 px-6">Date</></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($skills as $s)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <a href="/admin/edit/employeeskill/{{$s->id}}">{{$s->name}}</a>
                                                </th>
                                                <td class="py-4 px-6">
                                                    {{$s->Role}}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{$s->Note}}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{$s->updated_at}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                    </div>
            </div>
        </div>
    </div>

</x-app-layout>

