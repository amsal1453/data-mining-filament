<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class YearsAcademic extends Model
{
    use HasFactory;

    protected $table = 'years_academics';

    protected $fillable = ['tahun', 'semester'];

    public function facts(): HasMany
    {
        return $this->hasMany(Fact::class, 'tahun_akademik_id');
    }
}
