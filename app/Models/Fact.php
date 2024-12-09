<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fact extends Model
{
    protected $table = 'facts';

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'mahasiswa_id');
    }
    
    public function interest(): BelongsTo
    {
        return $this->belongsTo(Interest::class, 'peminatan_id');
    }

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(YearsAcademic::class, 'tahun_akademik_id');
    }
}
