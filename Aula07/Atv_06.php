<?php

    class Relatorio {

        public function __call($nomeMetodo, $argumentos) {
            if ($nomeMetodo === 'gerar') {
                $qtdArgs = count($argumentos);

                if ($qtdArgs === 0) {
                    return $this->gerarSimples();
                } elseif ($qtdArgs === 1) {
                    return $this->gerarPorData($argumentos[0]);
                } elseif ($qtdArgs === 2) {
                    return $this->gerarPorIntervalo($argumentos[0], $argumentos[1]);
                } else {
                    throw new BadMethodCallException("Número de parâmetros inválido para gerar()");
                }
            } else {
                throw new BadMethodCallException("Método $nomeMetodo não existe.");
            }
        }

        private function gerarSimples() {
            return "Relatório simples gerado.";
        }

        private function gerarPorData($data) {
            return "Relatório gerado para a data: $data.";
        }

        private function gerarPorIntervalo($dataInicio, $dataFim) {
            return "Relatório gerado para o intervalo: $dataInicio até $dataFim.";
        }
    }

    $rel = new Relatorio();

    echo $rel->gerar() . PHP_EOL;                          
    echo $rel->gerar('2025-09-15') . PHP_EOL;              
    echo $rel->gerar('2025-09-01', '2025-09-15') . PHP_EOL; 

?>
