<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'image'
    ];

//    public $table = "students";
//    public $primaryKey = "id";
//    public $keyType = "int";
//    public $incrementing = "true";
//    public $timestamps = "true";

}
