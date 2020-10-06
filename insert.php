<?php
include_once 'database.php';
if(isset($_POST['Submit']))
{    
     $discomfort = $_POST['discomfort'];
     $fatigue = $_POST['fatigue'];
     $headache = $_POST['headache'];
     $eyestrain = $_POST['eyestrain'];
     $saliva = $_POST['saliva'];
     $sweat = $_POST['sweat'];
     $nausea = $_POST['nausea'];
     $focus = $_POST['focus'];
     $fullness = $_POST['fullness'];
     $blurred = $_POST['blurred'];
     $dizzinessEyes = $_POST['dizzinessEyes'];
     $dizzyclose = $_POST['dizzyclose'];
     $vertigo = $_POST['vertigo'];
     $stomach = $_POST['stomach'];
     $burp = $_POST['burp'];

     $sql = "INSERT INTO test (discomfort, fatigue, headache, eyestrain, saliva, sweat, nausea, focus, fullness, blurred, dizzinessEyes, dizzyclose, vertigo, stomach, burp)
          VALUES ('$discomfort','$fatigue','$headache','$eyestrain','$saliva','$sweat','$nausea','$focus','$fullness','$blurred','$dizzinessEyes','$dizzyclose','$vertigo','$stomach','$burp')";
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
