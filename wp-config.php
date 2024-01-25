<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'PLANTY' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';3|i3=>ae]fJ_W?yvniSv=XKWjOlll ^-heekhld:c51l{:T/0>sV1-GgGbV41#k' );
define( 'SECURE_AUTH_KEY',  'r#M53r{fjyai~9Z-+F;os`58i%gm<`in-T7fRi#%q=#t,}2XJ$/<_Ut?>sN8ro0y' );
define( 'LOGGED_IN_KEY',    ')(F[mpr*NDD>IQ^,8|h%44#Go!-|I9{;5HDQfpHiD%tY*J$d{7{$&h%q0:=EP<xp' );
define( 'NONCE_KEY',        'T}]O=vYi7*Ny3;bAEg^[S3yESiY%UE%~E]s./{(@_#1FU1v%B?:Ymd8uV%QCQ}`0' );
define( 'AUTH_SALT',        'iH.oh67AY3[!^lLl$)Z=G%1CU_Ah`-=6MB$sI*MD*E]4>XdR@rd_f!@I1<2covW:' );
define( 'SECURE_AUTH_SALT', '!R-h:lGn?D(d3.rgN3xV$1/.A~~/bN?f)0x>cnPYDlk8GLgb&;hF)nZ(>OC?,>4[' );
define( 'LOGGED_IN_SALT',   '+W?9PZIiPOK:fNbfFe>{.u^5a-k#CY=j]WT>SYeBVjk.<Cfal$*k#|CMx-W,S>qa' );
define( 'NONCE_SALT',       'IFT<=bAJORq<~gc;f.R7Ry-,5lBKo6@0$I)gtc_V$MjN!n%;!vk9sCb3Uo=Yz)rg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
