<?php

/*
 * Laravel Shortener routes
 */
return [

    Route::get('l/{short_link}', 'danielebuso\\shortener\\Controllers\\ShortLinkController@resolve')->name('short_link')

];
