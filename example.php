<?php
//controller
function test($p1,$p2){
    Table::create(
        [
        'field1' => $p1,
        'field1' => $p2,
    ]
    );

//web.php
Route::get('/name/{p1}/{p2}','Controller@test')->name('bus.test');

//view
let url = "{{ route('bus.test', ['p1'=>1,'p2'=>2]) }}";
{{ route('bus.test', ['p1'=>1,'p2'=>2]) }}
?>