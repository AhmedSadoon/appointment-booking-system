<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

protected $table='appointments';
protected $fillable = ['service_id','client_id','start_time','end_time','status'];

   public function service()
{
    return $this->belongsTo(Service::class);
}

    public function client()
{
    return $this->belongsTo(User::class, 'client_id');
}
}
