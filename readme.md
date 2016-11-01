## new basic template folder　/ 新しいテンプレート用のベーシックプロジェクト

wordpress,静的htmlのページに両対応させる独自テンプレート

制作途中です。


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

- 基本的にはpublic内のファイルをFTPでアップロードでサイト更新できる仕様にする。

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

# 2 フォルダ構成

```

template00/
　├ develop/
　├ node_modules/
　├ phptest/
　├ jstest/
　├ public/
　│　├ js/
　│　├ css/
　│　├ img/
　│　└ project/
　│      └ common/
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

------------------------









------------------------
other case /　別の開発ベース

現状下記の内容を組み込むかは後で考える。
this pattern setting divide branch.


# need css framework / foundation

cli command install

```
npm install --global foundation-cli
```

[*](http://qiita.com/kohki-shikata/items/1abe8d79388ab90e3730)

ここにあるサンプルは完全に新しいサイト作成用なので、注意













