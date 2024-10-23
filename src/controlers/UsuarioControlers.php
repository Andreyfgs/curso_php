<?php

require '../models/UsuarioModel.php';

class UsuarioController {

    private $usuarioModel = null;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

        public function create($dadosUsuario) {
        
        if (!$this->validaCPF($dadosUsuario['cpf'])) {
            throw new Exception("CPF inválido");
        }

        if (!$this->validaSenha($dadosUsuario['senha'])) {
            throw new Exception("Senha inválida");
        }

        if (!$this->validaEmail($dadosUsuario['email'])) {
            throw new Exception("Email inválido");
        }

        $this->usuarioModel->create($dadosUsuario);
        }

        private function validaCPF($cpf) {
            // código para remover o q não for numero 
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
             
            // Verifica se o CPF tem exatamente 11 dígitos
             if (strlen($cpf) != 11) {
                return false;
            }
        
            $digitoUm = 0;
            $digitoDois = 0;
        
            for($i = 0, $x = 10; $i <= 8; $i++, $x--){
                $digitoUm += $cpf[$i] * $x;
            }   
            for($i = 0, $x = 11; $i <=9; $i++, $x--){
                $digitoDois += $cpf[$i] * $x;
            }
            $calculoUm = ($digitoUm * 10) % 11;
            if ($calculoUm >= 10) {
                $calculoUm = 0;
        
            }$calculoDois = ($digitoDois * 10) % 11;
            if ($calculoDois >= 10) {
                $calculoDois = 0;
            } 
         
            if ($calculoUm == $cpf[9] && $calculoDois == $cpf[10]){
                return true;
            }else{
                return false;
            }
        }
          
        private function validaEmail($cpf){
            $CPFMasck = "";
            $masckCPF = "###.###.###-##"; // ###.###.###.## => 12345678910
        
            $j = 0;
        
            for ($i= 0; $i < strlen($masckCPF); $i++){
        
                if ($masckCPF[$i] == '#') {
                    $CPFMasck .= $cpf[$j]; // "1" => "123"
                    $j++;
                } else {
                    $CPFMasck .= $masckCPF[$i]; // 123.
                }
            }
        
            return $CPFMasck;
        }
        private function validaSenha($senha){
            if (strlen($senha) >= 4) {
                return false; // A senha é curta 
            }
            
            if (!preg_match('/[A-Z]/', $senha)) { // usuado para realizar uma correspondência de padrões em uma string 
                return false; // a senha não contém letras maiusculas 
       
            }
            
            if (!preg_match('/[0-9]/', $senha)) {
                return false; // A senha não contém um número
            }
             return true; // A senha é válida
            }
        private function validarEmail($email){
                // Verifica se o formato do e-mail é válido
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Verifica se o domínio tem um registro MX válido
                    $dominio = substr(strrchr($email, "@"), 1);
                    if (checkdnsrr($dominio, "MX")) {
                        return true; // E-mail válido e domínio existente
                    } else {
                        return false; // Domínio não encontrado
                    }
                } else {
                    return false; // Formato de e-mail inválido
                }
            }

}


    

/*
   NO CONTROLLER USUARIO:

   $dadosUsuario = [
        'cpf' => '12345678900',
        'email' => 'beltrano@tralala.com',
        'senha' => 1234,
        'excluido' => 0,
    ];

    $usuarioModel->update(2, $dadosUsuario) ;
 */