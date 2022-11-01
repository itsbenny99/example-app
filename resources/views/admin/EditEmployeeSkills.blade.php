
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"></div>
                    <div class="overflow-x-auto relative">
                        <div class="w-full max-w-xs">

                                {!! Form::open(['action' => ['App\Http\Controllers\EmployeeSkills@UpdateSkill', $skills->id]]) !!}
                                @csrf
                                <div class ="mb-6">
                             </div>
                                <div class ="mb-6">
                                    {!! Form::label('Role', 'Description ') !!}
                                    {!! Form::text('Role', $skills->Role, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                                </div>
                                <div class ="mb-6">
                                    {!! Form::label('Note', 'Note ') !!}
                                    {!! Form::text('Note', $skills->Note, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                                </div>


                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
                            {!! Form::close() !!}
                            <br>
                            <form action="/admin/create/deleteemployeeskill/{{$skills->id}}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>


</x-app-layout>
