<?php
/*   $data = file_get_contents("php://input");
        $dataJsonDecode     = json_decode($data);
        $message            = $dataJsonDecode->nama;
        echo $message;     //'Hello world' */
		
	//$postdata = json_decode(file_get_contents('php://input'),true);
//if (isset($postdata) && !empty($postdata)) {
 // $request = json_decode($postdata);

   // $newName = $postdata->nama;
   //$tes= $newName[0]->day1;
   // $tes=count($newName);
	//echo $newName;
   // $newEmail = $request->newEmail;
   // $newAddress = $request->newAddress;
 
   // if ($newName == '' || $newEmail == '' || $newAddress == '')
     //  return;
 
   // $sql = "INSERT INTO `tb_user`(`user_name`, `user_email`, `user_address`) VALUES ('$newName','$newEmail','$newAddress')";
 
  //  mysqli_query($connect, $sql);
 // $output = array(
		//'error'		=>	$validation_error,
	//	'namabalik'	=>	'aaa'
//	);
//}
//echo json_encode($output);
//exit;
$form_data = json_decode(file_get_contents("php://input"));
      $varnama=  $form_data->nama;
      $vargen=  $form_data->gend;
      $varalamat=$form_data->alamat2;
      $kota11=$form_data->kotas;
       $provinsisi2=$form_data->provinsis;
        $telpon=$form_data->notelpu;
        $varnamaortusis=$form_data->namaortusis;
        $noortu=$form_data->notelportu;
         $sklhasal1=$form_data->sklhasal;
         $jenjanpendi=$form_data->jenjangpend;
         $klas=$form_data->kelaspend;
      $output = array(
    
    'message' =>  $varnama.$vargen.$varalamat.$kota11.$provinsisi2.$telpon.$varnamaortusis.$noortu.$sklhasal1.$jenjanpendi.$klas
  );
      echo json_encode($output);
?>