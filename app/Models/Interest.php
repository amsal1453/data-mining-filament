<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Interest extends Model
{
    use HasFactory;

    protected $table = 'interests';

    protected $fillable = ['id', 'nama_peminatan'];

    public function facts(): HasMany
    {
        return $this->hasMany(Fact::class, 'mahasiswa_id');
    }
}
