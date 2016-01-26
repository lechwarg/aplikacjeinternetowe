<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wppage\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'motoryzacja');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'Grzegorz');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'qwerty');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B/|s+~m(m4m>=&|`xfp^&#8&w;swpC6Tf|/}?PA[N-)=|MJ*:k+,rj~#wyH[lqzn');
define('SECURE_AUTH_KEY',  '4Ck;Kh8cs2x}03C,RB/>;_+/at?aa0TJ%t:4{NrL(u$!<*$oUjj|=_U8hv7(.:ey');
define('LOGGED_IN_KEY',    'jz6hT]D/sI|:rkcWF]/c>{]]<^/Xws<:l2-.uA}``yk)QOGCe5jrwo>V{:?i;]=f');
define('NONCE_KEY',        '<(@{SxhuMC36wpyzn6n`F6`;|w5#qd--VV]M~`qbl3i8$x$!N_ms{4Y(&+~0JY7i');
define('AUTH_SALT',        '^7l{-x?18.K3=#r$PQ?_5l3F4GB& 7a4%3^oQ!c!+6]ugFS?3 }r/]$VM~&^K20?');
define('SECURE_AUTH_SALT', 'V,A,Ii.KDLJSU12SeRi{F|GtReIOn{--Rv+[N,F_4f}J:183+cj>>f6*-W{]36U6');
define('LOGGED_IN_SALT',   '2yW&,-ts0^_gV[(w;j_nWX9_<apT+Xp,*}L-gel`A`Y& KDiW+IP-)&8SN7Yey*F');
define('NONCE_SALT',       '4ni6zf15=HPOna;bL}:#u[#G-Yo8OX+Bcru=}YBR;<bS/++-r=FD4C]vX}tHE#Iv');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
