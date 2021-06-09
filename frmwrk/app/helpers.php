<?php
use Illuminate\Support\Facades\DB;


/**
 * Converte data no formato timestamp do MySQL
 * para o seguinte formato:
 *
 * dd/mm/aaaa  (dia/mes/ano)
 *
 * @param timestamp $data_mysql Data/Time Mysql
 * <br />
 * OBS: MANIPULAÇÃO DE DATAS. Exemplo: <br />
 *	Data PHP para Data MySQL:	$mysqldate = date( 'Y-m-d H:i:s', $phpdate );<br />
 *	Data MySQL para Data PHP:	$phpdate = strtotime( $mysqldate );<br />
 *
 */
function dataMySQLtoPTbr($data_mysql) {
	$data = strtotime($data_mysql);
	return date('d/m/Y', $data);
}
//=======================================

function dataForDB($data) {
    return date('Y-m-d', strtotime($data));
}
//=======================================

function dataForSite($data) {
    return date('d/m/Y', strtotime($data));
}

/**
 * Formata nomes e títulos para o formato, ex.: Antonio Pereira da Silva
 * @author Clebio Felix
 * @param string $texto Texto que será alterado *
 */
function name_case($texto) {
	$texto =  mb_convert_case( mb_strtolower( trim($texto) ) , MB_CASE_TITLE );
	$search = array(' E ', ' O ', ' Da ', ' Das ', ' De ', ' Dos ', ' Do ', ' Em ');
	$subs = array(' e ', ' o ', ' da ', ' das ', ' de ', ' dos ', ' do ', ' em ');
	return str_replace($search, $subs, $texto);
}

//=======================================

/**
 * Corta um texto na posição de outro texto
 *
 * @param string $texto Texto que será cortado
 * @param string $cut Texto que define a posição de corte
 *
 * @example cut_in('meio-dia', '-') resultará em 'meio'
 *
 */
function cut_in($texto, $cut) {
    return substr($texto, 0, strripos($texto, $cut));
}

//=======================================

/**
 *
 * @param type $html
 * @param type $url
 * @return type
 *
 *
 */
function getImagem($html, $url = FALSE) {


    //preg_match_all('/<img\ssrc="([^"]+)/', $html, $imgs);

    preg_match_all(
            '/(<img.*?src=[\'|"])' . // A tag da imagem até src=' ou "
            '([^\'|"]*)' . // O endereço
            '([\'|"].*?\/?\>)' . // Fechamendo do src e o resto da tag de imagem
            '/mi', // PCRE_MULTILINE e PCRE_CASELESS
            $html, // O HTML
            $imgs  // Um array do que foi encontrado
    );

    $img = NULL;

    if ($url) {
        foreach ($imgs[2] as $im) {
            $img = $im;
        }
    } else {
        foreach ($imgs[0] as $im) {
            $img = $im;
        }
    }

    return $img;
}

//=======================================


/**
 * Elimina keys de um array a partir do início
 * na quantidade indicada por quant
 *
 * @param array $array O array de entrada
 * @param integer $quant A quantidade de elementos para eliminar do
 *                          início do array
 * @return array Retorna o array reduzido.
 */
function array_decrease($array, $quant) {
    $i = 0;
    foreach ($array as $k => $v) {
        unset($array[$k]);
        if (++$i === $quant) {
            break;
        }
    }

    return $array;

}

//=======================================

/**
 * Converte valor decimal (mysql) para Real (moeda do Brasil)
 * Nao inclui o simbolo do Real (R$).
 *
 * @param float $valor Valor decimal a ser convertido
 * @return string Valor formatado
 *
 */
function decimalParaReais($valor) {

	return number_format($valor, 2, ',', '.');
}

//=======================================

/**
 * Converte um valor em reais, para formato decimal do MySQL
 *
 * @param string $valor Valor em reais
 * @return float Valor em decimal
 */
function reaisParaDecimal($valor) {
    return str_replace(array('.' ,','), array('', '.'), $valor);
}

//=======================================

/**
*	função para validar e-mail
*
*	@param string $email O e-mail para o teste de validação
*	@return boolean TRUE Se string $mail passar pela validação
*/
function validaEmail($email){

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
        return false;
    }

    return true;
}

