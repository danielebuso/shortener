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
    protected $table = 'short_links';

    protected $fillable = [
        'id',
        'url',
        'not_before',
        'expire_at',
        'enabled',
    ];

    protected $casts = [
        'not_before' => 'datetime',
        'expire_at' => 'datetime',
    ];

    public function getShortUrlAttribute() {
        return route('short_link', [$this->id]);
    }
}
