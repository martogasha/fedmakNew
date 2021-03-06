<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
      'name','location','lName','lPhone','lEmail'
    ];

    public function propertyUnit(){
        return $this->belongsTo(PropertyUnit::class);
    }
}
