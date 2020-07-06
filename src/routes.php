<?php

/*
 * Laravel Shortener routes
 */
return [

    Route::get('l/{short_link}', 'danielebuso\\shortener\\Controllers\\ShortLinkController@resolve')->middleware('bindings')->name('short_link')

];
