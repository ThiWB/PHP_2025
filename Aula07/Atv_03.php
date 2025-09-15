<?php

    abstract class Pagamento {
        abstract public function processar();
    }

    class Cartao extends Pagamento {
        public function processar() {
            return "Processando pagamento via Cartão de Crédito...";
        }
    }

    class Pix extends Pagamento {
        public function processar() {
            return "Processando pagamento via Pix...";
        }
    }

    class Boleto extends Pagamento {
        public function processar() {
            return "Processando pagamento via Boleto Bancário...";
        }
    }

    $pagamentos = [
        new Cartao(),
        new Pix(),
        new Boleto()
    ];

    foreach ($pagamentos as $pagamento) {
        echo $pagamento->processar() . PHP_EOL;
    }

?>
