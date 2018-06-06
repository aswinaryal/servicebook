<?php
Route::get('/','IndexPageController@index');
Auth::routes();

Route::get('verify/{email}/{verifytoken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('confirmation','Auth\RegisterController@confirmation')->name('confirmation');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('serviceinlist','ServiceController@index')->name('serviceinlist');
Route::get('serviceinlisting'.'ServiceController@service_inlist')->name('serviceinlisting');
Route::group(['prefix'=>'admin'], function(){
   Route::get('/','AdminController@index')->name('admin');
   Route::get('/profile','AdminController@profile')->name('admin.profile');
   Route::get('/users','AdminController@users')->name('admin.users');
    Route::get('/invalid','AdminController@invalidusers')->name('admin.invalid');
});

Route::get('profile','UserProfileController@index')->name('user.profile');

Route::get('/getRequest', function (){
   if(Request::ajax()){
       return 'getRequest has loaded';
   }
});

Route::post('register','SbServiceProviderController@register')->name('service.register');
Route::post('login','SbServiceProviderController@loginview')->name('serviceprovider.login');
Route::get('verify/{email}/{verifytoken}','SbServiceProviderController@sendEmailDone')->name('sp.sendEmailDone');