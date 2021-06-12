<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "dokter";

    protected $fillable = ['nama', 'jabatan'];
}
