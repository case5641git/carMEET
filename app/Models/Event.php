<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'name',
        'content',
        'max_people',
        'open_flag',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'image_path'
    ];

    public function scopePeriod(Builder $query, $datetime)
    {
        return $query->where('end_date', '>', $datetime);
    }

    /** 
     * Topイベント情報の取得 
     * @param string $datetime
     * @return Collection
    */
    public static function getEventForTop(string $datetime): Collection
    {
        return self::query()
        ->period($datetime)
        ->orderByDesc('created_at')
        ->limit(6)
        ->get();
    }


    /**
     * イベント一覧情報の取得
     * @param string $datetime
     * @return LengthAwarePaginator
     */
    public static function getEventForList(string $datetime): LengthAwarePaginator
    {
        return self::query()
        ->period($datetime)
        ->orderByDesc('created_at')
        ->paginate(12);
    }

}
