<?php

    abstract class Notificacao {
        abstract public function enviar();
    }

    class Email extends Notificacao {
        public function enviar() {
            return "Enviando notificação por Email.";
        }
    }

    class SMS extends Notificacao {
        public function enviar() {
            return "Enviando notificação por SMS.";
        }
    }

    class Push extends Notificacao {
        public function enviar() {
            return "Enviando notificação Push.";
        }
    }

    $notificacoes = [
        new Email(),
        new SMS(),
        new Push()
    ];

    foreach ($notificacoes as $notificacao) {
        echo $notificacao->enviar() . PHP_EOL;
    }

?>
