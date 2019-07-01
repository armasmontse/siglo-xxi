<?php

/**
 * En este archivo se incluyen las Funciones de El Cultivo
 *
 * No agregar funciones del tema
 */

/** ==============================================================================================================
 *                                       Funciones de El Cultivo
 *  ==============================================================================================================
 */


/**
 * Clase para las imagenes del post que contiene el id de la imagen, la src, el tamaño y el alt
 *
 */

	include 'Classes/Cltvo_Img.php';
	include 'helper-functions/helpers.php';

/**
 * regresa todas las imagenes del post con sus caracteristicas en un array
 *
 * Parametros:
 *
 * @param int $parentId id del post
 * @param boolean|array $exclude imagenes a ser excluidas (por defecto false)
 *
 * @return array con las imagenes y sus caracteristicas
 */


function is_active($slug)
{
	return strpos($_SERVER['REQUEST_URI'], $slug) !== false;
}