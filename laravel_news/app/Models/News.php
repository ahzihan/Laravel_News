<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable = [
        'category_id',
        'headline',
        'photo',
        'details'
    ];
    public function category(){
       return $this->belongsTo('App\Models\Category');
    }
}
