<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyUnitServiceBill extends Model
{
    protected $fillable =[
        'service_id','propertyUnit_id','amount','interval'
    ];
    public function propertyUnit(){
        return $this->belongsTo(PropertyUnit::class);
    }
    public function service(){
        return $this->belongsTo(ServiceBill::class);
    }
}
