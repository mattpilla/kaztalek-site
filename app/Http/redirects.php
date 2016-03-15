<?php

Route::get('/2pause', function() {
    return redirect('https://www.youtube.com/watch?v=KaDflIPG3f4');
});

Route::get('/oot3p', function() {
    return redirect('https://www.youtube.com/watch?v=01J-0suWISk');
});

Route::get('/ss-dolphin', function() {
    return redirect('/downloads/venick/Skyward%20Sword%20Dolphin.7z');
});

Route::get('/kirby-where-ride', function() {
    return redirect('/downloads/keeta/kirby%20hide%20and%20seek.7z');
});

Route::get('/ingsadventure', function() {
	return redirect('/downloads/ringrush/IngsAdventure1.1.zip');
});

Route::get('/ingsadventure2', function() {
	return redirect('/downloads/ringrush/Ing\'s%20Adventure%202%3b%20Battle.7z');
});