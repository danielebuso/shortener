<?php

/*
 * Laravel Shortener routes
 */
return [

    Route::get('l/{short_link}', 'ShortLinkController@resolve')->name('short_link')

];
