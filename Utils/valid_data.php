
<?php
function validData($data)
{
    $donnee = trim($data);
    $donnee = stripslashes($data);
    $donnee = htmlspecialchars($data);

    return $donnee;
}
?>