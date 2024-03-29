<?php

namespace App\Console\Commands;

use App\Models\RequestedEmployeeAvail;
use App\Models\User;
use App\Models\Skills;
use App\Models\AssignedShifts;
use App\Models\Shift;
use App\Models\ProcessedEmployeeAvail;
use App\Modles\RequestEmployeeAvail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ShiftAdmin extends Command
{

  protected $signature = 'command:ShiftAdmin';
  
  protected $description = 'This Processes Old Shifts';
  
   public function handle()
    {
       $LastWeekDate=\Carbon\Carbon::now()->subWeek()->format('d-m-Y'); 
       $TodayDate=\Carbon\Carbon::now()->format('d-m-Y');  
       $period = \Carbon\CarbonPeriod::create($LastWeekDate, $TodayDate);
        foreach ($period as $date) {
            $d = $date->format('l');
            $d2 = $date->format('d/m/Y');
            
             $user = User::orderby('name', 'ASC')->get();
             
             foreach($user as $u) {
                  $shift = Shift::get();
                  $Assigned = AssignedShifts::get();

                  if ($shift->date == $d2) {
                     $shift->delete();
                  }
                 
                 if ($Assigned->date == $d2) {
                     $Assigned->delete();
                 }
                  
         }
     }
}  
       
}       
       
       
