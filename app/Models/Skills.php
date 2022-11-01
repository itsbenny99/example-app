<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model{
    protected $table = "employee_skills";
    protected $fillable = [
        'id',
        'name',
        'Role',
        'date',
        'Note',
        'created_at',
        'updated_at',
        'permissionid'
    ];
}

