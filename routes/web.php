<?php

use App\Http\Controllers\AdminAuthController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Redirect;
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

Route::get("/{cf_ente}/privacy-policy", function ($cf){
    return  open_view($cf, "privacy-policy", true);
});


Route::prefix('{cf_ente}/')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm']);
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminAuthController::class, 'showDashboard']);
        Route::get('/logout', [AdminAuthController::class, 'logout']);
    });
});



//Route::get('/{cf_ente}/profile', function ($cf) {
//    return open_view($cf, "profile");
//});

//Route::get('/auth/spid', function () {
//    if (isset($_GET['idpAuth'])){
//        $token = $_GET['idpAuth'];
//        $key = 'aa557f572d1c0dad4c9eba3aa8e6ad39933f88c90a897147a469ca902d495679';
//        $decoded = JWT::decode($token, new Key($key, 'HS256'));
//        $data = json_decode($decoded->data, false);
//        $expired = $decoded->exp;
//        $current_time = time();
//        \Illuminate\Support\Facades\Log::log("error", $expired);
//        \Illuminate\Support\Facades\Log::log("error", $current_time);
//        $codice_comune = $data->placeOfBirth[0];
//        $comune = \App\Models\Comuni::where("codice", "LIKE", "%$codice_comune%")->first();
//        $comune_client = \App\Models\Comune::where("fiscal_code", "=", $_GET['cf_ente'])->first();
//        if (($current_time < $expired)) {
//            // check if inser or retreive id_user on db
//            $id_user = get_user_db($comune_client->id, $data->email[0],$data->name[0]." ".$data->familyName[0]);
//            $user = array(
//                "cf_portale"=>$_GET['cf_ente'],
//                "codice_identificativo"=>$data->spidCode[0],
//                "nome"=>$data->name[0],
//                "cognome"=>$data->familyName[0],
//                "luogo_di_nascita"=>$comune->comune,
//                "data_di_nascita"=>$data->dateOfBirth[0],
//                "sesso"=>$data->gender[0],
//                "codice_fiscale"=>$decoded->cf,
//                "partita_iva"=>"",
//                "domicilio_fisico"=>$data->address[0],
//                "domicilio_digitale"=>"",
//                "provincia_di_nascita"=>$data->countyOfBirth[0],
//                "numero_di_telefono_mobile"=>$data->mobilePhone[0],
//                "indirizzo_di_posta_elettronica"=>$data->email[0],
//                "id_user"=>$id_user,
//            );
//
//
//            session()->put("user_data", encrypt(json_encode($user)));
//            return Redirect::away('/'.$_GET['cf_ente']);
//        } else {
//            return Redirect::away('/'.$_GET['cf_ente'])->withErrors(['error' => 'Richiesta scaduta! Si prega di riprovare']);
//        }
//    }else{
//       return  Redirect::away('/'.$_GET['cf_ente'])->withErrors(['error' => 'Richiesta non valida! Si prega di riprovare']);;
//    }
//});


//Route::get("/{cf}/logout", function ($cf){
//    session()->flush();;
//    return Redirect::away('/'.$cf);
//});

//Route::get('/js/custom.js', function () {
//    // Autorizzazione: aggiungi logica per limitare l'accesso
//    if (!validateTemporaryToken($_GET["v"])) {
//        abort(403); // Accesso negato
//    }
//
//    // Percorso al file
//    $path = resource_path('js/custom.js');
//
//    // Restituisci il file
//    return Response::file($path, [
//        'Content-Type' => 'application/javascript',
//    ]);
//});
