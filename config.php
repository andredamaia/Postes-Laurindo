<?php

// $pageurl = "https://".$_SERVER["SERVER_NAME"]."/dev"; // Production
$pageurl = "../postes-laurindo"; // Development

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];

if($page == NULL){
	$page = "home";
}

if (!is_file("pages/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		break;

	case "home":
		$title = "Postes Laurindo";
		$description = "A energia certa para a sua obra";
		break;
	
	case "kit-postes":
		$title = "Kit Postes";
		$description = "Este é o modelo de caixa mais simples do mercado e sugerido para locais que tenham baixo consumo de energia.";
		break;

	case "caixas-de-medicao":
		$title = "Caixas de Medição";
		$description = "A caixa de proteção para hidrômetro é confeccionado em polipropeno (PP) com carga e proteção contra raios u.v.";
		break;

	case "caixas-de-passagens":
		$title = "Caixas de Passagens";
		$description = "A caixa de concreto pequena é utilizada para passagem de tubulação elétrica subterrânea, e em algumas regiões serve também para inspeção do sistema aterramento do padrão de entrada de energia.";
		break;

	case "muretas-de-agua":
		$title = "Muretas de Água";
		$description = "A mureta fabricada em concreto usinado possui alta resistência e durabilidade. Ela garante mais a segurança a sua obra e compõe todos os acessórios necessários exigidos em norma.";
		break;
	
	case "muretas-de-agua":
		$title = "Muretas de Água";
		$description = "A mureta fabricada em concreto usinado possui alta resistência e durabilidade. Ela garante mais a segurança a sua obra e compõe todos os acessórios necessários exigidos em norma.";
		break;

	case "paineis":
		$title = "Paineis";
		$description = "Esse modelo de painel é um projeto original da laurindo que passou por várias melhorias ao longo dos anos visando otimizar a ocupação de espaço em obras e aperfeiçoar o sistema elétrico de forma segura. É a união de duas normas da concessionária do Estado - Celesc.";
		break;

	case "produtos":
		$title = "Produtos";
		$description = "Produtos.";
		break;

	default:
		$title = "Postes Laurindo";
		$description = "A energia certa para a sua obra";
		break;
}

?>