<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - Spanish
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MAXWIDTH'			=> 'Utilice ancho máximo',
	'MAXWIDTH_EXPLAIN'	=> 'Con "Sí" el foro es capaz de utilizar todo el ancho de la ventana del navegador.',
));
