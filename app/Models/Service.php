<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
     protected $fillable = ['name','description','duration','price','provider_id','active','buffer_time'];
    public function appointments()
{
    return $this->hasMany(Appointment::class);
}

    public function provider()
{
    return $this->belongsTo(User::class, 'provider_id');
}

}
