<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogPosition extends Model
{
    use HasFactory;

    protected $table = 'device_log_positions';

    protected $guarded = ['id'];
}
