use Defuse\Crypto\KeyOrPassword;

function createKey() {
    $password = "example";
    return KeyOrPassword::createFromPassword($password); // Noncompliant
}


$filename = $_GET["filename"];
include $filename; // Noncompliant
