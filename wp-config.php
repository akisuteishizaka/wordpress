<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_USER', 'wordpress_user');

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
define('AUTH_KEY',         'LrO8s~p6GDRhK6PnUu2]W(MU3~E<F1P}GNiyB#M F5)3*c{E|NB.9+}{:|}a}Y[Z');
define('SECURE_AUTH_KEY',  'KH+s$Fh1(Qc8 lsOM_V*%ryP*EC7?>8*(h,uYP}yS+oh%=`L#=l:oM@OF-v:U#fj');
define('LOGGED_IN_KEY',    'Z)Ft M_9,k{th^hz:3!Ly]mGFzFb|wE05QQ*.Xbi7-#C.SPEFDz~H,?aw-c/D|^c');
define('NONCE_KEY',        'yv.7#Fso,~%,2nS_]sca>z7(F%%tIu)&a(!nV-?cJL: 1GEQ2_8o1DyMAqOV1zEJ');
define('AUTH_SALT',        'v3Thy.P=,|aZp1XIVj:9F1kmvEhS|``CZV`S|OQJd%|}9AD27imhF[^H?T YBEV#');
define('SECURE_AUTH_SALT', 'w9aQjgYL (aDsY%iY}SNF,WlV[q(Z+|L4+f7u<E-|!kw,~)%$m5T+R$swU?E0+o,');
define('LOGGED_IN_SALT',   'Sfm9-:ET3IRM2%NOb0K8J,U[]RJ*E WU3P{PjM`x&(,*zteO vKE6hTvr|P75|/e');
define('NONCE_SALT',       '0qcsJN2u+baq/_q#H!es2HD*lam+YtMsR{b1!d+80VXf]jDIBkxD4z:rNiq?+.BN');

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
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
