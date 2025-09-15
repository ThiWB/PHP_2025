<?php

    abstract class Mensagem {
        protected $texto;

        public function __construct($texto) {
            $this->texto = $texto;
        }

        abstract public function formatar();
    }

    class MensagemMaiusculo extends Mensagem {
        public function formatar() {
            return mb_strtoupper($this->texto, 'UTF-8');
        }
    }

    class MensagemMinusculo extends Mensagem {
        public function formatar() {
            return mb_strtolower($this->texto, 'UTF-8');
        }
    }

    class MensagemCapitalizado extends Mensagem {
        public function formatar() {
            $textoMinusculo = mb_strtolower($this->texto, 'UTF-8');
            $primeiraLetra = mb_substr($textoMinusculo, 0, 1, 'UTF-8');
            $restante = mb_substr($textoMinusculo, 1, null, 'UTF-8');
            return mb_strtoupper($primeiraLetra, 'UTF-8') . $restante;
        }
    }

    $mensagens = [
        new MensagemMaiusculo("Olá Mundo!"),
        new MensagemMinusculo("Olá Mundo!"),
        new MensagemCapitalizado("olá mundo!")
    ];

    foreach ($mensagens as $msg) {
        echo $msg->formatar() . PHP_EOL;
    }
?>
