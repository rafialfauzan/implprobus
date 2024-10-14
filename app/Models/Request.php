<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'request';

    protected $fillable = ['judul', 'deskripsi', 'start_date', 'end_date', 'kategori_id', 'tag_id', 'user_id', 'status_id', 'outlet_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function outlet(){
        return $this->belongsTo(Outlet::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
