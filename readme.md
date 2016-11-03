## new basic template folder　/ 新しいテンプレート用のベーシックプロジェクト

wordpress,静的htmlのページに両対応させる独自テンプレートです。

- CSSフレームワークにfoundationを使用
- jqueryは3.0に対応

## バージョン・開発情報

2016.10.3 under development / 開発中


# 要求される環境

エディタ: vscode

事前インストール： (win) node,composer,xampp

------------------------

# Index
- 1 How / 使い方
- 2 フォルダ構成
- 3 etc setting files / その他設定ファイル

- 4 開発方法
- 5 

------------------------

# 1 How　/ 使い方

- 基本的にpublicフォルダ自体をwordpressテンプレートフォルダにアップロードでwordpressテンプレートとして
動作します。 publicフォルダをFTPでアップロードしてください。

！注意： wordpressにテンプレートをあげる場合は.httacessはあげないようにしてください。

- 必要なアプリケーションがインストールされてるか確認

- 表示->統合ターミナルより、

```

npm install
composer update
実行

```

それぞれ/node_modulesフォルダとpublic/project/common
フォルダが作られます。

------------------------
# 2 WORDPRESS テンプレートファイルとしての特徴

cssのセッティング
jsのセッティング

------------------------

# 2 フォルダ構成

```

template00/
　├ develop/
　├ jstest/
　├ node_modules/
　├ phptest/
　├ public/
　│　├ contents_html/ --＊後で実装
　│　├ css/
　│　├ js/
　│　├ img/
　│　└ project/
　│      ├ common/
　│      └ dev/ 
　│　　　　
　└ etc setting files / その他設定ファイル

```

- develop

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

# 3 etc setting files / その他設定ファイル

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

表示->統合ターミナル
- composer update
- npm install

## 4-1 css

[Foundation for site](http://foundation.zurb.com/sites/docs/)

詳しくは 下記の A-1 need css framework / foundationを参照



------------------------









------------------------
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













