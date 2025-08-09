<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey = 'id';

    // لازم نضيف image عشان Laravel يقبل تخزينه
protected $fillable = ['name', 'email', 'phone', 'image'];
}
