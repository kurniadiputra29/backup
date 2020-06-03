<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'wp_latihan1' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '1234' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']XHV@A7ED#$301]aFWc[Y3yN7OWdY8:D&-^e(3*gn]}`Vz>.mdmBocnm77q$~@qP' );
define( 'SECURE_AUTH_KEY',  ']:@[[HU(1Cde[2<Dmq6^5k=Rm{Z^r`x>>ek/;OK3Oj5Ma5qjgq5`gHD})z$:]P#Q' );
define( 'LOGGED_IN_KEY',    'SeOhBYY(^Jan;#^5#HLW*EgDB8ci>-:d?,~U>hP3^#(if8&6/yz(T:S&{JHIMNBT' );
define( 'NONCE_KEY',        '{Y^Ko[+CVqM+3mxyILyd3G{DZD%U/d}MIP7_EI>^<@RHl09nK#$IAIIfZY/?G7{,' );
define( 'AUTH_SALT',        'fCpeO+R:*5Y)H3/w[K[#DDZIDr/aTBi:E5e{Hb`9/%0{#9cyih.=fKn{%,a~`W3}' );
define( 'SECURE_AUTH_SALT', 'TbiJ_ x$G,t%jV,aw{9&)nm*;LlGTMvDt|A96*uM7N`c^]+<~719OoITH`@m28q~' );
define( 'LOGGED_IN_SALT',   'MQ<`yQcS5L?ujp%(Ei#tJnQuG0~zyKsFGel:hUjkI<+yHDp2HROn5f6#:jX+G)rR' );
define( 'NONCE_SALT',       'zo@ .a~`5bZh&`3h-&;P`0t, SI4fY)VBV~E*O*|s:IyN^tvH_KbHb34||u6=Pm~' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');