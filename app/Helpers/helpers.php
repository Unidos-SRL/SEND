<?php

use Carbon\Carbon;

if (!function_exists('check_user_db')) {
    function get_user_db($id_comune, $email, $name)
    {
        $user = \App\Models\User::all()->where("id_comune", "=", $id_comune)->where("email", "=", $email)->first();
        if ($user){
            return $user->id;
        }else{
            // inserisci
            $user = \App\Models\User::create([
                "name"=>$name,
                "email"=>$email,
                "id_comune"=>$id_comune,
            ]);
            return $user->id;
        }
    }
}


if (!function_exists('check_login')) {
    function check_login($fiscal_code)
    {
        if (session()->get("user_data")){
            $data_user = session()->get("user_data");
            $user = json_decode(decrypt($data_user), true);
            if ($user['cf_portale'] == $fiscal_code){
                return $user;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}




if (!function_exists('check_comune')) {
    function open_view($fiscal_code, $view, $whitout_login = false)
    {
        $comune = \App\Models\Comune::all()->where("fiscal_code", "=", $fiscal_code)->first();
        if ($comune){
            if ($comune->active ==1 && $comune->richiesta_occupazione_suolo == 1){
                if ($whitout_login){
                    return view($view, ["comune"=>$comune, "user"=>false]);
                }
                $user_session = check_login($fiscal_code);
                if (!$user_session){
                    $view = "login";
                }
                return view($view, ["comune"=>$comune, "user"=>$user_session]);
            }else{
                abort(403);
            }
        }else{
            abort(404);
        }
    }
}

if (!function_exists('italian_data')) {
    function italian_data($date)
    {
        if (strtotime($date) === false) {
            return "Data non valida";
        }

        // Divide la data nei suoi componenti
        $dateParts = explode('-', $date);

        // Ricompone la data nel formato DD-MM-YYYY
        $formattedDate = $dateParts[2] . '-' . $dateParts[1] . '-' . $dateParts[0];

        return $formattedDate;
    }
}

function generateTemporaryToken($expirySeconds = 5)
{
    // Crea i dati del token
    $data = [
        'token' => Str::random(40), // Un token univoco
        'expires_at' => Carbon::now()->addSeconds($expirySeconds)->timestamp, // Timestamp di scadenza
    ];

    // Cifra i dati con le credenziali di Laravel
    return Crypt::encrypt($data);
}

function validateTemporaryToken($encryptedToken)
{
    try {
        // Decifra il token
        $data = Crypt::decrypt($encryptedToken);

        // Controlla se il token è scaduto
        if (isset($data['expires_at']) && $data['expires_at'] >= Carbon::now()->timestamp) {
            return true; // Token valido
        }

        return false; // Token scaduto
    } catch (\Exception $e) {
        // In caso di errore nella decifratura, considera il token non valido
        return false;
    }
}
