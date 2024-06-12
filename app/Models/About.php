<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id', 'summary', 'title', 'birthday', 'age', 'website', 'phone', 'email',
        'address', 'degree', 'freelance', 'short_summary', 'ending'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
