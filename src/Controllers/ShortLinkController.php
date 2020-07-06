<?php

namespace danielebuso\shortener\Controllers;

use App\Http\Controllers\Controller;
use Request;
use danielebuso\shortener\Models\ShortLink;

class ShortLinkController extends Controller
{
    public function resolve(ShortLink $short_link)
    {
        // Check if link is expired
        if ($short_link->expire_at->isPast()) abort(401);

        // Check if link is not yet available
        if ($short_link->not_before->isFuture()) abort(401);

        // Check if link is enabled
        if (!$short_link->enabled) abort(401);

        // Resolve
        return response()->redirectTo($short_link->url);
    }
}
