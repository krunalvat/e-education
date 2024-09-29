<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogContact extends Model
{
    use HasFactory;

    protected $table = 'device_log_contacts';

    protected $guarded = ['id'];
}
