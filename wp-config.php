<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'pwebseite');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'gonzog93');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'moritz54');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N]*;S}RVkq(6<hO&5^tWJX{,F#h;*Oe{G$B^^gAGY:r}B_mm1U@?1htfG{k]KUN)');
define('SECURE_AUTH_KEY',  'Pm_D8hr7~)E8^4m!]VH{P-z}Qu$BO!(kGmK0qjM0R?P<QI^o{SzT*Ho?S65N{S-Y');
define('LOGGED_IN_KEY',    'JKb#,FF$x&K&/jV?A9ZE/rzwB,:(|=z!E4]+u/rWG~$W,RZz/:^uGc}^Q~4Z?cfs');
define('NONCE_KEY',        '+M@SlCh*qBA`?nd`jS-fjIRjq$m Pq`V*GQ@&xp_mJ{4zTi~qi/LIRm8S?Jeq5.T');
define('AUTH_SALT',        'nhOEk$(MbD)pu|jSZ6u.PzY6n8Ojt[=[Rr2{cgpVo>)o0uE15%Nq^)t:kC*m%d&|');
define('SECURE_AUTH_SALT', 'e.b<RaqPSG}<`Y}SGpSS.B!VUKADO63l)ga+Nu0V,QUAI?$^aYY+5?bvET2yDp!K');
define('LOGGED_IN_SALT',   'Ix%;>/F1pS*gU<$*rPr0;4EK<U%wnuq7zlJn^1+g]c`_#Z~B+]U*o`)UUwPl_rPd');
define('NONCE_SALT',       '#!elP/c]$; ;>$8BiQM>ysC}w@h,R0q9IJp&A>-uW&@9t3@DK,?pBrtT_Dfv&j&W');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

//Das Blocken von Skript-Tags deaktivieren
define('CUSTOM_TAGS', true);