<?php

//exo1
// $name = 'prenom';
// echo $name;

//exo 2
// $name = 'name';
// $lastname = 'lastname';
// $age = 21;

// echo "$name , $lastname , $age";

//exo3
// $km = 1;
// $km = $km*2;
// echo "$km ";
// $km = 125;
// echo "$km";

//exo4
// $data = array(1, 1.12342, true, 'foo');

// foreach ($data as $value) {
//     echo gettype($value), "\n";
// }

//exo5
// $number = 0;
// echo ("$number<br>");
// if (empty($number)) {
//     echo "Variable 'number' is empty.<br>";
//   }

//exo6
// $name = 'name';
// echo ("Bonjour ".$name.", comment vas tu ?");

// exo7
// $name  = 'name';
// $firstname = 'firsname';
// $age = 23;
// echo ("bonjour $name $firstname tu a $age ans "); 

//exo 8
// $first = 3+4;
// $second = 5*20;
// $third = 45/5;
// echo ("$first $second $third " )


//EXO1Part2
// $age = 2;
// if ($age > 18 ) {
//     echo "majeur";
//   }else {
//     echo "mineur";
//   }

//EXO2part2
// $isEasy = true;
// if ($isEasy == true ) {
//       echo "c'est facile";
//       }else {
//       echo "c'est difficile ";
//    }

//exo3part2
// $age = 18;
// $gender = 'femme';
// if ($age >= 18 && $gender === 'homme'){
//     echo ('vous est un homme majeur');
// }
// if ($age < 18 && $gender === 'homme'){
//     echo ('vous est un homme mineur');
// }
// if ($age >= 18 && $gender === 'femme'){
//     echo ('vous est une femme majeur');
// }
// if ($age < 18 && $gender === 'femme'){
//     echo ('vous est une femme mineur');
// } 
// else echo ('');

//exo4part2
// $magn = 6;
// switch ($magn) {
//     case 1:
//         echo "Micro-séisme impossible à ressentir.";
//         break;
//     case 2:
//         echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
//         break;
//     case 3:
//         echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
//         break;
//     case 4:
//         echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
//         break;
//     case 5:
//         echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
//         break;
//     case 6:
//         echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
//         break;  
//     case 7:
//         echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
//         break;
//     case 8:
//         echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
//         break;  
//     case 9:
//         echo "Séisme capable de tout détruire sur une très vaste zone.";
//         break;  
// }

//exo5Part2
// $gender = 'homme';
// if ($gender == 'homme') {
//     echo ("c'est un developpeur");
// }
// if ($gender == 'femme') {
//     echo ("c'est une developpeuse");
// }

//exo6Part2
// $age = 19;
// if ($age >= 18){
//     echo ("vous etes majeur");
// }
// else echo ("vous etes mineur")

//exo7Part2
// $isOk = false;
// if ($isOk === true){
//     echo ("c'est ok");
// }
// else echo ("c'est pas ok")

//EXO1part3
// $i=0;
// while ($i < 10) {
//     $i ++ ;
//     echo "$i<br>" ;
// }

//EXO2part3
// $i = 1;
// $a = 23;
// while ($i < 20) {
//     $a = $i*$a ;
//     echo "$a<br>" ;
// }

//EXO3part3
// $i = 12;
// $a = 3;
// while ($i > 10) {
//     $a = $i*$a ;
//     echo "$a<br>" ;
//     $i--;
// }

//exo4part3
// $i = 1;
// while ($i < 10) {
//     $a = $i/2 ;
//     $i = $i + $a;
//     echo "$i<br>" ;
// }

//exo5part3
// $i = 1;
// while ($i <= 15) {
//     echo ("On y arrive presque <br>");
//     $i ++;
// }

//exo6part3
// $i = 20;
// while ($i > 0) {
//     echo ("C'est presque bon <br>");
//     $i --;
// };

//exo7part3
// $i = 1;
// while ($i <= 100) {
//     echo ("On tient le bon bout <br>");
//     $i= $i + 15;
// };

//exo7part3
// $i = 200;
// while ($i > 0) {
//     echo ("Enfin !!!!<br>");
//     $i = $i - 12;
// }

//EXO1PART4
// function true (){
//     $a = true;
//     var_dump($a);
// }
// true();

//EXO2PART4
// function chara ($chara){
//     return $chara;
// }
//  echo chara("kdljskj");

//exo3part4
// function conc ($chara, $chara2){
//     return "$chara$chara2";
// }
// echo conc("ui", "ij");

//exo4part4
// function test ($nombre1, $nombre2){
//     if ($nombre1 > $nombre2) {
//         return "Le premier nombre est plus grand";
//     }
//     if ($nombre1 < $nombre2) {
//         return "Le premier nombre est plus petit";
//     }
//     if ($nombre1 == $nombre2) {
//         return "Les deux nombres sont identiques";
//     }
// }
// echo test(2, 4);

//exo5part4
// function chainenb($nombre, $chaine){
//     return "$nombre$chaine";
// }
// echo chainenb(12,"dlskdlskd")

//exo6part4
// function id($nom, $prenom, $age){
//     return "Bonjour $nom $prenom tu as $age ans";
// }
// echo id("nom", "prenom", 13);

//exo7part4
// function majeur($genre, $age){
// if ($age >= 18 && $genre === 'homme'){
//     return ('vous est un homme majeur');
// }
// if ($age < 18 && $genre === 'homme'){
//     return ('vous est un homme mineur');
// }
// if ($age >= 18 && $genre === 'femme'){
//     return ('vous est une femme majeur');
// }
// if ($age < 18 && $genre === 'femme'){
//     return ('vous est une femme mineur');
// } 
// else return ('');
// }

// echo majeur("femme",23);

//exo8part4
// function nb($nb1=1, $nb2=2, $nb3=3){
//     return $nb1+$nb2+$nb3;
// }
// echo nb(3,4,5);

//exo1part5
// $months = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");

//exo2part5
// $months = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
// echo $months['2'];

//exo3part5
// $months = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
// echo $months['5'];

//exo5part5
// $dep = ['02'=>'Aisne', '59' => 'Nord', '60' => 'Oise', '62'=>'Pas-de-Calais', '80'=>'Somme'];

//exo6part5
// $dep = ['02'=>'Aisne', '59' => 'Nord', '60' => 'Oise', '62'=>'Pas-de-Calais', '80'=>'Somme'];
// echo $dep['59'];

//exo7part5
// $dep = ['02'=>'Aisne', '59' => 'Nord', '60' => 'Oise', '62'=>'Pas-de-Calais', '80'=>'Somme', '51'=>'Reims'];

//exo8part5
// $months = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
// foreach ($months as $month) {
//     echo "$month<br>";
// }

// exo9part5
$deps = ['02'=>'Aisne', '59' => 'Nord', '60' => 'Oise', '62'=>'Pas-de-Calais', '80'=>'Somme', '51'=>'Reims'];
foreach ($deps as $dep =>$depVal){
    echo "$dep  $depVal <br>";
}







?>