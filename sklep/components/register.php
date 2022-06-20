

<div class="row justify-content-lg-center " > 
        <form action="" method="post"  >
            <br><br><br><br><br><br><br><br>


            <label class="wyglad" >Imię</label>
            <br>
            <input type="text" name="imie" placeholder="Imię" class="form-control" required />

            <br>
            <label class="wyglad" >Nazwisko</label>
            <br>
            <input type="text" name="nazwisko" placeholder="Nazwisko" class="form-control" required />
            <br>
            <label>Nazwa firmy</label>
            <br>
            <input type="text" name="nazwa_firmy" placeholder="Nazwa firmy" class="form-control" />
            <br>
            <label>E-mail</label>
            <br>
            <input type="email" name="email" required placeholder="Email" class="form-control" required />
            <br>
            <label>Hasło</label>
            <br>
            <input type="password" name="haslo" placeholder="Haslo" class="form-control" required />
            <br>
            <label>Kraj</label>
            <br>
            <select name="kraj" id="country"  class="form-control">
                <option>Austria</option>
                <option>Belgia</option>
                <option>Bułgaria</option>
                <option>Chorwacja</option>
                <option>Cypr</option>
                <option>Czechy</option>
                <option>Dania</option>
                <option>Estonia</option>
                <option>Finlandia</option>
                <option>Francja</option>
                <option>Grecja</option>
                <option>Hiszpania</option>
                <option>Holandia</option>
                <option>Irlandia</option>
                <option>Litwa</option>
                <option>Luksemburg</option>
                <option>Łotwa</option>
                <option>Malta</option>
                <option>Niemcy</option>
                <option>Polska</option>
                <option>Portugalia</option>
                <option>Rumunia</option>
                <option>Słowacja</option>
                <option>Słowenia</option>
                <option>Szwecja</option>
                <option>Węgry</option>
                <option>Włochy</option>
            </select>
            <br>
            <label>Adres</label>
            <br>
            <input type="text" name="adres" placeholder="Adres" class="form-control" required />
            <br>
            <label>Miasto</label>
            <br>
            <input type="text" name="miasto" placeholder="Miasto" class="form-control" required />
            <br>
            <label>Kod pocztowy</label>
            <br>
            <input type="text" name="kod_pocztowy" placeholder="Kod pocztowy" class="form-control" required />
            <br>
            <label>Numer telefonu</label>
            <br>
            <input type="tel" name="numer_telefonu" placeholder="Numer telefonu" class="form-control" required />
            <br>
            <label>Komentarz</label>
            <br>
            <textarea name="komentarz" id="komentarz" cols="30" rows="10" class="form-control" placeholder="Zostaw komentarz"></textarea>
            <br>
            <button type="submit" class="btn btn-warning">Wyślij</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

        </form>


</div> 

        <?php 

include("config.php");
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$firma = $_POST['nazwa_firmy'];
$email = $_POST['email'];
$haslo = $_POST['haslo'];
$kraj = $_POST['kraj'];
$adres = $_POST['adres'];
$miasto = $_POST['miasto'];
$kodpocztowy = $_POST['kod_pocztowy'];
$tel = $_POST['numer_telefonu'];
$komentarz = $_POST['komentarz'];

$imie = addslashes($imie);
$imie = htmlspecialchars($imie);

if (!$imie || empty($imie)) {
    echo '<p class="alert">Wypełnij pole z imieniem!</p>';
    exit;
}

$nazwisko = addslashes($nazwisko);
$nazwisko = htmlspecialchars($nazwisko);

if (!$nazwisko || empty($nazwisko)) {
    echo '<p class="alert">Wypełnij pole z nazwiskiem!</p>';
    exit;
}

$firma = addslashes($firma);
$firma = htmlspecialchars($firma);

$email = addslashes($email);
$email = htmlspecialchars($email);

if (!$email || empty($email)) {
    echo '<p class="alert">Wypełnij pole z e-mailem!</p>';
    exit;
}

$haslo = addslashes($haslo);
$haslo = htmlspecialchars($haslo);

if (!$haslo || empty($haslo)) {
    echo '<p class="alert">Wypełnij pole z hasłem!</p>';
    exit;
}

$adres = addslashes($adres);
$adres = htmlspecialchars($adres);

if (!$adres || empty($adres)) {
    echo '<p class="alert">Wypełnij pole z adresem!</p>';
    exit;
}

$miasto = addslashes($miasto);
$miasto = htmlspecialchars($miasto);

if (!$miasto || empty($miasto)) {
    echo '<p class="alert">Wypełnij pole z miastem!</p>';
    exit;
}

$kodpocztowy= addslashes($kodpocztowy);
$kodpocztowy = htmlspecialchars($kodpocztowy);

if (!$kodpocztowy || empty($kodpocztowy)) {
    echo '<p class="alert">Wypełnij pole z kodem pocztowym!</p>';
    exit;
}

$tel = addslashes($tel);
$tel = htmlspecialchars($tel);

if (!$tel || empty($tel)) {
    echo '<p class="alert">Wypełnij pole z numerem telefonu!</p>';
    exit;
}

$komentarz = addslashes($komentarz);
$komentarz = htmlspecialchars($komentarz);

// INSERT INTO `login` (`id`, `imie`, `nazwisko`, `nazwa_firmy`, `email`, `haslo`, `kraj`, `adres`, `miasto`, `kod_pocztowy`, `numer_telefonu`, `komentarz`) VALUES (NULL, 'Test', 'Test', 'test', 'test@test.pl', 'test', 'pl', 'adres', 'miasto', '42200', '123456789', 'asdad');

$statement = $pdo->prepare("INSERT INTO `login` (`imie`, `nazwisko`, `nazwa_firmy`, `email`, `haslo`, `kraj`, `adres`, `miasto`, `kod_pocztowy`, `numer_telefonu`, `komentarz`) 
                                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
try
{
    $statement->execute([$imie, $nazwisko,$firma,$email,md5($haslo),$kraj,$adres,$miasto,$kodpocztowy,$tel,$komentarz]);
    echo '<p class="alert">Udalo sie zarejestrowac</p>';
    exit;
}
catch(Exception $e)
{
    echo '<p class="alert">Nieudalo sie zarejestrowac</p>';
    exit;
}




?>
