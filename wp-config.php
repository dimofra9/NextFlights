<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nextFlights_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'dimofra9');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '12345');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'mI[INu%F|+gOfV63E52rC*}f|o;_m[+o2[,~JtfDM[Ozj2mDE*u*XYNMZnc-l}3;');
define('SECURE_AUTH_KEY', '0B4oW(c@x$tufNXPnZp)V]6hH=8,xm&)/1Alv3s7KVs]iQ}k=Qs))}JibvKA+Aph');
define('LOGGED_IN_KEY', '3in)mP>nCe^OnnE`YVRwdC64*@ZSW}OupP Jj(e:{Eg.^?_KQba24H;Hg$6`o_w-');
define('NONCE_KEY', 'Gop(c|}~>Av9mzVeHVE|+u Cz1IM<cf=qAIEJ1Ltvl*!F(b~_V0jSH_u[1L5>jf_');
define('AUTH_SALT', '@wTjg 87J0pHDV*iD~08T7ztK0m9nw;D{e]ZDti:>^Ve 2K,Fa?W*xVQRdmg^>Of');
define('SECURE_AUTH_SALT', 'R((m5z#%!FD_wpUkdOw D)SzoVwEu>dT/jk270TLN%sZ8~|Auz9sLfmuCWEIBx!]');
define('LOGGED_IN_SALT', 'T!F93myIQ.%N%]Pp*>Hyg!hA=`%Cn4XH-NG;)oQHOy>oR~z<-UHz`?R{pxB]lh$?');
define('NONCE_SALT', 's[MJmFCTQ!;k#)#>{6wM@-iaa>n8q] r|<Sa_:/38~pro-Y7U1)R>rA,sp3h{I7n');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

