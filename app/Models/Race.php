<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [

        'id','miesto','datum','trieda',
    ];
    /**
     * @var mixed
     */

    public function riders(){

        return $this->hasMany(Rider::class);

    }
}

