<?php 

/* 
Site: Systray Informática
Autor: Humberto Alves de Almeida
Data: 27 de março, 2020
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'sobre':
		include 'app/views/sobre.php';
		break;

	case 'solucoes':
		include 'app/views/solucoes.php';
		break;
		
	case 'contato':
		include 'app/views/contato.php';
		break;

	case 'chamado':
		include 'app/views/chamado.php';
		break;
	
	default:
		include 'app/views/home.php';
		break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';