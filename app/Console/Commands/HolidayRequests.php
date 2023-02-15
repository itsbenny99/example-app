<?php

namespace App\Console\Commands;
use App\Modles\RequestedHoliday;
use Illuminate\Support\Facades\App;
use App\Models\User;
//use App\Modles\RequestedHoliday;
use App\Modles\ProcessedEmployeeAvail;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Modles\Rholiday; 
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Log;
//use App\Modles\RequestedHoliday;

class HolidayRequests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Process:HolidayRequets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$holiday = \App\Modles\RequestedHoliday::orderby('date', 'ASC')->get();
        $holiday = Rholiday::find(1)->get;
        foreach ($holiday as $h) {
            if ($h->status = 1) {
                $startDate = \Carbon\Carbon::now()->startOfWeek();
                $endDate = \Carbon\Carbon::now()->endOfWeek();
                $period = \Carbon\CarbonPeriod::create($startDate, $endDate);
                
                
                foreach ($period as $date) {
                    $date->format('d/m/y');
                    //$ProcessedEmployeeAvail = ProcessedEmployeeAvail::where('EmployeeId' , '=', $h->EmployeeId)->where('date','=',$date);
                    //if ($ProcessedEmployeeAvail != null) {
                        
               // }
                
            }
        }
        }
                return Command::SUCCESS;
                
    }
}
