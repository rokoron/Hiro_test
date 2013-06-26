<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FLASHアニメーションテンプレートINDEX</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style type="text/css">
#list	{
	border:solid #06C 1px;
	text-align:center;
	float:left;
	margin:0px 10px 10px 0px;
}

#list td	{
	padding:2px 4px;
}

#ffile, #fsize, #fdate	{
	border-top:	solid #06C 1px;
}

#resize	{
	width:600px;
	margin:0px 0px 10px 0px;
	font-size:1.8em;
}

#resize	img{
	cursor:pointer;
	margin-left:5px;
}

a{/*リンクされた文字*/
    color:0000ff;
    font-style:normal;
    text-decoration:underline;
}
a:link {/*未訪問のリンク*/
    color:0000ff;
    font-style:normal;
    text-decoration:underline;
}
a:visited {/*訪問後のリンク*/
    color:#934C7B;
    text-decoration:underline;
}
a:hover {/*マウスをのせたとき*/
    color:#ff0000;
    font-style:normal;
    text-decoration:underline;
}
a:active {/*クリック中*/
    text-decoration:none;
}
</style>
<script type="text/javascript">
$(function(){
	$("#size01").click(function(){
		$(".size").width(120).height(160);
	});
});

$(function(){
	$("#size02").click(function(){
		$(".size").width(240).height(320);
	});
});
</script>
<script type="text/javascript">
$(function() {
	$("#resize img").mouseover(function(){
		var a = $(this).attr("id");
		$(this).attr("src", "img/"+a+"_on.png");
	})
	.mouseout(function(){
		var a = $(this).attr("id");
		$(this).attr("src", "img/"+a+".png");
	});
});
</script>
</head>

<body>

<?php

$str_n = 'abcdefghijklmnopqrstuvwxyz';

for($i = 0; $i <= 26; $i++){
	$str = substr($str_n, $i, 1);

	$place = $str.'/';
	if(file_exists($place)){
		$dir = opendir($place);
	}

	if(readdir($dir)){
		while($file = readdir($dir)){
			if($file != '..' && $file != '.'){
				if (ereg('.swf', $file)) {
					$a_file[] = $file;
				}
			}
		}
	}

$s_num[$str] = count($a_file);
$a_file = array();


}

//数字のディレクトリ
for($i = 0; $i <= 99; $i++){
	if($i<10){
		$str = '0' . $i;
	}else{
		$str = $i;
	}

	$place = $str.'/';
	if(file_exists($place)){
		$dir = opendir($place);
	}

	if(readdir($dir)){
		while($file = readdir($dir)){
			if($file != '..' && $file != '.'){
				if (ereg('.swf', $file)) {
					$a_file[] = $file;
				}
			}
		}
	}

$s_num[$str] = count($a_file);
$a_file = array();

}

?>

<h1>FLASHアニメーションテンプレート</h1>

<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td><a href="aa.php">[a]キラキラ(<? print $s_num["a"]; ?>)</a></td>
    <td><a href="b.php">[b]オブジェクト移動(<? print $s_num["b"]; ?>)</a></td>
    <td><a href="c.php">[c]登場(カード)(<? print $s_num["c"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="d.php">[d]攻撃エフェクト(<? print $s_num["d"]; ?>)</a></td>
    <td><a href="e.php">[e]集中線(画面全体)(<? print $s_num["e"]; ?>)</a></td>
    <td><a href="f.php">[f]効果線(<? print $s_num["f"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="g.php">[g]文字出現(<? print $s_num["g"]; ?>)</a></td>
    <td><a href="h.php">[h]発光(小)(<? print $s_num["h"]; ?>)</a></td>
    <td><a href="i.php">[i]発光(大)(<? print $s_num["i"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="j.php">[j]崩壊(カード)(<? print $s_num["j"]; ?>)</a></td>
    <td><a href="k.php">[k]ステータスアップ(<? print $s_num["k"]; ?>)</a></td>
    <td><a href="l.php">[l]ステータスダウン(<? print $s_num["l"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="m.php">[m]サーチライト(<? print $s_num["m"]; ?>)</a></td>
    <td><a href="n.php">[n]カードキラリ(<? print $s_num["n"]; ?>)</a></td>
    <td><a href="o.php">[o]飛び散る(飛沫、しぶき)(<? print $s_num["o"]; ?>)</a></td>
  </tr>
</table>

<HR>

<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td><a href="00.php">[00]ガチャ(単発)(<? print $s_num["00"]; ?>)</a></td>
    <td><a href="01.php">[01]ガチャ(連続)(<? print $s_num["01"]; ?>)</a></td>
    <td><a href="02.php">[02]バトル(ユーザー)(<? print $s_num["02"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="03.php">[03]バトル(ボス)(<? print $s_num["03"]; ?>)</a></td>
    <td><a href="04.php">[04]合成(2枚)(<? print $s_num["04"]; ?>)</a></td>
    <td><a href="05.php">[05]合成(3枚以上)(<? print $s_num["05"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="06.php">[06]ログインスタンプ(<? print $s_num["06"]; ?>)</a></td>
    <td><a href="07.php">[07]レベルアップ系(<? print $s_num["07"]; ?>)</a></td>
    <td><a href="08.php">[08]インライン系(<? print $s_num["08"]; ?>)</a></td>
  </tr>
  <tr>
    <td><a href="09.php">[09]その他ゲーム特有のもの(<? print $s_num["09"]; ?>)</a></td>
    <td><a href="10.php">[10]オープニング(<? print $s_num["10"]; ?>)</a></td>
    <td><a href="11.php">[11]クエスト(<? print $s_num["11"]; ?>)</a></td>
  </tr>
</table>

</body>

</html>


