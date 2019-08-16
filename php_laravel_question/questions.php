


К public (общедоступным) свойствам и методам, можно получить доступ из любого контекста.

К protected (защищенным) свойствам и методам можно получить доступ либо из содержащего их класса, либо из его подкласса. Никакому внешнему коду доступ к ним не предоставляется.

Вы можете сделать данные класса недоступными для вызывающей программы с помощью ключевого слова private (закрытые). К таким свойствам и методам можно получить доступ только из того класса, в котором они объявлены. Даже подклассы данного класса не имеют доступа к таким данным.



SQL

1............
SQL LEFT JOIN Ключевое слово

Ключевое слово LEFT JOIN возвращает все записи из левой таблицы (table1) и соответствующие записи из правой таблицы (table2). Результат равен NULL с правой стороны, если совпадений нет.


SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;

2...................................................................................

Добавление данных в таблицу

INSERT INTO <table_name> (<col_name1>, <col_name2>, <col_name3>, …)
  VALUES (<value1>, <value2>, <value3>, …); 

3...................................................................................

Обновление данных таблицы

UPDATE <table_name>
  SET <col_name1> = <value1>, <col_name2> = <value2>, ...
  WHERE <condition>; 

3....................................................................................

Удаление всех данных из таблицы

DELETE FROM <table_name>; 




4....................................................................................

Удаление таблицы
DROP TABLE <table_name>; 








...........................................................................


1.1
-----traitIT-----

trait SharePost {
 
  public function share($item)
  {
    return 'share this post';
  }
 
}


class Post {
  use SharePost;
}

$post = new Post;
echo $post->share(''); // 'share this post' 



1.2
------ELOQUENT RELATION SHEEP------

  return $this->hasOne('App\Phone');

  return $this->hasMany('App\Comment');


  $comments = App\Post::find(1)->comments;

.................................................




1.3
------Pivot Table------------------

class Shop extends Model
{
	public function products()
	{
	    return $this->belongsToMany('App\Product', 'products_shops', 
	      'shops_id', 'products_id');
	}
}

insert new product into product_shop


$shop = Shop::find($shop_id);
$shop->products()->attach($product_id);


Shop::find($shop_id)->products()->attach($product_id)
Shop::find($shop_id)->products()->detach($product_id);






.............SIDER................


php artisan make:seeder UsersTableSeeder


1. public function run()
   {
	    factory(App\User::class, 50)->create()->each(function($u) {
	        $u->posts()->save(factory(App\Post::class)->make());
	    });
   }

1.  public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }





..............resource - crud...............



Контроллер ресурсов RESTful
Контроллер RESTful ресурсов устанавливает некоторые маршруты по умолчанию для вас , и даже имена им.

Route::resource('users', 'UsersController');

Дает вам эти названные маршруты:

Verb          Path                        Action  Route Name
GET           /users                      index   users.index
GET           /users/create               create  users.create
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
GET           /users/{user}/edit          edit    users.edit
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy
И вы бы настроить свой контроллер примерно так (действия = методы)



..............Pagination...............







<?php 	

// shop

// product

// many to many
	
	class Shop extends Model
	{
		public function product()
		{
			return $this->belongsToMany('App\Product');
		}
	}

	// controller


	class ShopController extends controller
	{
		public function getAllProduct()
		{
			$products = App\Shop::find(1)->product;
		}
	}

// ...........................................................

// one to many


// User
// Phone


// MOdel

class User extends Model
{
	public function phone()
	{
		return $this->hasMany('App\Phone');
	}
}

// controller

class UserController extends Controller
{
	public function getUserPhoneNumbers()
	{
		$phone_numbers = App\User:find(1)->phone->where('id','=',5)
	}
}



// .........................



// has many reverse

class Phone extends Model
{
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}


class PhoneController extends Controller
{
	public function getUser($phone_id)
	{
		$user = App\phone::find($phone_id)->user;
	}
}






	
?>


-----------Interface----------------






....................
....................
....................
....................
....................









		.....HTML5......

1. Обновление тегов (сокращенная форма)

	<!DOCTYPE html>
	<meta charset=”UTF-8″>
	<script src=”script.js”></script>
	<link rel=”stylesheet” href=”styles.css”>



2. Новые семантические элементы

	section
	header/footer
	aside
	nav
	article
	main
	figure/figurcaption



3. Новые атрибуты формы

	placeholder
	autofocus
	autocomplete
	required
	pattern
	list
	multiple
	novalidate
	formnovalidate
	form
	formaction
	formenctype
	formmethod
	formtarget	

4. Поддержка аудио и видео

	<audio> элемент
	<video> элемент


5 .Рисование используя элемент canvas

	<canvas> элемент , много примеров




		.........CSS3...........


1. Скруглённые рамки
	
	border-radius		

2. Тени блоков и тени текста
	
	text-shadow
	box-shadow	

3. Анимация
	
	transitions
	transforms	