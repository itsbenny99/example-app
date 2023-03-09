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
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('monday_start_time', 'Monday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('MondayStart', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                           
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('monday_end_time', 'Monday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('monday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,     
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                  
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('tuesday_start_time', 'Tuesday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('tuesday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('tuesday_end_time', 'Tuesday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('tuesday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,   
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('wednesday_start_time', 'Wednesday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('wednesday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' , 
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('wednesday_end_time', 'Wednesday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('wednesday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('thursday_start_time', 'Thursday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('thursday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('thursday_end_time', 'Thursday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('thursday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' , 
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('friday_start_time', 'Friday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('friday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' , 
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('friday_end_time', 'Friday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('friday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('saturday_start_time', 'Saturday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('saturday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('saturday_end_time', 'Saturday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('saturday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                        <div style ="display: flex; justify-content: space-around;'>
                        <div style ="border: 1px solid lightgray; background-color: red; width: 70%;">
                         <div class ="mb-6">
                            {!! Form::label('sunday_start_time', 'Sunday Start Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('sunday_start_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        
                        </div>
                        <div class ="mb-6">
                            {!! Form::label('sunday_end_time', 'Sunday End Time', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) !!}
                            {!! Form::select('sunday_end_time', [ '',
                              0000 => '0000',
                              0100 => '0100',
                              0200 => '0200',
                              0300 => '0300',
                              0400 => '0400' ,
                              0500 => '0500',
                              0600 => '0600',
                              0700 => '0700',
                              0800 => '0800',
                              0900 => '0900' ,                            
                              1000 => '1000',
                              1100 => '1100',
                              1200 => '1200',
                              1300 => '1300',
                              1400 => '1400',
                              1500 => '1500',
                              1600 => '1600',
                              1700 => '1700',
                              1800 => '1800' ,
                              1900 => '1900',
                              2000 => '2000',
                              2100 => '2100',
                              2200 => '2200',
                              2300 => '2300' ,  
                              -1 => 'Not Available,
                              ], null,['class' => 'form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) !!}
                        </div>
                        </div>
                      
                        </div>
                        <div style="clear: both;"></div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
            {!! Form::close() !!}              
  </x-app-layout>
