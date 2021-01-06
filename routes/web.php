<?php

use Illuminate\Support\Facades\Route;

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

// HOMEPAGE

Route::get('/', function () {
    // .blade.php

    $data = config('site-data'); // <-- abbiamo portato i dati in SITE-DATA custom nella cartella CONFIG e richiamato con una funzione i dati che prima avevamo qui, facendo ordine

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $card){

        $card['id'] = $key;

        if ($card['tipo'] == 'lunga') {
            $lunghe[] = $card;
        }
        elseif ($card['tipo'] == 'corta') {
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima') {
            $cortissime[] = $card;

        }
    }

    // dd($lunghe, $corte, $cortissime );

    // dd($data);  // è tipo un VAR DUMP che ci permette di controllare il nostro contenuto senza stamparlo ma visulizzandolo in Json

    // dump($data);

    // return view('home', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime ] ) ;
                        // è la stessa cosa sintetizzate con il metodo COMPACT

    return view('home', compact('lunghe', 'corte', 'cortissime') );

}) -> name ('home') ;


// NEWS PAGE

Route::get('/news', function () {
    return view('news');
}) -> name ('news') ;

// PRODUCT DETAIL

Route::get('/product/{id}', function ($id) { // dietro le quinte --> $id = $_GET['id'];
    // dump($id);  // id parametro di scelta

    $data = config('site-data');

// estrpoliamo ora uno dei prodotti
    $product = $data[$id];

    $length = count($data) - 1 ; // calcoliamo lalunghezza dell'Array DATA

    return view('product', ['product' => $product , 'length' => $length, 'id' => $id ]);  // <-- stessa cosa compact('product', 'length', 'id');
}) -> name ('product');
