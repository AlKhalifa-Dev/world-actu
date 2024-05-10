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
define( 'DB_NAME', 'world-actu' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&`u|FhZVQlk7Mtx7OWf785[H^Pg[`e|O1?c>$tX-&zq6)xXg;63mr%JO4:^NxOX$' );
define( 'SECURE_AUTH_KEY',  'Q}E&B!-Qy=T)S(3p|/M0wc$&393asPBkNUYm_E#vCIwyEdxJN3.uF8C&)_j~oAlq' );
define( 'LOGGED_IN_KEY',    'TT]gN*fw=#5>@p(Ya&W+]7K?2PG*3-.$^?9HjxZU]y=*Mb,XP}H]VA:!Qx82inKk' );
define( 'NONCE_KEY',        '^ENp?NFGn*1at<+_%a>ZqNT,f n>QF-tscsm{/_RC5 `oekMrI(;$b:o>9gH~9({' );
define( 'AUTH_SALT',        '^r:w83My-C4%#m0ST({[bncY)MtC;(HaYk8WG^W@RX=qu@9dA.r?M3LC3i2OG`7b' );
define( 'SECURE_AUTH_SALT', '] vgaCWGz#-X+VlGk}^Ql9|uYDyVNN/6R0o9myaqc.{rksjS*rHLLm`z`KEv23iC' );
define( 'LOGGED_IN_SALT',   '*5pWC3rQo{52:s.~c[-O_!;af)NK7[Wh7vB<xe~eq6n5&(cPB6?Sj*_/J3v6q4-w' );
define( 'NONCE_SALT',       '987|WFgF%uM}cvlVfn.awu#-ujiSGJmtbES4OK7LkVP/A)UBj+tk[)^gy_^e6y33' );
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
