<?php

require './BaseModel.php';

class UsuarioModel extends BaseModel {

    private $table = 'Usuario';
    
    private $fields = [
        'cpf',
        'email',
        'senha',
        
    ];

    public function create($values) {

        $this->createAdjust($this->fields, $values);

        $sql = ("INSERT INTO {$this->table} ({$this->fieldsSTR}) VALUES ({$this->valuesSTR});");
        // INSERT INTO {$this->table} ('cpf','email','senha','excluido') VALUES ('546546654', 'fulanmo@email.com'...)

        return$this->execute($sql);
    }

    public function read($id) {
        
        // 'id','excluido','usuario_alteracao','data_criacao','data_atualizacao','cpf','email','senha';
        $this->readAdjust($this->fields);

        // SELECT * FROM Usuario WHERE id = 14;
        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} WHERE id = {$id} LIMIT 1;");
    }

    public function readAll($page = 20) {
        
        $this->readAdjust($this->fields);

        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} LIMIT {$page};");
        
        return $this->execute($sql);
    }

    public function update($id, array $values) {

        $this->updateAdjust($values);

        $sql = ("UPDATE {$this->table} SET $this->fieldsSTR WHERE id = '{$id}';");
        // UPDATE USUARIOS SET cpf = '123456', email = 'novoEmail@trallala.com' WHERE id = 1;

        return $this->execute($sql);
    }

    public function delete($id) {
        
        $sql = ("DELETE FROM {$this->table} WHERE id = {$id};");
    
        return $this->execute($sql);

    }
    public function deleteMany($ids) {
        
        $ids = implode(",",$ids);

        $sql = ("DELETE FROM {$this->table} WHERE id IN ({$ids});");
    
        return $this->execute($sql);
    }
    

}

$usuarioModel = new UsuarioModel();

$dadosUsuario = [
    'cpf' => '05655202026',
    'email' => 'internacional@gmail.com',
    'senha' => 1234,
    
];
//$usuarioModel->create($dadosUsuario);
// $usuarioModel->update(2, $dadosUsuario);
//$usuarioModel->delete(1);

$ids= [
    4,

];
$usuarioModel->deleteMany($ids);

$dados = $usuarioModel->readALL();

if ( !empty($dados)) {

    foreach ($dados as $idx => $registros) {

        foreach($registros as $field => $value){
    
            echo "{$field}: {$value} <br>";
        }
        echo "<br>";
    }
    

}
