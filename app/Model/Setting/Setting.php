<?php
namespace App\Model\Setting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = 'setting';
    protected $fillable = [
        'name', 'keyword', 'meta_title', 'meta_keyword','meta_description' ,
    ];
}