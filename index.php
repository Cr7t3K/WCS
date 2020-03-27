<?php
$users1 = [
     ['prenom' => 'Mathilde', 'genre' => 'F'],
];

$users2 = [
    ['prenom' => 'Mathilde', 'genre' => 'F'],
    ['prenom' => 'Pierre', 'genre' => 'F'],
];

$users3 = [
    ['prenom' => 'Mathilde', 'genre' => 'F'],
    ['prenom' => 'Pierre', 'genre' => 'F'],
    ['prenom' => 'Amandine', 'genre' => 'F'],
];



/* array_rand ( array $array [, int $num = 1 ] ) : mixed */


function like(array $users) : string {
    $countUsers = count($users);
    $randUsers = array_rand ($users);

    if (empty($users)){
        return "Soyez le premier à aimer cette publication";
    }
    elseif ($countUsers == 1) {
        if($users[0]['genre'] == 'M'){
            $sex = "lui";
        } else {
            $sex = "elle";
        }
        return $users[0]['prenom'] ." aime cette publication <br>Faites comme $sex !";
    }
    elseif ($countUsers == 2 ) {
        if($users[0]['genre'] == 'F' && $users[1]['genre'] == 'F'){
            $sex = "elles";
        }else{
            $sex = "eux";
        }
        return $users[0]['prenom'] ." et ". $users[1]['prenom'] ." aiment cette publication" . "<br>" . "Faites comme $sex";
    }
    else {
        
            $sex ="elles";
            for ($i = 0; $i <= $countUsers - 1; $i++) {
                if($users[$i]['genre'] == "M"){
                    $sex = "eux";
                };
            };
            
        

        };
        return $users[$randUsers]['prenom'] . " et " . intval($countUsers -1) . " personnes ont aimé cette publication. <br> Faites comme $sex";
    };
    


// echo like($users1);


// echo like($users2);


echo like($users3);


/*"Soyez le premier à aimer cette publication",
"Simon aime cette publication",
"Simon et Arthur aiment cette publication",
"Simon et X autres personnes ont aimé cette publication.",*/




/*

Guillaume Clavurier
Gael
Lucas
Benjamin
Raphael Morales

*/
/*$sex = "elles";
for ($i = 0; $i <= $countUsers; $i++) {
    if($users[$i]['genre'] == "M"){
        $sex = "eux";
    }
} */

