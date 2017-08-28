<?php
require_once('../config.php');
require_once(DBAPI);
$books = null;
$book = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $books;
	$books = find_all('livros');
}
/**
 *  Cadastro de Livros
 */
function add() {
  if (!empty($_POST['book'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $book = $_POST['book'];
    $book['modified'] = $book['created'] = $today->format("Y-m-d H:i:s");
    
    save('books', $book);
    header('location: index.php');
  }
}
/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['book'])) {
      $book = $_POST['book'];
      $book['modified'] = $now->format("Y-m-d H:i:s");
      update('books', $id, $book);
      header('location: index.php');
    } else {
      global $book;
      $book = find('books', $id);
    } 
  } else {
    header('location: index.php');
  }
}