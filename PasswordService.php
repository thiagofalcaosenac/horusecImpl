<?php
    echo 'isto é uma string comum';

    echo 'Você pode incluir novas linhas em strings,
    dessa maneira que estará
    tudo bem';

    // Imprime: Arnold disse uma vez: "I'll be back"
    echo 'Arnold disse uma vez: "I\'ll be back"';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\\*.*?';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\*.*?';

    // Imprime: Isto não será substituido: \n uma nova linha
    echo 'Isto não será substituido: \n uma nova linha';

    // Imprime: Variáveis $também não $expandem
    echo 'Variáveis $também não $expandem';

    use Defuse\Crypto\KeyOrPassword;

    function createKey()
    {
        $password = "exemplo";
        return KeyOrPassword::createFromPassword($password); // Noncompliant
    }

    $filename = $_GET["filename"];
    include $filename; // Noncompliant

?>