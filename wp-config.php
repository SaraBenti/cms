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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rx`MU_nX>R1Dmf&A4ktQPb*=5C%VGzbS^p^5lUn4*W}5P>.Zo/}2^H-qZ{bC9WTF' );
define( 'SECURE_AUTH_KEY',  'A;,gUg9S9,zc`ZQ,PN^mLQyLQE7t )Mkp^W &{+R1 5yXX4%=1 MC7m#m(-k=>:-' );
define( 'LOGGED_IN_KEY',    '#r<{-wdgnKb?$`Tvl,O`}s@0];OdI*ZWFtP+A7jzz/k4=lG=A6HPkfi5ws?Q&aB(' );
define( 'NONCE_KEY',        ',)7c&o.LJ`Z6s6~apnQ<6NMh^`r](azQH0<xN_=VkzRuP9wW=ZEE=$r4Q[CTj)n#' );
define( 'AUTH_SALT',        '1xn@o$%p4h}R$Pv}XqCEFMr+-Dvzr#WDP6x_MR,-k}+$%1+[$aGe<Ub]:sW>|Vso' );
define( 'SECURE_AUTH_SALT', 'f{|2NF2%GO,q0@lI+3%SrwFyd1<Z&E#I@|6lN4 |NND?^WlVdqtB>1Qu.^U5+9Ns' );
define( 'LOGGED_IN_SALT',   'CP{>A~{5wEEM:0XEwGgaR#{`s6(lNXAoPS%g}>*9Y@{cTaqfAXQ$cFL{_m{;PlO3' );
define( 'NONCE_SALT',       '<1=6MovBr_p.79{YAgkfF2qTWqLFS}9B@E2*3EFu,Tja,+]:7] cFKiIgM:Pw}KT' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
