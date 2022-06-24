# 99fed

## How to Use:
```shell
docker network create fedcommon
```


## Settings
OSのhostsファイルに
```
127.0.0.1   idp1.hospital-1.example.com
127.0.0.1   idp1.hospital-2.example.com
127.0.0.1   ds1.example.org
127.0.0.1   ds2.example.org
127.0.0.1   idp2.card-1.example.net
127.0.0.1   dp1.receipt.example.edu
127.0.0.1   dp2.phr.example.edu
127.0.0.1   receipt.example.edu
127.0.0.1   phr.example.edu
```
を記入する。

## URLs:

### DS-1
ディスカバリーサービス。自分の所属する病院を探す。
1. ds1.example.org

### IdP-1
医療者がログインする際にアクセスする。病院1と病院2を定義。
1. idp1.hospital-1.example.com
2. idp1.hospital-2.example.com

### DS-2
ディスカバリーサービス。クレカ会社などの認証機関を選択する。
1. ds2.example.org

### IdP-2
* ID（例えばクレカ番号）を入力する。ここではクレカ会社を1つ定義。
* クレカ番号は番号だけで会社が特定できる

1. idp2.card-1.example.net

### DP
* データプロバイダ。IdP-2で取得した被保険者番号を受け取り、URLを返す。
* 実際は、DPの後ろにPHRやレセプト閲覧サービスなどがある。

1. dp.receipt.example.edu
2. dp.phr.example.edu

### SP
データプロバイダの後ろにあるサービス
1. receipt.example.edu
2. phr.example.edu
