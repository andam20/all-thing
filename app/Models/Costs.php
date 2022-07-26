<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costs extends Model
{
    use HasFactory;
    protected $fillable=[
        'item_name','desc','price','cost_id'
    ];


        //relation ship to user
        public function user_costs(){
            return $this->belongsTo(User::class,'cost_id');
        }

}
