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
## トップページ→アイテム詳細画面
[![Image from Gyazo](https://i.gyazo.com/d80f07da742c234df316d57abfb400ad.gif)](https://gyazo.com/d80f07da742c234df316d57abfb400ad)
## アイテム詳細画面
[![Image from Gyazo](https://i.gyazo.com/ebded24a8dfd27d14772d220bb56d3f9.jpg)](https://gyazo.com/ebded24a8dfd27d14772d220bb56d3f9)
## 詳細画面→ユーザー投稿一覧
[![Image from Gyazo](https://i.gyazo.com/86062241ff7b63d36a32c558603361b6.gif)](https://gyazo.com/86062241ff7b63d36a32c558603361b6)
## 検索機能
[![Image from Gyazo](https://i.gyazo.com/af94fb49c4a677930ea84c4a1b88483d.gif)](https://gyazo.com/af94fb49c4a677930ea84c4a1b88483d)
## マイページ
[![Image from Gyazo](https://i.gyazo.com/b43273904c28ae0c03bdd54c083e9b28.png)](https://gyazo.com/b43273904c28ae0c03bdd54c083e9b28)

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
・開発期間：9/16〜9/28(12日間)<br>
・1日あたりの平均作業時間：10時間<br>
合計：120時間程度<br>

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
