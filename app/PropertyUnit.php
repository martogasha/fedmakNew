<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyUnit extends Model
{
    protected $fillable = [
        'name','type','property_id','status'
    ];
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function propertyUnitServiceBill(){
        return $this->belongsTo(PropertyUnitServiceBill::class);
    }
}
