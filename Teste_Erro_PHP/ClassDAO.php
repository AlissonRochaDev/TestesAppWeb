<?php

    // POO - Programação Orientada a Objeto.
    // DAO -  Data Access Object.

    // public: Função aberta que possibilita herança com outras classes.
    // private: Função fechada que não possibilita herança com outras classes.
    // public static: Função aberta que possibilita herança com outras classes e congela o algoritmo a ser executado.
    // private static: Função fechada que não possibilita herança com outras classes e congela o algoritmo a ser executado.

    class ClassDAO{
        private function CalcularCombustivel($combustivel, $qtd){
            if($combustivel == '' || $qtd == ''){
                return 0;
            }else{
                if($combustivel = 1){
                    $resultado = $this->Etanol($qtd);
                }else if($combustivel == 2){
                    $resultado = $this->Gasolina($qtd);
                }else if($combustivel == 3){
                    $resultado = $this->Diesel($qtd);
                }
            }
			return $resultado;
        }

        public function Etanol($qtd){
            $etanol = $qtd * 3.09;

            return $etanol;
        }
        
        private function Gasolina($qtd){
            $gasolina = $qtd * 4.10;

            return $gasolina;
        }
    }
	
	private function Diesel($qtd){
	$diesel = $qtd * 4.60;

	return $diesel;
}