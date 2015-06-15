# CakePHPの練習
2.6.4安定版をコピーして、ひとまずチュートリアル的な何かを作ってみる。
## 手順メモ
1. CakePHPを落とす。
2. ローカル環境でひとまずそのまま動かしてみる（今回はMAMPで）。
3. Security.saltとSecurity.cipherSeedのエラーを解消する（APP/Config/core.phpの該当箇所に生成ツールを使ってそれぞれコピペ）。
4. tempディレクトリが書き込みできないというエラーがあれば、権限を設定する。
5. DBに接続する。
		0. MAMPのMySQLをコマンドラインで使いやすいように、MAMPのコマンド群にパスを通しておく。
		1. ターミナルでmysqlコマンドでデータベースを作って、ユーザとパスワードを設定。
			$ mysql -u root -p
			mysql> create database database_name;
			mysql> grant all on database_name.* to userid@localhost identified by 'password';
		2. /app/Config/database.php.default を複製して、database.phpにリネーム。上で設定したDB名、ユーザー、パスワードに設定する。
		3. ブラウザで確認すると、CakePHPはDBに接続できるというメッセージに変わっているはず。
6. MySQLでテーブルを作成。
7. ModelにPost.phpを作成。
8. Controllerに、対応するPostsController.phpを作る。
9. View/Posts/にindex.ctpを作る。
10. Controlloerに機能を追加、その機能に対応するテンプレートをViewにそれぞれ作っていく。



# CakePHP

[![Latest Stable Version](https://poser.pugx.org/cakephp/cakephp/v/stable.svg)](https://packagist.org/packages/cakephp/cakephp)
[![License](https://poser.pugx.org/cakephp/cakephp/license.svg)](https://packagist.org/packages/cakephp/cakephp)
[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)
[![Code consistency](http://squizlabs.github.io/PHP_CodeSniffer/analysis/cakephp/cakephp/grade.svg)](http://squizlabs.github.io/PHP_CodeSniffer/analysis/cakephp/cakephp/)

[![CakePHP](http://cakephp.org/img/cake-logo.png)](http://www.cakephp.org)

CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.
Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.


## Some Handy Links

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[CookBook](http://book.cakephp.org) - THE CakePHP user documentation; start learning here!

[API](http://api.cakephp.org) - A reference to CakePHP's classes

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[Community Center](http://community.cakephp.org) - A source for everything community related

[Training](http://training.cakephp.org) - Join a live session and get skilled with the framework

[CakeFest](http://cakefest.org) - Don't miss our annual CakePHP conference

[Cake Software Foundation](http://cakefoundation.org) - Promoting development related to CakePHP


## Get Support!

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake

[Google Group](https://groups.google.com/group/cake-php) - Community mailing list and forum

[GitHub Issues](https://github.com/cakephp/cakephp/issues) - Got issues? Please tell us!

[Roadmaps](https://github.com/cakephp/cakephp/wiki#roadmaps) - Want to contribute? Get involved!


## Contributing

[CONTRIBUTING.md](CONTRIBUTING.md) - Quick pointers for contributing to the CakePHP project

[CookBook "Contributing" Section (2.x)](http://book.cakephp.org/2.0/en/contributing.html) [(3.0)](http://book.cakephp.org/3.0/en/contributing.html) - Version-specific details about contributing to the project
