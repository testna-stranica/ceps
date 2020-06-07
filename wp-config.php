<?php
/**
 * Bazna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj fajl prilikom
 * instalacije. Ne morate koristiti web stranicu, ovaj fajl
 * možete kopirati kao "wp-config.php" i popuniti vrijednosti.
 *
 * Ovaj falj sadrži sljedeće postavke:
 *
 * MySQL postavke
 * Tajne ključeve
 * Prefiks baze podataka
 * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije o postavkama možete dobiti od vašeg web hosting servisa ** //
/** Ime vaše baze podataka za WordPress */
define( 'DB_NAME', 'pokaznawebstranica' );

/** MySQL korisničko ime za bazu podataka */
define( 'DB_USER', 'root' );

/** MySQL šifra baze podataka */
define( 'DB_PASSWORD', '' );

/** MySQL naziv hostinga*/
define( 'DB_HOST', 'localhost' );

/** Kodiranje znakova koje će se koristiti u tabelama unutar baze podataka. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Collate tip baze podataka. Ne mijenjajte ovo ako niste sigurni. */
define('DB_COLLATE', '');

/**#@+
 * Unikatni ključevi za autentifikaciju i salts.
 *
 * Promijenite ključeve u vaše unikatne fraze!
 * Ključeve možete generisati pomoću WordPress.org servisa za generisanje ključeva {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Ključeve možete promijeniti bilo kada. Svi korisnici će se morati ponovo prijaviti jer kolačići neće važiti nakon izmjene ključeva.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S#NdlmApHvyR.}+;FvIx%rA#E4,cC(yYWEz= 2+|E6yw*)Z2wT`}Ts=7!KfZp%8}' );
define( 'SECURE_AUTH_KEY',  'a`d^jo*8%nKJ?[S{Q3W]>~keVHuiEcUB/_;Ix-&gu.x.C*x;9TQ$_;RqwA<oBP?L' );
define( 'LOGGED_IN_KEY',    'gS2^AUuVqWFSMHqq/Y78WF<L#M@-e^_MH8c]xlXB(nE}IPPk+<L-jY6#x 5idGKI' );
define( 'NONCE_KEY',        'J9k4DvR.xqum[N{;By}bB<Q($2bSM(dX9:[S|_:UEC9Ba<oqM_vo6~2[:Q5!J3Q@' );
define( 'AUTH_SALT',        '*32>`O97tP*u}b^|)-K 4|pK0L(!`O;9&G)?](=GrKdst2aNymAMO: MFW!/,)w|' );
define( 'SECURE_AUTH_SALT', 'I<Oi+m d`G_Tot~XAhpH}oS[}D/pn_6Mm>5%KQYOagtvHoXF8`P^w8!fI>t!T5_I' );
define( 'LOGGED_IN_SALT',   'qpnIKi`o&;mJv+AA C49JpDMR5MH(_Nz!(#>i5IMMPXDG[dR?Zr6Z2uy%T6ZSI1*' );
define( 'NONCE_SALT',       ')^M+2x)^5iR2k@ZSUDs:BN5Z_Mz?pt^L8hvArig77VcW-lyl{s{e<Z~Oj8UF/Xbx' );

/**#@-*/

/**
 * Prefiks WordPressove tabele u bazi podataka.
 *
 * Možete imati više instalacija unutar jedne baze ukoliko svakoj date jedinstven prefiks.
 * Molimo vas da koristite samo brojeve, slova, i donje crtice!
 */
$table_prefix = 'wp_';

/**
 * Za programere: WordPress debugging mod.
 *
 * Promijenite ovu vrijednost u true da omogućite prikaz obavijesti prilikom razvoja.
 * Preporučeno je da programeri tema i plugina koriste WP_DEBUG
 * u svojim razvojnim okruženjima.
 *
 * Za informacije o drugim konstantama za debugovanje, posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno objavljivanje. */

/** Apsolutna putanja do WordPress foldera. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Postavke za WordPress varijable i već uključene datoteke. */
require_once( ABSPATH . 'wp-settings.php' );
