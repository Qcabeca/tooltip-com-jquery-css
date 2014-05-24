<?php
/**
/** Adicionando tooltip a elementos como input, link e imagem.

* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com//tooltip-com-jquery-css
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex">
<link rel="shortcut icon" href="http://quebrandoacabeca.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tooltip com jQuery e CSS - Exemplo</title>
<!-- CHAMANDO O JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- CHAMANDO O JQUERY UI -->
<script type="text/javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script tytpe="text/javascript">
// TOOLTIP
var $j = jQuery.noConflict();
// Use jQuery com a variavel $j(...)
$j(document).ready(function(){
$j("#imagem, #link, #input, #textarea").tooltip({ // ID dos elementos que vão exibir o tooltip
content: function () {
return $j(this).prop('title'); // Retorna o titulo do elemento no tooltip
}
});
});
</script>
<style type="text/css">
.ui-tooltip {
	padding: 12px;
	position: absolute;
	z-index: 9999;
	max-width: 400px;
	-webkit-box-shadow: 0 0 8px #aaa;
	box-shadow: 0 0 8px #aaa;
	background:#000;
	line-height:1.2;
	color:#FFF;
}
body .ui-tooltip {
	border-width: 2px;
}

</style>
</head>

<body>
<?php $imagem = 'Album que reúne as <b>melhores</b> imagens do campeonato de Longboard da <i>Califórnia</i>';?>
<?php $input = '<b>Exemplo:</b><br>- Programador</br>- Designer</br>- Redator';?>
<?php $link = 'O <b>WordPress<b> é uma plataforma semântica de vanguarda para publicação pessoal, com foco na estética, nos Padrões Web e na <u>usabilidade</u></span>.';?>
<h1>Tooltip com jQuery e CSS</h1>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<h4>Exemplo com input</h4>
<p><label>Profissão:</label><input type="text" name="input" id="input" title="<?php echo $input;?>" /></p>
<h4>Exemplo com link</h4>
<p><a href="#" rel="nofollow" id="link" title="<?php echo $link;?>">WordPress</a></p>
<h4>Exemplo com imagem</h4>
<img src="http://placehold.it/200x200.gif" id="imagem" title="<?php echo $imagem;?>" />
</body>
</html>
