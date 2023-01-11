<?php
    function exibeMensagem(string $texto): void {
        echo ($texto);
    }
    $texto = 'Ola Mundo.';

    exibeMensagem($texto);
?>