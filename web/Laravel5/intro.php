<?php
Route::get('{n}', function($n) { 
    return response('Je suis la page ' . $n . ' !', 200);
})->where('n', '[1-3]');