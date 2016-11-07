## new basic template folder　/ 新しいテンプレート用のベーシックプロジェクト

wordpress,静的htmlのページに両対応させる独自テンプレートです。

- CSSフレームワークにfoundation6.0(sass,include管理)を使用
- jqueryは3.0に対応

VisualStudioCodeを使っての開発を強くオススメしています。


## バージョン・開発情報
- 2016.10.4 pre release 

    一般的な開発はここで、終了、ここからはプライベートリポジトリで展開

- 2016.10.3 under development / 開発中


# 要求される環境 /　windowsの人へ

- エディタ: vscode ver1.7
- 事前インストール： (win) node,composer,php(xampp等)

    詳しくは 1-2 開発の為の環境導入を参照

------------------------

# Index
- 1 How / 使い方

- 2 フォルダ構成

- 3 etc setting files / その他設定ファイル

- 4 開発方法

- 付録


------------------------
------------------------

# 1 How　/ 使い方

## 1-1 FTPでのアップロードについて

- 基本的にpublicフォルダ自体をwordpressテンプレートフォルダにアップロードでwordpressテンプレートとして
動作します。 publicフォルダをFTPでアップロードしてください。

！注意： wordpressにテンプレートをあげる場合は.httacessはあげないようにしてください。


--------------------

## 1-2 開発の為の環境導入

必要なアプリケーションがインストールされてるか確認

### 必須 

- エディタ: vscode ver1.7 [windows vs code download](http://code.visualstudio.com/B?utm_expid=101350005-31.YsqwCVJESWmc4UCMDLsNRw.1&utm_referrer=https%3A%2F%2Fwww.google.co.jp%2F)

- node [Node.js / npmをインストールする](http://qiita.com/taipon_rock/items/9001ae194571feb63a5e)

- composer [Composerインストール手順](http://qiita.com/mikoski01/items/266469535e860312145d)



### 必要に応じて、 PHP開発用

- php(xampp等), phpunit等の設定,xdebugの設定

--------------------

## 1-3 開発のはじめにやる事

VS code の 「 表示->統合ターミナル 」 を開いて下記のコマンドを入力する。

```
１ まずこれ

npm install

    ※ 念のために gulpをグローバルインストールする
    npm install -g gulp --save-dev

２ 次にこれ

composer update

```

それぞれ/node_modulesフォルダとpublic/project/common
フォルダが作られます。

これで開発に必要なライブラリがそれぞれ別途導入されます。


## 1-4 独自にファイルを追加（場合に応じて）

※ publicフォルダの中にignoreconfig.phpを追加して定数設定をしてください。

プライベートリポジトリではこのgitignoreを外してチーム共有でも問題ないと思います。

------------------------
------------------------
# 2 WORDPRESS テンプレートファイルとしての特徴

cssのセッティング
jsのセッティング

------------------------

# 2 フォルダ構成

```

ディレクトリー

template00/
　├ .vscode/
　├ develop/
　├ jstest/
　├ node_modules/
　├ phptest/
　├ public/
　│　├ contents_html/ --＊wordpressでは不要
　│　├ css/
　│　├ js/
　│　├ img/
　│　└ project/
　│      ├ common/
　│      └ dev/ 
　│　　　　
　└ etc setting files / その他設定ファイル

ファイル

    .htaccess --＊wordpressでは不要
    
    setup.php -- 重要ファイル
    routing.php -- 重要ファイル

    ignoreconfig.php -- 重要、設定ファイル

    上記以外のファイルはwordpress用のテンプレートファイル

```

- .vscode

    vscode用の設定ファイル

- develop　開発用

    scss用ファイルやes6ファイルをここで作成
    コンバートした物がpublicに書き出される

- nodemodules

    npm library.

- phptest

    php test用ファイル

- jstest

    es6のままの状態でテストできるようにしてあります。(mocha&espower-babel etc)

- publicフォルダが公開用

    css,img,jsはそのまま

    propjectは開発ソース
        
    commonは開発の上での必要となるライブラリなどをcomposerでインストール


- その他設定ファイルは開発、バージョン管理に必要なファイル群

    composer.json,lock , 等


------------------------

# 3 その他設定ファイル / etc setting files 

    3-1のgitのみは、人づてで講習を受ける事。

    開発に必要なファイル。最悪これらのツールを使わなくても更新は可能だが、推奨しない。

## 3-1 git系統

.git/ 【!注意】 バージョン管理用の隠しフォルダ。

.gitignore　クラウド上にあげないようにする為の設定ファイル

gitについてよく知ろう。-> 概念説明は知ってる人に聞く 

[git入門](http://qiita.com/kimioka0/items/be7d22d283d08570150e)


## 3-2 vs code設定
launch.json

## 3-3 node,npm設定ファイル

package.json
gulpfile.js
.babelrc

es6 test方法

[es6 test with mocha,espower-babel](http://akabeko.me/blog/2015/05/es6-unit-test/)

コマンド
```
npm test
```

## 3-4 php,composer設定ファイル
composer.json


## 3-5 pupunit
phpunit.xml

run
```
public/project/common/bin/phpunit

```


------------------------

# 4 開発方法

## 4-1 

## 4-2 css

develop/scss/mystyle.scss

これをscss記法で編集して行う。 publicに反映させるには
ターミナルから

```
gulp sass

```
で、自動的に圧縮、展開されたファイルがpublic/css の中に入る

foundation を使用しているので、必要に応じて @includeして機能を使うようにする。

[Foundation for site](http://foundation.zurb.com/sites/docs/)

詳しくは 下記の A-1 need css framework / foundationを参照

## 4-3 js

develop/js/***.es6.js

というファイルにて es6の記法で開発する。
コマンド

```
gulp build
```

で、public/js/フォルダにコンバートされたファイルが展開される。

上記の foundationか、jquery3.0に依存した開発


## 4-4 リソースの管理

- 画像 [images-tinypng](https://tinypng.com/)


------------------------










------------------------------------------------
------------------------------------------------
------------------------

# supplements / 付録


other case /　別の開発ベース

現状下記の内容を組み込むかは後で考える。
this pattern setting divide branch.




# A-1 need css framework / foundation
[npm install foundation](http://foundation.zurb.com/sites/docs/sass.html)

```
npm install foundation-sites --save
npm install gulp-load-plugins --save
ついでに
npm install motion-ui --save
```

gulp.file
```
var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('develop/scss/*.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('public/css'));
});

```

コマンド
```
gulp sass
```

で変換


## A-2 完全に新規作成で静的サイトをいじる場合 founation supplement 

参考に残しておくだけ.ここは無視で

cli command install
```
npm install --global foundation-cli
```
[*](http://qiita.com/kohki-shikata/items/1abe8d79388ab90e3730)
ここにあるサンプルは完全に新しいサイト作成用なので、注意












