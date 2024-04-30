<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'nomor_meja'
    ];

    // Metode untuk mencari pengguna berdasarkan email
    public static function findByEmail($email)
    {
        return static::where('email', $email)->first();
    }
}