//=======================================

/**
 * Pega a versão do PHP (em tipo float) sem o número de correção
 * Exemplo: trás como 5.4 não como 5.4.27
 */
function get_php_version() {
    return (float) substr( phpversion(), 0, 3);
}

//=======================================

/**
 *
 * Função usada para montar a url completa de uma página PHP
 * Monta a URL passo a passo, usando os dados do array $_SERVER
 *
 * @author Clebio Felix <afelix@sfiec.org.br>
 *
 * @param int $retorno Tipo de retorno desejado
 * @param int $subirDir Quantidade de subdominios para subir
 *
 * /
==== OPCAO retorno =====
* Tipo de retorno desejado
------------------
0 (padrao) = url completa
1 = soh o dominio
2 = subir diretorios
==== OPCAO subirDir ====
* é a quantidade de diretorios para subir
----------------------
0 (padrao): soh elimina o nome do arquivo.
1 ou mais: quantidade de diretorios para subir
 */
function fullURL($retorno = 0, $subirDir = 0) {

    // Função usada para montar a url completa de uma página PHP
    // Monta a URL passo a passo, usando os dados do array $_SERVER

    $url = $_SERVER['SERVER_PROTOCOL'];
    $url = strtolower(substr($url, 0, strpos($url, '/')));
    if (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') {
        $url .= "s";
    }
    $url .= "://";
    $url .= $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] != '80') {
        $url .= ":" . $_SERVER['SERVER_PORT'];
    }

    if ($retorno == 1) {
        $url .= '/';

    } else if ($retorno == 0) {
        // Aqui montamos a URL completamente
        $url .= $_SERVER['REQUEST_URI'];

    } else if ($retorno == 2)  {
        // Aqui montamos a URL completamente
        $url .= $_SERVER['REQUEST_URI'];
        // E a reduzimos para terminar no último diretório solicitado

        for ($i = 0; $i <= $subirDir; $i++) {

            $url = substr($url, 0, strrpos($url, '/'));
        }

        $url .= '/';

    }

    return ($url);
}

// =================================

/**
 * Captura o IP do visitante
 */
function getIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

		//check ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];

	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

		//to check ip is pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

	} else {

		$ip = $_SERVER['REMOTE_ADDR'];

	}

	return $ip;
}

// =========================

/**
 * Retorna o nome do mês em português
 * usando como parâmetro o mês númerico
 * de 01 a 12
 *
 * @param integer $mes_int O mês em formato numérico
 *
 * @return string O nome do mês. Ex.: dezembro, janeiro, etc.
 *
 */
function int2mes($mes_int) {
    $mes_int = (int) $mes_int;
    setlocale(LC_ALL, 'pt_BR', 'ptb');
    $data = mktime(0, 0, 0, $mes_int);
    return strftime('%B', $data);
}

//=================================

/**
 * Pega o $_GET e escreve seus valores <br />
 * como varios campos input type hidden
 *
 * @param string $ignore,... Opcional: Variaveis/chaves do $_GET <br />
 * que serao ignoradas na escrita dos campos
 *
 */
function GETasHidden() {
    $ignore = func_get_args();
    $res = '';
    if (!empty($_GET)) {
        foreach ($_GET as $chave => $valor) {

            if (!in_array($chave, $ignore)) {

                $res .= "\n<input type='hidden' name='$chave' value='$valor' />";
            }
        }
    }

    echo $res;
}

//=======================================

/**
 * Pega o $_GET e gera uma string <br />
 * excluindo os indices do parametro $ignore
 *
 * @param string $ignore,... Opcional: Variaveis/chaves do $_GET <br />
 * que serao ignoradas na geracao do novo array
 *
 * @return string String com os parâmetros do $_GET
 *
 */
function GETasParams() {
    $ignore = func_get_args();
    $res = '';
    if (!empty($_GET)) {
        foreach ($_GET as $chave => $valor) {

            if (!in_array($chave, $ignore) ) {

                $res[] =  $chave . '=' . $valor;
            }
        }
    }
    if (empty($res)) {
        return false;
    }

    return implode('&amp;', $res);
}


//=======================================

