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
define( 'DB_NAME', 'wp_coba1' );

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
define( 'AUTH_KEY',         'O@;_C]x;>?hM1mi:rwFuJ`9cP.-q_;tP$/?T_]]0^P0yX`iu)./:}#3#5d4(Q3[@' );
define( 'SECURE_AUTH_KEY',  '(IjQln5}usfwub}W<;# !Hl%3!XLt8%YwP*Up9JOho)7#&(63(?oG$tevMlW>7F4' );
define( 'LOGGED_IN_KEY',    'AM)HKTLx-$qJ(qL$/qGqFC *_yMA&+6`aYP{v6hi:vi7ta>{h]e80z:{(IFJJ/;b' );
define( 'NONCE_KEY',        '^$mKqC}PK Ims#>lamq~fm[nw#nBvNQuzB$ByOkNz6R~J/ :t~r|UQTPhRiBIk^R' );
define( 'AUTH_SALT',        '10T?(6k3%MPp k:zh[eki0hKLzh?;q8OSG@n2|Z.$FtHa}jo8l)>/*zYZ.=j [zW' );
define( 'SECURE_AUTH_SALT', 'BkV:MP5x>8h$5[NDD._C>ICcmHEG.vW-5|PKks(dhEmKds4:^P*iUXsWBh:#w|{^' );
define( 'LOGGED_IN_SALT',   '}mB_I&jrTOl+Eg`7`@}:nUc#[fNu5y_LLROmY_dX@DEKFlC|TFLXS43du8=w!htI' );
define( 'NONCE_SALT',       'xjxFuf0z4>~MeD{]%A/$`N-C(=;n+dn(Z<wutbot?=BI~=3=D?tg]Hh1ELAk!;gq' );

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