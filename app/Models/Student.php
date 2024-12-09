<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{

    protected $table = 'students';

    protected $fillable = ['nama', 'nim', 'angkatan', 'jenis_kelamin'];


    public function facts(): HasMany
    {
        return $this->hasMany(Fact::class, 'peminatan_id');
    }
}
