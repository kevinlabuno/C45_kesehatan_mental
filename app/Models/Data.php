<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $fillable = ['nim','umur','p1','p2','p3','p4','p5','p6',
    'p7','p8','p9','p10','p11','p12','p13','p14','p15','total','hasil'];
}
