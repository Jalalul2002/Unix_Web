<?php

$distrik_from_terpilih = $_POST["distrik_from"];
$distrik_to_terpilih = $_POST["distrik_to"];
$berat_total = $_POST["berat"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=$distrik_from_terpilih&destination=$distrik_to_terpilih&weight=$berat_total&courier=jne",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
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
    $datacost = $array_response["rajaongkir"]["results"]["0"]["costs"];

    // foreach ($datacost as $key => $tiapcost) {
    //   echo "<li class='list-group-item'>";
    //   echo "Description : ".$tiapcost["description"]." ";
    //   echo "Value : ".number_format($tiapcost["cost"]["0"]["value"])." ";
    //   echo "ETD : ".$tiapcost["cost"]["0"]["etd"];
    //   echo "</li>";
    // }

    echo "<h6 id='shipping_detail'>Shipping Detail :</h6>";
    foreach ($datacost as $key => $tiapcost) {
      echo "<a class='list-group-item list-group-item-action'>";
      echo "<div class='d-flex w-100 justify-content-between'>";
      echo "<h6 class='mb-1'>";
      echo "Unix Express Courier";
      echo "</h6>";
      echo "<small>";
      echo $tiapcost["cost"]["0"]["etd"]." Days";
      echo "</small>";
      echo "</div>";
      echo "<p class='mb-1'>";
      echo "Rp. ".number_format($tiapcost["cost"]["0"]["value"]);
      echo "</p>";
      echo "<small>";
      echo "*Choose The Relevan with Estimation";
      echo "</small>";
      echo "</a>";
    }
}

?>