<?php
    echo $_POST['pesel']; echo "<br />";
    echo $_POST['tel']; echo "<br />";
    echo $_POST['kodpocztowy']; echo "<br />";

    $sprawdzKodPocztowy = $_POST['kodpocztowy'];
    if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $sprawdzKodPocztowy)) { print 'Wprowadzono błędny kod pocztowy'; echo "<br />"; }
    $sprawdzpesel = $_POST['pesel'];
    if (!preg_match( '/^[0-9]{11}$/', $sprawdzpesel)) { print 'Wprowadzono błędny pesel'; echo "<br />"; }
    $sprawdztel = $_POST['tel'];
    if (!preg_match( '/^[0-9\+]{8,13}$/', $sprawdztel)) { print 'Wprowadzono błędny numer telefonu'; echo "<br />"; }
?>