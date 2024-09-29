<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogHistory extends Model
{
    use HasFactory;

    protected $table = 'device_log_histories';

    protected $guarded = ['id'];
}
