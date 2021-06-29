<?php
  /*  $filePath = "sam.txt";
    $lines = count(file($filePath));
    echo $lines;*/
   echo  '<br>';
  $file = fopen("sam.txt", "r");  
  $count=0;
  $cr=0;
  $c=0;
  $c1=0;
  $c2=0;
  $c3=0;

   while (($line = fgets($file)) !== false) {  
    //Splits each line into words  
    $words = explode(" ", $line); 
   
    foreach ($words as $value) {   
    $cr=$cr + strlen($value);
    echo  '<br>';
    $value1=$value;
    for ($i=0;$i<strlen($value1);$i++){

      
        echo  '<br>';
        if($value1[$i] == 'a'||$value1[$i] =='e'||$value1[$i] =='i'||$value1[$i] =='o'||$value1[$i] =='u'){
        $c1++;       
    }
    else if($value1[$i] == '0'||$value1[$i] =='1'||$value1[$i] =='2'||$value1[$i] =='3'||$value1[$i] =='4'||$value1[$i] == '5'||$value1[$i] =='6'||$value1[$i] =='7'||$value1[$i] =='8'||$value1[$i] =='9')
    {
        $c2++;
    }
    else if($value1[$i] == '&'||$value1[$i] =='#'||$value1[$i] =='%')
    {
        $c3++;
    }

}
}
    $c++;
    //Counts each word  
    $count = $count + count($words);     
}  
echo "Number of lines: " .$c;
echo  '<br>';
$cr=$cr-(($c-1)*2);
echo "Number of charector " .$cr;
echo  '<br>';
echo $c1;
echo  '<br>';
echo $c2;
echo  '<br>';
echo $c3;
echo  '<br>';
print("Number of words : " . $count);  
fclose($file);
?>