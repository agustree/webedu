<?php 
/*    $nilai1 = $_POST['data1'];
$nilai2 = $_POST['data2'];

    function curl($url, $data){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

// Data Parameter yang Dikirim oleh cURL
$data = array("nama_barang"=>"$nilai1","stok"=>"$nilai2 ");
$send = curl("https://sandbox.rachmat.id/curl/post/",json_encode($data));

echo json_encode(array('respon'=>$send),JSON_UNESCAPED_SLASHES);*/
/*$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['superheroAlias'])) {
    $errors['superheroAlias'] = 'Superhero alias is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);

if (trim($_POST['nama']) == '') {
	$error[] = '- nama harus diisi';
}
if (trim($_POST['nama']) == '') {
	$error[] = '- Nama harus diisi';
}
if (trim($_POST['tempat_lahir']) == '') {
	$error[] = '- Tempat Lahir harus diisi';
}
//dan seterusnya

if (isset($error)) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {
	
	jika data mau dimasukkan ke database,
	maka perintah SQL INSERT bisa ditulis di sini
	

	$data = '';
	foreach ($_POST as $k => $v) {
		$data .= "$k : $v<br />";
	}

	echo '<b>Form berhasil disubmit. Berikut ini data anda:</b><br />';
	echo $data;
}
die();*/


 $konek=mysqli_connect("localhost","root","");
 mysqli_select_db($konek,"lbbprivat");

 //data yang diperoleh dari form mahasiswa
$json = json_decode(file_get_contents("php://input"));
$categories = $json->tes;
//echo $categories;



   echo json_encode($categories);

/* $nama=$_POST['nama'];
$gen=$_POST['gen']; 
  $alamat=$_POST['alamat'];
  $kotaasal=$_POST['kotaasl'];
  $provinsi=$_POST['provinsi'];
  $telpon=$_POST['telp'];

  ////////////////////////////////
//  $sklhasal=$_POST['sklhasal'];
  $jenjang=$_POST['jenjang'];
  $klstinggi=$_POST['klstinggi'];
  $klsrendah=$_POST['klsrendah'];
  $prog=$_POST['program'];
 //$jeniskelamin=$_POST['provinsi'];

   $namapeserta2=$_POST[];
    $namapeserta2=$_POST[];

  $namaortu=$_POST[];
   $namaortu1=$_POST[];
    $namaortu2=$_POST[];


  switch ($jenjang) {
     	case 'SMA':
     	    $kelas=$klstinggi;
     	    $program=$prog;
  		# code...
  		break;
  		case 'SMP':
  		 $kelas=$klstinggi;
  		  $program='-';
  		# code...
  		break;
  		case 'SD':
  		 $kelas=$klsrendah;
  		   $program='-';
  		# code...
  		break;
  	
  	default:
  		# code...
  		break;
  }

   $sqldatasiswa=mysqli_query($konek,"INSERT INTO data_siswa(noinduk_siswa, nama_siswa, gen_siswa,alamat_siswa,kotaasl_siswa,provinsi_siswa,telp_siswa) VALUES('null','".$nama."','".$gen."','".$alamat."','".$kotaasal."','".$provinsi."','".$telpon."')") or die(mysqli_error($konek));
			 if ($sqldatasiswa) {
			 	$idsis = mysqli_query($konek,"SELECT MAX(noinduk_siswa) as noId FROM data_siswa LIMIT 1");
				$idsisbru = mysqli_fetch_assoc($idsis);
				$idsiswa=$idsisbru['noId'];
				

			 	$sqldatasklh=mysqli_query($konek,"INSERT INTO sekolah(nama_sekolah,noinduk_siswa,jenjang_sekolah,kelas_sekolah,program_sekolah) VALUES('".$sklhasal."','".$idsiswa."','".$jenjang."','".$kelas."','".$program."')") or die(mysqli_error($konek));
			 	if ($sqldatasklh) {
			 		 echo "<div style='color:green;  text-align: center; margin:20px;'>Data berhasil disimpan!</div>";
			 	}else{
			 		echo "<div style='color:red'>Data gagal disimpan! 1</div>";
			 	}
			 
			 }else{
			  echo "<div style='color:red'>Data gagal disimpan! 2</div>";
			 }*/













///////////////////////////////////bukan yang asli/////////////////////////////////////
 //simpan data kedalam database
/* $sql=mysqli_query($konek,"INSERT INTO mahasiswa(nim, nama, alamat) VALUES('".$nim."','".$nama."','".$alamat."')") or die(mysqli_error($konek));
 if ($sql) {
  echo "<div style='color:green'>Data berhasil disimpan!</div>";
 }else{
  echo "<div style='color:red'>Data gagal disimpan!</div>";
 }*/
?>