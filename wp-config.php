<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '123456');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!%x8UfL/_S!&O8Tb`+5IF@0-4v`kCD(c~h/8|lWtf|vKwX8G6*$ `P!k#eoN[^t*');
define('SECURE_AUTH_KEY',  'HIgS]S@Tg8DX-#bgu(+-2! [FZLM`1oeurnn)g,ZdJI$bVwgW2)z2d;O2>$t xaG');
define('LOGGED_IN_KEY',    'ZdCQ:hS$:3yynZB7>|!eqP B1O-Hg|GF[21HG[0LbmZ<t3qng6C KN1a#M*wP/GB');
define('NONCE_KEY',        'tluDPNveUX]o&~1&c{9IflcA.K-hov-#}b@YGYW%{)FP=a=s|63),chDHe_Cg083');
define('AUTH_SALT',        '~GWg@8v^-/7=@:p]~R<NLM@A;^firh %<KF7#@30C0}^lTxA:mct51tj.m>J4i39');
define('SECURE_AUTH_SALT', '|htaAB83I#d$2%h*,ydA{m1T,{DO krG<PI2KC<W?=EnPnmSzw*h|IU*ej&O-L0p');
define('LOGGED_IN_SALT',   '_]UH-M(W*lHTXS6)ev#rC[O]@Zq6MhvJ`2BEvO[]SE</oun-<A+Bx_hy`d1(bOh#');
define('NONCE_SALT',       '#s)0%I,{]7^^*M:RR:ksf8l>gJcZgD<*9C^DPPcZ&DgKn.yQd|+>m|nWeBv~E,Zy');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
