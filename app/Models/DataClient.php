<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataClient extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'nama', 'no_telp', 'jasa', 'brief', 'upload', 'no_invoice', 'status'];
}