/**
 * Transforma um array em texto (string)
 *
 * @author Clebio Felix <afelix@sfiec.org.br>
 *
 * @param array $matriz Array que serah transformada em texto
 * @return string String com todos os valores do array concatenados
 *
 */
function arrayToText($matriz) {
    if (is_array($matriz)) {
        $texto = '';
        foreach ($matriz as $v) {
            if (is_array($v)) {
                $texto .= arrayToText($v);
            } else {
                $texto .= $v;
            }
        }
        return $texto;
    } else {
        return (string) $matriz;
    }
}

//===========================

/**
 * Valida numeros de CPF (removendo máscaras)
 *
 * Adaptada e melhorada a partir do seguinte link:
 * @link http://www.geradorcpf.com/script-validar-cpf-php.htm
 *
 * @param integer $cpf Número de CPF
 *
 */
function validaCPF($cpf) {

    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    if (empty($cpf)) {
        return false;
    }

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se nenhuma das sequências invalidas abaixo
    // foi digitada. Caso afirmativo, retorna falso
    switch ($cpf) {
        case '00000000000000':
        case '11111111111111':
        case '22222222222222':
        case '33333333333333':
        case '44444444444444':
        case '55555555555555':
        case '66666666666666':
        case '77777777777777':
        case '88888888888888':
        case '99999999999999':
            return false;
    }
    // Calcula os digitos verificadores para verificar se o
    // CPF é válido
    for ($t = 9; $t < 11; $t++) {

        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return false;
        }
    }

    return true;
}

//===========================

/**
 * Valida numero CNPJ
 * Adaptada e melhorada a partir do seguinte link:
 * @link http://www.fernandowobeto.com/blog/funcao-valida-cnpj/
 *
 * @param integer/string $cnpj Numero CNPJ (se contiver mascara, essa será
 * removida
 *
 */
function validaCNPJ($cnpj) {

    $cnpj = ereg_replace('[^0-9]', '', $cnpj);
    if (empty($cnpj)) {
        return false;
    }
    $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);

    switch ($cnpj) {
        case '00000000000000':
        case '11111111111111':
        case '22222222222222':
        case '33333333333333':
        case '44444444444444':
        case '55555555555555':
        case '66666666666666':
        case '77777777777777':
        case '88888888888888':
        case '99999999999999':
            return false;
    }

    for ($t = 12; $t < 14; $t++) {
        for ($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++) {
            $d += $cnpj{$c} * $p;
            $p = ($p < 3) ? 9 : --$p;
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cnpj{$c} != $d) {
            return false;
        }
    }

    return true;
}


//===========================

/**
 * Essa funcao atual como array_map, mas de forma
 * recursiva sobre arrays multidimensionais. array_map nao tem
 * essa capacidade.
 *
 * @author Clebio Felix
 *
 * @param callable $callback Funcao que deve executada em cada elemento do array
 * @param array $arr1 Array no qual a funcao chamada irá executar em cada elemento
 * @return array Retorna o array com todos seus valores alterados por $callback
 *
 */
function array_map_recursive($callback, $arr1) {
    if (!is_callable($callback)) {
        //throw new Exception('Nao é possível executar esta funcao');
        echo '-- Nao é um funcao valida --';
        return false;
    }
    if (is_array($arr1)) {
        foreach ($arr1 as $k => $v) {
            if (!is_array($v)) {
                $arr1[$k] = call_user_func($callback, $v);
            } else {
                $arr1[$k] = array_map_recursive($callback, $v);
            }
        }
    } else {
        //throw new Exception('O paramentro 2 nao eh um Array');
        echo '-- Nao é um array --';
        return false;
    }
    return $arr1;
}

//===========================

/**
 * Remove caracteres finais de uma string
 *
 * @param string $texto String a ser cortada
 * @param int $quant Quantidade de caracteres a serem removidos
 */
function cutFinal($texto, $quant = 1) {
    return substr($texto, 0, strlen($texto) - $quant);
}

// =====================================

/**
 * Corta string até tamanho definido em caracteres
 * depois corta para o ultimo espaço e concatena com
 * algum caractere. O padrão é reticências
 *
 * @param string $texto Texto a ser cortado/reduzido
 * @param integer $tamanho Tamanho em caracteres para cortar
 * @param string $finalizador Texto para concatenar ao final (padrão: "...")
 * @return string String de texto, cortada e formatada
 */
