# tk_mix_wordpress web flame ver 1.0

    静的ページ、ワードプレスの両方に対応した、テンプレート、フレームワークです。
    ワードプレスのテンプレート先頭に下記をインクルードすれば、独自ルールで
    静的ページも使えるようになります。

## reference　/　ドキュメント

## HOW Used / 使い方

各テンプレートの先頭に以下を導入するだけ

```````````````
<?php
/**
 * Onepress functions
 *
 * @package WordPress
 * @subpackage Onepress
 *
 * tk_mix_wordpress web flame ver 1.0
 */
include(dirname(__FILE__)."/setup.php");
?>
```````````````

## method / 使えるようになるメソッド

- スマホ、PC画面の判定
<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>






