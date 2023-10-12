<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    protected $table = 'save';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'userid', 'gametitle', 'description', 'filepath'
    ];
}
