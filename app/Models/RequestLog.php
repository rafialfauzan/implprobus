<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLog extends Model
{
    use HasFactory;
    
    protected $table = 'requestlog';

    protected $fillable = ['request_id', 'status_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
