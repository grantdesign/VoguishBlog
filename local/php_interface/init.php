<?php
define('DEFAULT_TEMPLATE_PATH', '/local/templates/.default');

function debug($data)
{
	echo '<pre>'.print_r($data, 1).'</pre>';
}

function mbCutString($str, $length, $postfix = '...', $encoding = 'UTF-8') // обрезание символов в строке
{
    if (mb_strlen($str, $encoding) <= $length) {
        return $str;
    }
 
    $tmp = mb_substr($str, 0, $length, $encoding);
    return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding).$postfix;
}

function resizeImage($img, $width, $height)
{
	return CFile::ResizeImageGet(
		$img,
		array("width" => $width, "height" => $height),
		BX_RESIZE_IMAGE_EXACT,
		true
	);
}