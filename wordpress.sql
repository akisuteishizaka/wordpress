----wordpress用のDB
* 数値
- int
- double
 
* 文字列
- char
- varchar
- text
 
* 日付
- date
- datetime
 
* それ以外
- enum

◆ユーザーの確認
select Host, User, Password from mysql.user;

◆作業用ユーザーを作成
-rootユーザーでログインする。
mysql -u root -p

◆rootユーザーからDBを作成する。
create database wordpress;


grant all on wordpress.* to dbuser@localhost identified by '123456';