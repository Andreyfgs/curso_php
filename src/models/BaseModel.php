<?php

require "../database/Conexao.php";

abstract class BaseModel {

    private $conexao = null;
    public $fieldsSTR = '';
    public $valuesSTR ='';

    public $fieldsCommon = [
        'id',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
    ];

    public function __construct()
    {
        global $conexao; //acessamos (global) a variavel $conexao do arquivo
        $this->conexao = $conexao;
    }
    
    public function createAdjust($fields, $values) {

        $this->fieldsSTR = '';
        
        $this->fieldsSTR = implode(',', $fields); // cpf, email, senha, excluido

        foreach($values as $key => $value) {
            $this->valuesSTR .= "'{$value}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }
    
        $isVirgula = substr($this->fieldsSTR , -1) === ",";

        if ($isVirgula){
            $this->fieldsSTR = substr($this->fieldsSTR, 0, -1);
        }
        
        
        $isVirgula = substr($this->valuesSTR , -1) === ",";

        if ($isVirgula){
            $this->valuesSTR = substr($this->valuesSTR, 0, -1);
        }
    
    }

    public function readAdjust($fields) {
        $arrayFields = array_merge($this->fieldsCommon, $fields) ;

        $this->fieldsSTR = implode(",", $arrayFields);
    }

    public function updateAdjust($values) {

       $this->fieldsSTR = '';
       
        foreach($values as $key => $value) {
            $this->fieldsSTR .= "{$key} = '{$value}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }

        $isVirgula = substr($this->fieldsSTR , -1) === ",";

        if ($isVirgula){
            $this->fieldsSTR = substr($this->fieldsSTR, 0, -1);
        }

    
    }

    private function getData($result){

        $dados = [];

        if (is_bool($result)) {
            return $dados;
        }

        if ($result && $result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $dados[] = $row;
            }
        }
        return $dados;
    }

    public function execute($sql)
    {

        $result = $this->conexao->query($sql);

        $result = $this->getData($result);

        return $result ?? [];
    }
}