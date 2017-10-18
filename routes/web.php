<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('welcome');
    exit;

    dump(app('elastic'));exit;

//    $data = DB::table('opt_users')->get();
//
//    $client = Elasticsearch\ClientBuilder::create()
//        ->setHosts(['192.168.1.233'])
//        ->build();

//    $params = [
//        'index' => 'my_index',
//        'type' => 'my_type',
//        'id' => 'my_id',
//        'body' => ['testField' => 'abc']
//    ];
//
//    $response = $client->index($params);
//    print_r($response);


//    $params = [
//        'index' => 'my_index',
//        'type' => 'my_type',
//        'id' => 'my_id'
//    ];
//
//    $response = $client->get($params);
//    $source = $client->getSource($params);
//    dump($source);
//    dump($response);

    $params = [
        'index' => 'my_index',
        'type' => 'my_type',
        'body' => [
            'query' => [
                'match' => [
                    'testField' => 'abc'
                ]
            ]
        ]
    ];

    $response = $client->search($params);
    dump($response);


    exit;

    $class = new ReflectionClass(App\Http\Controllers\Auth\LoginController::class);
    $constructor = $class->getConstructor();
    dump($constructor);
    $paras = $constructor->getParameters();
    dump($paras);



    exit;

    return view('welcome');

    $data = request()->validate([
        'my' => [new App\Rules\MyCustomRule()],
        'more_my' => [function ($attribute, $value, $fail) {
            if ($value <= 10) {
                $fail(':attribute needs more cowbell!');
            }
        }]
    ]);

    dump($data);

    exit;



    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    })
        ->reject(function ($name) {
            return empty($name);
        });

    var_dump($collection->toJson());
    exit;


    return view('test');
});

Route::get('test', ['as' => 'test.index', 'uses' => 'TestController@index']);

Route::post('store', ['as' => 'test.store', 'uses' => 'TestController@store']);

