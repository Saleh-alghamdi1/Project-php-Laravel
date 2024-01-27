<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;


  //نعريف الحقول الي راح اتعامل معاها في قاعدة البيانات 
    protected $fillable = [
        'itemname',
        'price',
        'color',
        'qty', 
        'description',
        'image',
        'itemgroupno', 
       
     ];
}
