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
define('AUTH_KEY',         '2SrLW4l4>expZxOy!aFM[xaps|T1$Ds&4?}*DZn?)W-U$#Bk=kI9N9LFrhTY#$[,');
define('SECURE_AUTH_KEY',  ' O:%8jwy#tCxAxtu;|.1vFHr`@mwpuW=VYgWN/D#*8-&(9|dptMf5t,tg$wt(E/(');
define('LOGGED_IN_KEY',    '~,hV{FsHF%fJCO;/?M?73zknhZdZ8(@Wcr1TM-_xn{KxIy(Fjt=(_n8vB<%+:/bJ');
define('NONCE_KEY',        'ML;zmHT|Tm(7bh[>N)oe]9Azf|-5sQ3a4(%ZrUoXbB%OMt:KJN2rlNF;7e m@~5D');
define('AUTH_SALT',        '+f1C55&sfl|e6q1A q@UX+`:oQ|V|-9&QaUN1CP|p_b+v+{[0KEn&*F,~@^Na^iX');
define('SECURE_AUTH_SALT', 'l(cxB5-oK%Yp=ICxD=YHgzCq+23exL`_:)eR} #];~Q}#E/[r&5nj_U&J~b}S4KU');
define('LOGGED_IN_SALT',   ' fo:mv:Z>*S-#i~FKZw(QB~RU+CaE5WHI{-/6+`(}qf2mA( sfm Kd!&td6A|,bb');
define('NONCE_SALT',       'ye?<84MoTI/D|Bj$W=-!tq8g}-v~:$|fr%(f)qp${BIO^:26]lvEzu8!EBEN-~yH');
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
