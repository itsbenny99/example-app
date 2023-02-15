<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Modles\RequestedHoliday;
use App\Modles\ProcessedEmployeeAvail;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Log;


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
        $holiday = RequestedHoliday::orderby('date', 'ASC')->get();
        foreach ($holiday as $h) {
            if ($h->status = 1) {
                $startDate = \Carbon\Carbon::now()->startOfWeek();
                $endDate = \Carbon\Carbon::now()->endOfWeek();
                $period = \Carbon\CarbonPeriod::create($startDate, $endDate);
                
                
                foreach ($period as $date) {
                    $date->format('d/m/y');
                    $ProcessedEmployeeAvail = ProcessedEmployeeAvail::where('EmployeeId' , '=', $h->EmployeeId)->where('date','=',$date);
                    if ($ProcessedEmployeeAvail != null) {
                        
                }
                
            }
        }
        }
                return Command::SUCCESS;
                
    }
}
