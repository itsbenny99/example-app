<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class ProcessedEmployeeAvail extends Model{
    protected $table = "ProcessedEmployeeAvail";
    protected $fillable = [
        'id',
        'date',
        'start_time',
        'end_time',
        'EmployeeId'
    ];
}

