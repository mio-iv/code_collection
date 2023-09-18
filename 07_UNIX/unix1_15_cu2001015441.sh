#!/bin/sh
#===========================================
#ファイル名：unix1_15_cu2001015441.sh
#項目：第15回レポート1
#概要：ログファイルをバックアップし、リモートホストに保管する。
#入力なし
#出力「YYYYMMDD_log..tar.bz2」ファイル
#作成者：飯田菜摘
#作成日：20220131
#更新履歴：
#============================================
#パラメータ設定
#リモートホスト名
rhostname=goorm
#リモートホストユーザ
ruser=var1user
#リモートホストパスワード
rpasswd=var1user
#受信アカウント情報
mailuser=var1user
mailsubject="Notice of log backup v1"
#送信メッセージの初期化
mailmsg=""
#-------------------------------------------
#[tar]コマンドで[var/log]のバックアップファイルを作成
#[/var]ディレクトリに移動
cd /var
#当日の年月日情報を取得。結果を表示
cdate=`date +"%Y%m%d%H%M%S"`
echo "Today is ${cdate}."
#ログディレクトリをバックアップし、結果を表示
backpath="~/send_backup/${cdate}_log.tar.bz2"
tar -jcf ~/send_backup/${cdate}_log.tar.bz2 log
echo "A log backup file is created. Please confirm the following list."
ls -l -u ~/send_backup/${cdate}*
#============================================
#[scp]コマンドでバックアップファイルをリモートホストに転送
#[~/send_backup]ディレクトリに移動
cd ~/send_backup
#バックアップファイルをリモートホストに転送し。結果を[backup.log]に保存
`scp ${cdate}_log.tar.bz2 ${ruser}@${rhostname}:~/receive_backup/` && `echo "${cdate}_lpg.tar.bz2 is transported 100%" > ~/send_backup/backup.log`
#-------------------------------------------
#[mail]コマンドで。処理結果をメールで送信する
#送信情報を確認
sendmsg=`grep -i -o -n "100%" ~/send_backup/backup.log`
if [ "${sendmsg}" != "" ]; then
	#送信が[100%]であれば、バックアップが成功したメールを送信
	mailmsg="The log backup file transfar was successful. The file name is ${cdate}_log.tar.bz2."
else
	#送信率が[100%]でない場合は、予期せぬエラーが発生したメールを送信
	mailmsg="An unexpected errpr has occurred."
fi
#実行結果をメールで送信
echo "${cdate}, ${mailmsg}" | mail -s "${cdate}_${mailsubject}" "${mailuser}"
echo "An email is sent to ${mailuser}. The file is ${cdate}_log.tar.bz2."
#end of unix_15_cu2001015441.sh

