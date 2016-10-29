# tk_mix_wordpress web flame ver 1.0

    静的ページ、ワードプレスの両方に対応した、テンプレート、フレームワークです。


## reference　/　ドキュメント

## HOW Used / 使い方

各テンプレートの先頭に以下を導入するだけ

```````````````
<?php
/**
* tk_mix_wordpress web flame ver 1.0
*/
require_once($_SERVER['DOCUMENT_ROOT']."/project/setup.php");
?>
```````````````

## method / 使えるようになるメソッド

- スマホ、PC画面の判定
<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>





## 内部用メソッド

- wordpressの中かどうかを確かめる
<?php
/**
* wordpress内かどうかをチェック
*/
Tk::CheckWP(); // true and false
?>



## 依存ライブラリ


