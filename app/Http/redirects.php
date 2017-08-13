<?php

Route::get('/2pause', function() {
    return redirect('https://www.youtube.com/watch?v=KaDflIPG3f4');
});

Route::get('/oddities', function() {
    return redirect('https://www.youtube.com/playlist?list=PLhidzeZ496C-x51lQ9Uf-F0UKLEJIyIQN');
});

Route::get('/oot3p', function() {
    return redirect('https://www.youtube.com/watch?v=01J-0suWISk');
});

Route::get('/rbo', function() {
    return redirect('https://www.youtube.com/watch?v=KtDpKjv93DQ');
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

Route::get('/city-trial', function() {
    return redirect('/citytrial');
});

Route::get('/dk64abc', function() {
    return redirect('https://docs.google.com/spreadsheets/d/1Q3-CPZ77oZQnznpV9VRAeOxAHTiTTF7_-lJKB0-w5ts/edit#gid=1184089361');
});
