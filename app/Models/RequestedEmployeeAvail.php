<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class RequestedEmployeeAvail extends Model{
    protected $table = "EmployeeAvail";
    protected $fillable = [
        'id',
        'MondayEnd',
        'MondayStart',
        'TuesdayStart',
        'TuesdayEnd',
        'TuesdayEnd',
        'WednesdayStart',
        'WednesdayEnd',
        'ThursdayStart',
        'ThursdayEnd',
        'FridayStart',
        'FridayEnd',
        'FridayStart',
        'SaturdayStart',
        'SaturdayEnd',
        'SundayStart',
        'SundayEnd',
        'EmployeeId',
        'Status'
    ];
}

