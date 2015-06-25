<!-- 
テンプレート名が自動でタイトルに表示されるが、指定もできる。
2.5で $title_for_layoutは非推奨になったので、タイトルの指定は下記のように書く。
参考：http://book.cakephp.org/2.0/ja/appendices/2-5-migration-guide.html#view
-->
<?php
// CSS
// $this->Html->css('about.css', null, array('inline' => false));
// JavaScript
// $this->Html->script('about.js', array('inline' => false));
// Meta
$this->Html->meta('keywords', 'キーワード1,キーワード2', array('inline' => false));
$this->Html->meta('description', 'ディスクリプション', array('inline' => false));
$this->assign('title', 'このサイトについて');
 ?>

<h2>About</h2>

<p>静的ページはテンプレートで作成できる。らしい。</p>