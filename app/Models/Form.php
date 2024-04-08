<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'first',
        'second',
        'third',
        'fourth',
        'fifth',
    ];    

    public function user(){
        return $this->belongsTo(User::class);
    }
}
