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

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('about', function () {

    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Abdul";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    // Nama, Umur, Alamat, Sekolah, Kelas, Hobi
    return view('biodata');
});

// route parameter
Route::get('post/{id}', function ($a) {
    return view('post', ['posting' => $a]);
});

// buatlah route bernama bio dengan parameter yang isianya
// nama, umur, alamat
Route::get('bio/{nama}/{umur}/{alamat}', function ($a, $b, $c) {
    // dibuat view dan datanya
    return "Biodata Saya<br>"
        . "Nama   : $a<br>"
        . "Umur   : $b<br>"
        . "Alamat : $c<br>";
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    // dd($posts);
    return view('blog', compact('posts'));
});

Route::get('person', function () {
    $persons = [
        ['id' => 1, 'nama' => 'Kinanti', 'username' => 'kinantii', 'email' => 'kinantii@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Jepang',
        ],
        ],
        ['id' => 2, 'nama' => 'Kinanti', 'username' => 'kinantii', 'email' => 'kinantii@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Jepang',
        ],
        ],
    ];
    // dd($persons);
    return view('person', compact('persons'));
});

// Route Optional Parameter
Route::get('page/{page?}', function ($hal = 1) {
    return "Halaman <b>$hal</b>";
});

// buatlah route "pesan" dengan optional parameter,
// makanan, minuman, cemilan

// param tidak di isi -> anda tidak memesan silahkan pulang
// makanan -> anda pesan makan : .....
// makanan & minuman -> anda pesan makan : ... minum: ...
// makanan & minuman & cemilan ->
// anda pesan makan : ... minum: ... cemilan : ....
Route::get('pesan/{makan?}/{minum?}/{cemilan?}',
    function ($a = null, $b = null, $c = null) {
        if ($a == null && $b == null && $c == null) {
            $pesan = "Anda Tidak Pesan, Silahkan Pulang";
        }
        if ($a != null) {
            $pesan = "Anda Memesan"
                . "<br>Makan : <b>$a</b>";
        }
        if ($a != null && $b != null) {
            $pesan = "Anda Memesan"
                . "<br>Makan : <b>$a</b>"
                . "<br>Minum : <b>$b</b>";
        }
        if ($a != null && $b != null && $c != null) {
            $pesan = "Anda Memesan"
                . "<br>Makan   : <b>$a</b>"
                . "<br>Minum   : <b>$b</b>"
                . "<br>Cemilan : <b>$c</b>";
        }

        return $pesan;
    });

// Route Bagian DB Seeder
// Model Post
Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('/testmodel/{id}', function ($id) {
    $query = App\Models\Post::findOrFail($id);
    return $query;
});

Route::get('/testmodel3', function () {
    $query = App\Models\Post::where('title', 'like', '%i%')->get();
    return $query;
});

Route::get('/testmodel4', function () {
    $query = App\Models\Post::find(1);
    $query->title = "Ciri Keluarga Sakinah";
    $query->save();
    return $query;
});

Route::get('/testmodel5', function () {
    $query = App\Models\Post::find(2)->delete();
    return $query;
});

Route::get('/testmodel6', function () {
    $query = new App\Models\Post();
    $query->title = "7 amalan pembuka jodoh";
    $query->content = "lorem ipsum";
    $query->save();
    return $query;
});

// Model Latihan
Route::get('/test-post', function () {
    $query = App\Models\Post::all();
    return view('test-post', compact('query'));
});
