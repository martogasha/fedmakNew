<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyReport extends Model
{
    protected $fillable=[
        'tenant_id','property','house','houseType','amount','balance','status'
    ];
    public function tenant(){
        return $this->belongsTo(User::class);
    }
}
