<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'TO_REPLACE_DB_NAME');

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'TO_REPLACE_DB_USER');

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'TO_REPLACE_DB_PASSWORD');

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'TO_REPLACE_DB_HOST');

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W%-[F&0;+BBzl]W.BU0a)$nK.yRp69}qkvbL-Jh7l0R/Idh[4tgql,wzX/TpV{_u' );
define( 'SECURE_AUTH_KEY',  'abD+-/&Avw3.nfFQ.=8ot?Z0WR{-=*kF_n($J6amr./C1I/?K; 4~y-KT6y@8bga' );
define( 'LOGGED_IN_KEY',    'bjv9a%R)_X;=)/s9ZsDaBD9nf`M&=y*s{zmlK5@sBki}(&+J@p|Hum:oV]MnqyC?' );
define( 'NONCE_KEY',        'Fgm/4d5Mlv?;MaJT-ji&W6pw: =^`E_(#tKtB+g:[QWL6-)vO,Yku?PKQiXWpwx1' );
define( 'AUTH_SALT',        '*JAxV%R2n/CeU<7:$-)%EcdH9d!R~6g-YvO87upmPN7Ln>b) XRV J-kU$(&<IlH' );
define( 'SECURE_AUTH_SALT', '4udrZv]8B)F.fj+>ECE/6Y,S>;JSr`lM(C  <+ruY,D]XTYE?b}>]ZR=ac<bR?4E' );
define( 'LOGGED_IN_SALT',   'h}~~>KQ%OXK$J4n;)]5=>MgZ_{Rd7~Tx-^_rIjD5{]u^M)30V>s*A2n1W&<a|2s/' );
define( 'NONCE_SALT',       'i)Gfp)%@~7&Xm;-~[{99UOrON)g_t0(Tt$Vy]9UDPkZ1_(=JZ]3qej,J7ccQ>FP_' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

