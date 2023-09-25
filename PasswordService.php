use Defuse\Crypto\KeyOrPassword;

function createKey() {
    $password = "exemplo";
    return KeyOrPassword::createFromPassword($password); // Noncompliant
}


$filename = $_GET["filename"];
include $filename; // Noncompliant
