# kusa-hub

## 概要


index: http://localhost
phpmyadmin:http://localhost:8080/
mailhog: http://localhost:8025/

## 内容

TODO アプリ

## 特徴

タスクを完了すると、githubみたいに草が生える。

## イメージ

![IMG_1958](https://user-images.githubusercontent.com/46878156/210256946-29f3028a-b994-47b1-9ac7-f5212b59d24d.png)

## テーブル

### users table (Laravelのデフォルトテーブルに準拠)

### tasks table
* id int A_I PK
* user_id int 
* title varchar(128)
* body varchar(256)
* create_at(dateTime)
* finish_at(dateTime)
* delete_at(dateTime)

### done tasks table タスクがdoneされたら、記録される。
* id int A_I PK
* user_id int
* task_id
* date(datetime)
* create_at(dateTime)
* delete_at(dateTime)

### sum done tasks table
* id int A_I PK
* user_id int
* date(datetime)
* sum_done_tasks int その日に何個対応(done)したか。
* create_at(dateTime)
* delete_at(dateTime)

## メモ

**githubカレンダーについて。**

1. userは0時までに完了ボタンをおすと、done tasks tableに記録される。
2. 0時になったらcron(Laravelのタスクスケジュール)にて、集計する。
3. 集計結果をgithubカレンダーに表示（草生やす）


**Laravel**
- var 9
- livewireを利用してみる。
