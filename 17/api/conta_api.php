<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarContas();
        break;
    case 'buscar':
        buscarContaById();
        break;
    case 'cadastrar':
        cadastrarConta();
        break;
    case 'atualizar':
        atualizarConta();
        break;
    case 'excluir': {
        excluirConta();
        break;
    }
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarContas() {
    $contas = ContaRepository::getAllContas();
    echo json_encode($contas);
}

function buscarContaById() {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $conta = ContaRepository::getContaById($id);

        if($conta){
            echo json_encode($conta);
        } else {
            http_response_code(404); // Conta não encontrada
            echo json_encode(['error' => 'Conta não encontrada']);
        }
    } else {
        http_response_code(405); // Método não permitido
    }
}

function cadastrarConta() {

}

function atualizarConta() {

}

function excluirConta() {

}

?>