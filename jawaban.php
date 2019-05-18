<?php
//1
$data = ['name' 	  => 'danang',
		 'address'    => 'klaten jawa tengah',
		 'hobbies'    => ['tidur dan makan'],
		 'is_married' => false,
		 'school'	  => [['sekolah'=>'SMK','kuliah'=> null]],
		 'skills'	  => (object)['nyuci','masak'],
		];
function mengubahkejson($data){
	return json_encode($data);
}

	echo mengubahkejson($data);

//2
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function tampilkan($data){
    for($i=1;$i<=$data;$i++){
        echo generateRandomString(32);
        echo PHP_EOL;
    }
}
tampilkan(2);

//3
$data = "bootcamp";
$i="o";
cetak($data, $i);

function cetak($data, $i)
{
	echo substr_count($data,$i);
}

//4

function gambar($i){
	
for ($row=1; $row< $i+1; $row++)
{
  for ($col=1; $col<= $i; $col++)
	{
		if($col == ($i +1  - $row))
       
       {
           echo '*';
           
       }
       else if($row == $col)
       {
           echo '*';
       }
       else
       {
           echo "=";
       }
		
	}        
  echo "<br>";
}

}

gambar(9);

//5

$data = [1,2,6,5,9,4];
$data2 = ['h','g','a','b','d','f'];
tampil($data2);

function tampil($data2)
{
	$a = array_shift($data2);
	echo max($data2);
    echo min($data2);
}


