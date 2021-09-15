<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CvFormation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
       'user_id' ,'debut', 'fin', 'lieu', 'diplome', 'ecole'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
