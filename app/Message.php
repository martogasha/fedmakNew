<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'user_id','message','status','sender_id'
    ];
    public function sender(){
        return $this->belongsTo(User::class);
    }
}
