<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceAppInstallate extends Model
{
    use HasFactory;

    protected $table = 'device_app_installates';

    protected $guarded = ['id'];
}
