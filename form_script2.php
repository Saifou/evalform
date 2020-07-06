<?php


$centre = filter_input(INPUT_POST, 'centre');
$fonction = filter_input(INPUT_POST, 'fonction');
$fournisseur = filter_input(INPUT_POST, 'fournisseur');
$referent = filter_input(INPUT_POST, 'referent');
$Q1 = filter_input(INPUT_POST, 'Q1');
$Q2 = filter_input(INPUT_POST, 'Q2');
$Q3 = filter_input(INPUT_POST, 'Q3');
$Q4 = filter_input(INPUT_POST, 'Q4');
$Q5 = filter_input(INPUT_POST, 'Q5');
$Q6 = filter_input(INPUT_POST, 'Q6');
$Q7 = filter_input(INPUT_POST, 'Q7');
$Q8 = filter_input(INPUT_POST, 'Q8');
$Q9 = filter_input(INPUT_POST, 'Q9');
$Q10 = filter_input(INPUT_POST, 'Q10');
$Q11 = filter_input(INPUT_POST, 'Q11');
$Q12 = filter_input(INPUT_POST, 'Q12');
$Q13 = filter_input(INPUT_POST, 'Q13');
$Q14 = filter_input(INPUT_POST, 'Q14');
$Q15 = filter_input(INPUT_POST, 'Q15');
$Q16 = filter_input(INPUT_POST, 'Q16');
$Q17 = filter_input(INPUT_POST, 'Q17');
$Q18 = filter_input(INPUT_POST, 'Q18');
$Q19 = filter_input(INPUT_POST, 'Q19');
$Q20 = filter_input(INPUT_POST, 'Q20');
$Q21 = filter_input(INPUT_POST, 'Q21');
$Q22 = filter_input(INPUT_POST, 'Q22');
$Q23 = filter_input(INPUT_POST, 'Q23');
$Q24 = filter_input(INPUT_POST, 'Q24');
if (!empty($centre)){
    
$localhost = "sql7.freesqldatabase.com";

    $host = $localhost ;
    $dbusername = "sql7353012";
    $dbpassword = "tX5MWziAvd";
    $dbname = "sql7353012";
}

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect ERROR ('.mysqli_connect_error() .') '
    . mysqli_connect_error());
}

else{
    $sql = "INSERT INTO evaluations (centre, 
                                    fonction, 
                                    fournisseur, 
                                    referent,
                                    Q1, 
                                    Q2,
                                    Q3,
                                    Q4,
                                    Q5,
                                    Q6,
                                    Q7,
                                    Q8,
                                    Q9,
                                    Q10,
                                    Q11,
                                    Q12,
                                    Q13,
                                    Q14,
                                    Q15,
                                    Q16,
                                    Q17,
                                    Q18,
                                    Q19,
                                    Q20,
                                    Q21,
                                    Q22,
                                    Q23,
                                    Q24)
    values ('$centre', 
            '$fonction', 
            '$fournisseur', 
            '$referent', 
            '$Q1', 
            '$Q2',
            '$Q3',
            '$Q4',
            '$Q5',
            '$Q6',
            '$Q7',
            '$Q8',
            '$Q9',
            '$Q10',
            '$Q11',
            '$Q12',
            '$Q13',
            '$Q14',
            '$Q15',
            '$Q16',
            '$Q17',
            '$Q18',
            '$Q19',
            '$Q20',
            '$Q21',
            '$Q22',
            '$Q23',
            '$Q24'
            )";
if ($conn->query($sql)){
    echo "evaluation envoyée avec succès";
}
else{
    echo "Error: ". $sql ."
    <br>". $conn->error;
}
$conn->close();
}

?>