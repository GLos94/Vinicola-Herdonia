<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'Sql1594943_1' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'Sql1594943' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'Evolution21!!' );

/** Hostname MySQL  */
define( 'DB_HOST', '31.11.39.65' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|%4,hdLvHBC:+zG&(.12}YMR,k!]!9n]J0z[7#KyL(w/h^}=xF+lM&e&RJHxf.TL' );
define( 'SECURE_AUTH_KEY',  'G?W*|hAm20d#C2aSaoE&wI9wtFZzV+uIH#]eQHK&vy0m=d`zkCgR`s[c:VT#Y7TH' );
define( 'LOGGED_IN_KEY',    '5+|W<_x.kFYL#eI(5X)g_K^n0l,/~p&k4@C)1zi,W4mToWBEdB/t;Vnh2I3b[Zu^' );
define( 'NONCE_KEY',        ';3@#.RFy()O>[h?/~tVp/)ub&j&rg$HGkk2/H7O9#,c)+pWn}^CTgIF-:cL]vkX|' );
define( 'AUTH_SALT',        'YPq/Ok0(]>7%r>:]6dbun/G3C~Y+]3PHEBKO41ovDh_yVHFXjdn0>_pc@e192~0U' );
define( 'SECURE_AUTH_SALT', 'aCRz(v)fq:fw2#8mqP0298v<qf#]G$h`WfT)kS1/<Q9OVV=wG(mt&3re@~E>#c3#' );
define( 'LOGGED_IN_SALT',   '@$Eh8fsVOKAaRPA>j<:]6N<=m=<S6Vvz6<;Ewdec^5lb__6u;s^J84niH/gPkEn[' );
define( 'NONCE_SALT',       'M,&MSj~m,Go/(@TY.wEk0WK&`OP5OrhLt vz!gag@0#L7RUa;y%zyvK+Fq#Np:EV' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'vh_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_MEMORY_LIMIT', '256M');
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');