<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user() 
    {
        return $this->belongsTo(User::class);    
    }

    protected $fillable = [
        'title',
        'content'
    ];  
}
