<?php
//looping dengan for
// pengulangan angka dari s.d 10
for($x=1;  $x<=10; $x++){ // atau $x=1
    echo "<br> $x";
}


//pengulang angka dari 10 s.d 1
for($y=10;  $y>=1; $y=$y-1){ // atau $x=1
    echo "<br> $y";
}
?>

<form>
<?php
for($masa=1;  $masa<=100; $masa=$masa+1){ // atau $x=1
    echo "<input type='radio' name='jml_masa' value='$masa'>". $masa;
}

?>
</form>