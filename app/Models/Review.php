<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'service_id',
        'user_id',
        'IP',
        'subject',
        'review',
    ];

    public function service(){
        return $this->belongsTo(service::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
