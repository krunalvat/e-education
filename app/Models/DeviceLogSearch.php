<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogSearch extends Model
{
    use HasFactory;

    protected $table = 'device_log_searches';

    protected $guarded = ['id'];
}
