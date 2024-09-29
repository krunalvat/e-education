<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogCall extends Model
{
    use HasFactory;

    protected $table = 'device_log_calls';

    protected $guarded = ['id'];
}
