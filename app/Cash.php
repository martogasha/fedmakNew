<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $fillable=[
        'tenant_id','property','house','houseType','amount'
    ];
    public function tenant(){
        return $this->belongsTo(User::class);
    }
}
