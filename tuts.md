### how to generate key in laravel app

~~~bash
php artisan key:generate
~~~

### Getting all latest post in model

~~~php
  $posts = Post::orderBy('created_at', 'desc')->get();
~~~


### Getting all user post from model

~~~php
$user = User::find(1);
$posts = $user->posts;
~~~

### route wild card

~~~php
//route
Route::get('/hello/{number}', 'PageController@different');

//controller
public function different($number)
{
  echo $number;
}
~~~

### how to make auth in laravel

~~~bash
php artisan make:auth
~~~


### authenticate route in laravel 

~~~php
Route::middleware(['auth'])->group(function () {
  Route::get('/create', 'PageController@create');
  Route::post('/create', 'PageController@store');
});
~~~


