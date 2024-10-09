<?php

class UsuarioModel {

    private $fields = [
        'id',
        'cpf',
        'email',
        'senha',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
    ]; 

    public function create() {

    }

    public function read($id) {
        
    }

    public function readlAll() {
        
    }

    public function update($id) {
        
    }

    public function delete($id) {
        
    }

}



class PessoaModel {

    private $fields = [
        'id',
        'cpf',
        'email',
        'nome',
        'sobrenome',
        'nome_Completo',
        'sexo',
        'cnpj',
        'tipo_pessoa',
        'estado_civil',
        'data_aniversario',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
        'estado_civil',
        'id_usuario',
    ]; 

    public function create() {

    }

    public function read($id) {
        
    }

    public function readlAll() {
        
    }

    public function update($id) {
        
    }

    public function delete($id) {
        
    }

}