<?php

namespace danielebuso\shortener\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Model of the table tasks.
 *
 * @property string id
 * @property string url
 * @property DateTime|Carbon|null not_before
 * @property DateTime|Carbon|null expire_at
 * @property boolean enabled
 * @property DateTime|Carbon|null created_at
 * @property DateTime|Carbon|null updated_at
 */
class ShortLink extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The table name that has been migrated.
     *
     * @var array
     */
    protected $table = 'short_links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'url',
        'not_before',
        'expire_at',
        'enabled',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'not_before' => 'datetime',
        'expire_at' => 'datetime',
    ];

    /**
     * Generate short link url using route
     *
     * @return string
     */
    public function getShortUrlAttribute() {
        return route('short_link', [$this->id]);
    }
}
