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

                        {!! Form::open(['action' => ['App\Http\Controllers\Availability@PostAvailability']]) !!}
                        @csrf
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style =" border: 1px solid lightgray; background-color: red; width: 40%;">
                         <div class ="mb-6">
                            {!! Form::label('start_time', 'Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('name', [ '',
                              0 => '0000',
                              1 => '0100',
                              2 => '0200',
                              3 => '0300',
                              4 => '0400' ,
                               5 => '0500',
                              6 => '0600',
                              7 => '0700',
                              8 => '0800',
                              9 => '0900' ,                            
                              10 => '1000',
                              11 => '1100',
                              12 => '1200',
                              13 => '1300',
                              14 => '1400',
                              15 => '1500',
                              16 => '1600',
                              17 => '1700',
                              18 => '1800' ,
                              19 => '1900',
                              20 => '2000',
                              21 => '2100',
                              22 => '2200',
                              23 => '2300' ,                   
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('end_time', 'End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('end_time', [ '',
                              0 => '0000',
                              1 => '0100',
                              2 => '0200',
                              3 => '0300',
                              4 => '0400' ,
                               5 => '0500',
                              6 => '0600',
                              7 => '0700',
                              8 => '0800',
                              9 => '0900' ,                            
                              10 => '1000',
                              11 => '1100',
                              12 => '1200',
                              13 => '1300',
                              14 => '1400',
                              15 => '1500',
                              16 => '1600',
                              17 => '1700',
                              18 => '1800' ,
                              19 => '1900',
                              20 => '2000',
                              21 => '2100',
                              22 => '2200',
                              23 => '2300' ,                   
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                  
                        </div>
                        </div>
                        <div style=" border: 1px solid lightgray; background-color: green; width: 40%;">
                         <div class ="mb-6">
                            {!! Form::label('start_time', 'Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('name', [ '',
                              0 => '0000',
                              1 => '0100',
                              2 => '0200',
                              3 => '0300',
                              4 => '0400' ,
                               5 => '0500',
                              6 => '0600',
                              7 => '0700',
                              8 => '0800',
                              9 => '0900' ,                            
                              10 => '1000',
                              11 => '1100',
                              12 => '1200',
                              13 => '1300',
                              14 => '1400',
                              15 => '1500',
                              16 => '1600',
                              17 => '1700',
                              18 => '1800' ,
                              19 => '1900',
                              20 => '2000',
                              21 => '2100',
                              22 => '2200',
                              23 => '2300' ,                   
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('end_time', 'End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('end_time', [ '',
                              0 => '0000',
                              1 => '0100',
                              2 => '0200',
                              3 => '0300',
                              4 => '0400' ,
                               5 => '0500',
                              6 => '0600',
                              7 => '0700',
                              8 => '0800',
                              9 => '0900' ,                            
                              10 => '1000',
                              11 => '1100',
                              12 => '1200',
                              13 => '1300',
                              14 => '1400',
                              15 => '1500',
                              16 => '1600',
                              17 => '1700',
                              18 => '1800' ,
                              19 => '1900',
                              20 => '2000',
                              21 => '2100',
                              22 => '2200',
                              23 => '2300' ,                   
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        </div>
                        <div style="clear: both;"></div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
            {!! Form::close() !!}              
  </x-app-layout>
