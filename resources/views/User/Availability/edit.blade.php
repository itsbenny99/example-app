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
                <form action="/create/NewAvail">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create New Availbility</button>
                </form>
                <div class="p-6 bg-white border-b border-gray-200"></div>
                    <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                    <th scope="col" class="py-3 px-6">Monday</th>
                                        <th scope="col" class="py-3 px-6">Tuesday</></th>
                                        <th scope="col" class="py-3 px-6">Wednesday</></th>
                                        <th scope="col" class="py-3 px-6">Thursday</></th>
                                        <th scope="col" class="py-3 px-6">Friday</></th>
                                        <th scope="col" class="py-3 px-6">Saturday</></th>
                                        <th scope="col" class="py-3 px-6">Sunday</></th>
                                        <th scope="col" class="py-3 px-6">Status</></th>
                                    </tr>
                                    </thead>
                                    </x-app-layout>
