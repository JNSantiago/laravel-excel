<?php

Route::get('bairros', 'ExcelController@index')->name('import.index');
Route::get('import', 'ExcelController@create')->name('import.create');
Route::post('import', 'ExcelController@store')->name('import.store');