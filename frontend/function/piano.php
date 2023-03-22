<?php
function getArchivePiano(){
    $url = 'http://localhost/medicina/backend/api/Piano/getArchivePiano.php';

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);
    $off_data = $decode_data;
    if (!empty($off_data)) {
        $off_arr = array();

        foreach ($off_data as $off) {
            $off_record = array(
                'codice' => $off['codice'],
                'nome' => $off['nome'],
                'cfu' => $off['cfu'],
                'settore' => $off['settore'],
                'n_settore' => $off['n_settore'],
                'taf_ambito' => $off['taf_ambito'],
                'ore_lezione' => $off['ore_lezione'],
                'ore_laboratorio' => $off['ore_laboratorio'],
                'ore_tirocinio' => $off['ore_tirocinio'],
                'tipo_insegnamento' => $off['tipo_insegnamento'],
                'semestre' => $off['semestre'],
                'descrizione_semestre' => $off['descrizione_semestre'],
                'anno1' => $off['anno1'],
                'anno2' => $off['anno2'],
            );
            array_push($off_arr, $off_record);
        }

        return $off_arr;
    }
    else{
        return -1; 
    }
}
function addPiano($data)
{
    $url = 'http://localhost/medicina/backend/api/Piano/addPiano.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;
}

function deletePiano($data)
{
    $url = 'http://localhost/medicina/backend/api/Piano/deletePiano.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;
}


?>