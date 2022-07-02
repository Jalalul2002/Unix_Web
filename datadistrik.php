<?php 

$id_prov_terpilih = $_POST["id_provinsi"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$id_prov_terpilih",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: cfc5797d8973f2fdc5ba890170ac6696"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} 
else {
  	$array_response = json_decode($response,true);
    $datadistrik = $array_response["rajaongkir"]["results"];

    echo "<option value=''>--Pilih Distrik--</option>";

    foreach ($datadistrik as $key => $tiapdistrik) {
      echo "<option value='' 
      id_distrik='".$tiapdistrik["city_id"]."'
      nama_provinsi='".$tiapdistrik["province"]."'
      nama_distrik='".$tiapdistrik["city_name"]."'
      tipe_distrik='".$tiapdistrik["type"]."'
      kodepos='".$tiapdistrik["postal_code"]."'
      >";
      echo $tiapdistrik["type"]." ";
      echo $tiapdistrik["city_name"];
      echo "</option>";
    }
}


?>