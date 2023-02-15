<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class RequestedHoliday extends Model
{
    $protected $table = "RequestedHoliday";
    protected $fillable = [
        'id',
        'start_date',
        'end_date',
        'Reason',
        'EmployeeId',
        'status'
        };
}
