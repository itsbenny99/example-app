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



class EmployeeAvail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:UpdateAvail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Processes Employees Availbility';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startDate = \Carbon\Carbon::now()->startOfWeek();
        $endDate = \Carbon\Carbon::now()->endOfWeek();
        $period = \Carbon\CarbonPeriod::create($startDate, $endDate);
        foreach ($period as $date) {
            $d = $date->format('l');
            $d2 = $date->format('d/m/Y');

            Log::error($d);
            Log::error($d2);

            $user = User::orderby('name', 'ASC')->get();
            foreach ($user as $u) {
                $Avail = RequestedEmployeeAvail::where('EmployeeId', '=', $u->id)->where('Status', '=', 1)->orderBy('id')->first();
                Log::error($Avail);

                if ($Avail != null) {
                    if ($d == 'Monday') {
                        if ($Avail->MondayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->MondayStart;
                            $a->end_time = $Avail->MondayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();
                        }

                    }

                    if ($d == 'Tuesday') {
                        if ($Avail->TuesdayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->TuesdayStart;
                            $a->end_time = $Avail->TuesdayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }

                    if ($d == 'Wednesday') {
                        if ($Avail->WednesdayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->WednesdayStart;
                            $a->end_time = $Avail->WednesdayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }

                    if ($d == 'Thursday') {
                        if ($Avail->ThursdayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->ThursdayStart;
                            $a->end_time = $Avail->ThursdayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }

                    if ($d == 'Friday') {
                        if ($Avail->FridayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->FridayStart;
                            $a->end_time = $Avail->FridayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }

                    if ($d == 'Saturday') {
                        if ($Avail->SaturdayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->SaturdayStart;
                            $a->end_time = $Avail->SaturdayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }

                    if ($d == 'Sunday') {
                        if ($Avail->SundayStart != -1) {
                            $a = new ProcessedEmployeeAvail;
                            $a->date = $d2;
                            $a->start_time = $Avail->SundayStart;
                            $a->end_time = $Avail->SundayEnd;
                            $a->EmployeeId = $u->id;
                            $a->save();

                        }
                    }
                }

                    }













        //$date = date('Y-m-d');

        //$startDate = \Carbon\Carbon::now()->startOfWeek();
        //$endDate = \Carbon\Carbon::now()->endOfWeek();
        //$dateInterval = \DateInterval::createFromDateString('1 day');
        //$datePeriod = new \DatePeriod($startDate, $dateInterval, $endDate->modify('+1 day'));




        //Log::error('', [ 'd' => $datePeriod]);
        //foreach($datePeriod as $d){
            //$day = $d[0]['date'];
            //$a = array_push($datePeriod,$d->date);






            //Log::error('', [ 'd' => $d]);
           // $day = ['d' =>$d->DateTime];

            //$day =$d->toDayDateTimeString();
           // $day = \Carbon\Carbon::createFromFormat('y/m/s H:i:s', $date)->format('1');
            //Log::info($day);
        }



    }
}
