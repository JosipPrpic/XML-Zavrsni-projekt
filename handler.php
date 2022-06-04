
<?php
if(file_exists('file.json'))
{
     $final_data=fileWriteAppend();
     if(file_put_contents('file.json', $final_data))
     {
          $message = "<label class='text-success'>Data added Success fully</p>";
     }
}
else
{
     $final_data=fileCreateWrite();
     if(file_put_contents('file.json', $final_data))
     {
          $message = "<label class='text-success'>File createed and  data added Success fully</p>";
     }

}
function fileWriteAppend(){
		$current_data = file_get_contents('file.json');
		$array_data = json_decode($current_data, true);
		$extra = array(
			 'Ime'               =>     $_POST['name'],
			 'Prezime'          =>     $_POST["surname"],
			 'E-mail'          =>     $_POST["email"],
			 'Poruka'     =>     $_POST["msg"]
			 

		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		return $final_data;
}
function fileCreateWrite(){
		$file=fopen("file.json","w");
		$array_data=array();
		$extra = array(
            'Ime'               =>     $_POST['name'],
            'Prezime'          =>     $_POST["surname"],
            'E-mail'          =>     $_POST["email"],
            'Poruka'     =>     $_POST["msg"]

		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		fclose($file);
		return $final_data;
        header('Location: about.html');
}
?>