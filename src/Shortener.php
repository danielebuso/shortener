<?php

namespace danielebuso\shortener;

use danielebuso\shortener\Models\ShortLink;
use Illuminate\Support\Str;

class Shortener
{

    /**
     *  Parse a rules array.
     *
     * @param string $url
     * @param array $opt = [
     *  'length' => 8, // Link length
     *  'expire_at' => null, // Link expiry date
     *  'not_before' => null, // Link validity start date
     * ]
     * @return array
     */
    public static function shorten(string $url, array $opt = [])
    {
        $link_length = $opt['length'] ?? config('shortener.link_length') ?? 8;

        return ShortLink::create([
            'id' => Str::random($link_length),
            'url' => $url,
            'expire_at' => $opt['expire_at'] ?? null,
            'not_before' => $opt['not_before'] ?? null,
        ]);
    }

}
