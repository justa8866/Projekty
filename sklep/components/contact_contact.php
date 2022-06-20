<div class="contact" >
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="review_form_container">
                    <div class="review_form_title">Pozostajemy w kontakcie</div>
                    <div class="review_form_content">
                        <form action="" method="post" id="review_form" class="review_form">
                            <div
                                class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                <input type="text" name="imie" class="review_form_input" placeholder="Name" required>
                                <input type="email" name="email"  class="review_form_input" placeholder="E-mail" required>
                                <input type="text" name="temat" class="review_form_input" placeholder="Subject">
                            </div>
                            <textarea class="review_form_text" name="wiadomosc"
                                placeholder="Message" ></textarea>
                            <button type="submit"  class="review_form_button">Wyświetl wiadomość</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

include("config.php");
$imie = $_POST['imie'];
$email = $_POST['email'];
$wiadomosc = $_POST['wiadomosc'];
$temat = $_POST['temat'];
$imie = addslashes($imie);
$imie = htmlspecialchars($imie);

if (!$imie || empty($imie)) {
    echo '<p class="alert">Wypełnij pole z imieniem!</p>';
    exit;
}



$email = addslashes($email);
$email = htmlspecialchars($email);

if (!$email || empty($email)) {
    echo '<p class="alert">Wypełnij pole z e-mailem!</p>';
    exit;
}

$temat = addslashes($temat);
$temat = htmlspecialchars($temat);

if (!$temat || empty($temat)) {
    echo '<p class="alert">Wypełnij pole z e-mailem!</p>';
    exit;
}



$wiadomosc = addslashes($wiadomosc);
$wiadomosc = htmlspecialchars($wiadomosc);

if (!$wiadomosc || empty($wiadomosc)) {
    echo '<p class="alert">Wypełnij pole z komentarzem!</p>';
    exit;
}

// INSERT INTO `login` (`id`, `imie`, `nazwisko`, `nazwa_firmy`, `email`, `haslo`, `kraj`, `adres`, `miasto`, `kod_pocztowy`, `numer_telefonu`, `komentarz`) VALUES (NULL, 'Test', 'Test', 'test', 'test@test.pl', 'test', 'pl', 'adres', 'miasto', '42200', '123456789', 'asdad');
// INSERT INTO `wiadomosci` (`idwiadomosci`, `name`, `email`, `wiadomosc`) VALUES (NULL, 'Tom', 'tom@gmail.com', 'test ');
$statement = $pdo->prepare("INSERT INTO `wiadomosci` ( `name`, `email`, `wiadomosc`,`temat` ) 
                                         VALUES (?, ?, ?, ?);");
try
{
    $statement->execute([$imie,$email,$wiadomosc,$temat]);
    echo '<p class="alert">Udalo sie wstawić komentarz</p>';
    exit;
}
catch(Exception $e)
{
    echo '<p class="alert">Nieudalo sie wstawić komentarza</p>';
    exit;
}
?>