function cutTamanhoDefinido($texto, $tamanho, $finalizador = '...') {
    if (strlen($texto) > (int) $tamanho) {
        $texto = substr($texto, 0, $tamanho);
        $texto = substr($texto, 0, strripos($texto, ' ')) . $finalizador;
    }
    return $texto;
}

// ----------------------------------------

/**
 * print_r renderizado com PRE
 */
function print_pre($var, $stop=false) {
	echo "<pre style=\"background-color: #E5F99D;
		display: block; position: relative; text-align: left; margin-bottom: 10px; padding: 4px; z-index: 200\">";
	print_r($var);
	echo "</pre> \n";
	if ($stop)
		exit;
}

/**
 * var_dump renderizado com PRE
 */
function var_dump_pre($var, $stop=false) {
	echo "<pre style=\"background-color: #E5F99D;
		display: block; text-align: left; position: relative; margin-bottom: 10px; padding: 4px; z-index: 200\">";
	var_dump($var);
	echo '</pre>';
	if ($stop)
		exit;
}


/**
 * Echo renderizado com PRE
 */
function echo_pre($var, $stop=false) {
	echo "<pre style=\"background-color: #E5F99D;
		display: block; position: relative; margin-bottom: 10px; padding: 4px; z-index: 200\">";
	echo $var;
	echo '</pre>';
	if ($stop)
		exit;
}

//================================

function var_export_pre($var, $stop=false) {
	echo "<pre style=\"background-color: #E5F99D;
		display: block; position: relative; margin-bottom: 10px; padding: 4px; z-index: 200\">";
	var_export($var);
	echo '</pre>';
	if ($stop)
		exit;
}

//================================

/**
 *
 * Funcao para limpar paragrafos e quebras de linha HTML
 *
 * @param string $input Texto de entrada
 * @return string
 *
 */
function limpaBrP($input) {
	return preg_replace('/<(p|\/p|br|br \/)>/i', '', $input);
}

//======================================

function exibirQuebraLinha($input){

     return preg_replace("/(\\r)?\\n/i", "<br />", $input);

}

function exibirQuebraLinhaPorStr($input,$str){

    return preg_replace("/$str/", "<br />", $input);
}

function formataLinhas($texto, $tag_inicio, $tag_fim) {
    $texto = preg_replace('/(\r\n|^)/', "\n$tag_inicio", $texto);
    return preg_replace('/$/m', $tag_fim, trim($texto));
}



//----

function youTube($urlXmlCanal){

    $curl = curl_init($urlXmlCanal);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $video = curl_exec($curl);

     if(!curl_errno($curl)) {
         $data = simplexml_load_string($video);
         curl_close($curl);
         return $data->entry ;

     } else {

         return false;
     }
}

function urlExists($url=NULL)
{
    if($url == NULL) return false;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
        return true;
    } else {
        return false;
    }
}


/**
 * @param $title valor da chave da tabela sysval
 * @param $result String retornado que deseja converter
 * @return String já convertido
 */
if (!function_exists('getSysValArray')) {

    function getSysValArray($title, $result)
    {
        if (isset($result)) {

           $sql = DB::table('sysvals as c')->select('c.sysval_title', 'c.sysval_value')->where('c.sysval_title', '=', $title)->get();

            $sep1 = null;
            $sep2 = '|';

            if (!isset($sep1))
                $sep1 = "\n";
            if ($sep1 == "\\n")
                $sep1 = "\n";
            if ($sep1 == "\\r")
                $sep1 = "\r";

            $temp = explode($sep1, $sql[0]->sysval_value);
            $arr = array();
            foreach ($temp as $item) {
                if ($item) {
                    $temp2 = explode($sep2, $item);
                    if (isset($temp2[1])) {
                        $arr[trim($temp2[0])] = $temp2[1];
                    } else {
                        $arr[trim($temp2[0])] = $temp2[0];
                    }
                }
            }
            return $arr[$result];
        } else return "0"; // "Não Informado";
    }
}
