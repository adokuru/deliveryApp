<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingLogs extends Model
{
    use HasFactory;

    // guarded
    protected $guarded = [];

    public function Tracking()
    {
        return $this->belongsTo('App\Models\Tracking', 'tracking_id');
    }
}
