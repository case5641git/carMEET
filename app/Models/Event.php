<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'max_people',
        'open_flag',
        'start_date',
        'end_date',
        'created_at',
        'updated_at'
    ];

    /** 
     * イベント情報の取得 
     * @pram string $datetime
     * @return Collection
    */
    public static function getEventForTop(string $datetime): Collection
    {
        return self::query()
        ->limit(6)
        ->get();
    }
}
