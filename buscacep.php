<?php
print "\n";
$cep = '82800-000'; // o cep!
// parametros passados pela URL
$postCorreios = "CEP=".$cep."&Metodo=listaLogradouro&TipoConsulta=cep";
// url para fazer a requisicao
$cURL = curl_init("http://www.buscacep.correios.com.br/servicos/dnec/consultaLogradouroAction.do");
// seta opcoes para fazer a requisicao
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURL, CURLOPT_HEADER, false);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $postCorreios);
// faz a requisicao e retorna o conteudo do endereco
$saida = curl_exec($cURL);
curl_close($cURL);// encerra e retorna os dados
$saida = utf8_encode($saida); // codifica conteudo para utf-8
$campoTabela = "";
// pega apenas o conteudo das tds e transforma em um array
preg_match_all('@<td (.*?)<\/td>@i', $saida, $campoTabela); 
// mostra o conteudo!
print "\n".strip_tags($campoTabela[0][0]); // rua
print "\n".strip_tags($campoTabela[0][1]); // bairro
print "\n".strip_tags($campoTabela[0][2]); // cidade
print "\n".strip_tags($campoTabela[0][3]); // estado
print "\n".strip_tags($campoTabela[0][4]); // cep
print "\n";
?>