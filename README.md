# ◇アプリ名
Item Search

# ◇概要
・便利な魅力的なアイテム・ガジェットと見つかります。<br>
・様々な人の便利な使い方を知れます。<br>
・ユーザー登録ができます。<br>
・オススメのアイテム・ガジェットを紹介できます。<br>

# ◇本番環境						
□URL<br>
http://3.113.185.168/<br>
□ID/Pass<br>
ID: uot0705<br>
Pass: 7777<br>
□テスト用アカウント<br>
メールアドレス: sabusukunokanri.demoaka@gmail.com<br>
パスワード: demo1234<br>

# ◇制作背景
便利で魅力的なアイテム・ガジェットを知れます。<br>
現在世の中には様々な数え切れない程の、便利なアイテムがあります。<br>
その為、自分に合うアイテムを見つけること、知ることは難しいです。<br>
そこでItem Searchを作成しました<br>
Item Searchでは商品の「画像とオススメポイント」が一覧になっており、気になるアイテムをすぐ見つけられます<br>
アイテムの詳細にはいると、商品の「魅力や利用シーン」が紹介されています。<br>

						
# ◇DEMO
## トップページ
[![Image from Gyazo](https://i.gyazo.com/6190b8695139c4a6305881b1bb7462e1.gif)](https://gyazo.com/6190b8695139c4a6305881b1bb7462e1)
## ユーザー新規登録
[![Image from Gyazo](https://i.gyazo.com/69a15091d097a937cadcf74ded2b3e1e.png)](https://gyazo.com/69a15091d097a937cadcf74ded2b3e1e)
## ユーザーページ
[![Image from Gyazo](https://i.gyazo.com/0fac265dd149084f75805663500ac564.gif)](https://gyazo.com/0fac265dd149084f75805663500ac564)
## ユーザーページ（メモ機能）
[![Image from Gyazo](https://i.gyazo.com/fb28cbf6e8c52a36957b6873ca305696.gif)](https://gyazo.com/fb28cbf6e8c52a36957b6873ca305696)
## サブスク登録
[![Image from Gyazo](https://i.gyazo.com/de2cdd7246cefe25befe02e7447cb6f9.gif)](https://gyazo.com/de2cdd7246cefe25befe02e7447cb6f9)
## 【メール】新規登録・お知らせ
□新規登録
[![Image from Gyazo](https://i.gyazo.com/c71a29fb4d407bf2c2c47a9fb7aa2ef0.png)](https://gyazo.com/c71a29fb4d407bf2c2c47a9fb7aa2ef0)
□お知らせ
[![Image from Gyazo](https://i.gyazo.com/5a0f5726629eff0d524ccfcca095d38e.png)](https://gyazo.com/5a0f5726629eff0d524ccfcca095d38e)

# ◇工夫したポイント
①ユーザーが、視覚的にすぐに気になる情報（画像と商品のオススメポイント）を一覧にしました。<br>
`②シンプルなデザイン`<br>
シンプルにすることで、機能的にユーザーが迷うことなく使用できるようにしました。<br> 

（その他）<br>
・アイテム検索機能<br>
・ユーザーごとの投稿一覧表示<br>

# ◇使用技術
□開発環境<br>
PHP/Laravel/JavaScript/docker(Laradock)/Github/AWS/Visual Studio Code<br>
□開発期間と平均作業時間<br>
・開発期間：9/16〜9/29(13日間)<br>
・1日あたりの平均作業時間：10時間<br>
合計：130時間程度<br>

# ◇課題や今後実装したい機能						
・写真複数枚の投稿<br>
アイテムの利用イメージ向上<br>

# ◇DB設計												
## usersテーブル

| Column             | Type   | Options     |
| ------------------ | ------ | ----------- |
| email              | string | null: false, unique: true |
| password           | string | null: false |
| name               | string | null: false |


### Association
- has_many :items

## itemsテーブル

| Column               | Type       | Options                        |
| ---------------------| ---------- | ------------------------------ |
| name                 | string     | null: false                    |
| word                 | string     | null: false                    |
| situation            | integer    | null: false                    |
| merit                | string     | null: false                    |
| detail               | text       | null: false                    |
| image                | string     | null: false                    |
| user                 | references | null: false, foreign_key:true  |

### Association
- belongs_to :user
