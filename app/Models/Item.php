<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

 //アソシエーション
 public function user()
 {
     return $this->belongsTo(User::class);
 }

    use HasFactory;

    protected $fillable = [

        'name','word','situation','merit','detail','user_id'//'image',

        ];
}
