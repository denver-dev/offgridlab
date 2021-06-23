<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
// 変数の初期化
$clean = array();
$error = array();
// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}
// 文字成型
$clean['tel'] = str_replace(array('-', 'ー', '−', '―', '‐'), '', $clean['tel']);
$clean['tel'] = str_replace(array(" ", "　"), "", $clean['tel']);
$clean['tel'] = mb_convert_kana($clean['tel'], "n");
$clean['email'] = str_replace(array(" ", "　"), "", $clean['email']);
$clean['email'] = mb_convert_kana($clean['email'], "askhc");

if( !empty($clean['btn_confirm'])) {
	$error = validation($clean);

	if( empty($error) ) {

		if(empty($clean['date2'])) {
			$clean['date2'] = "なし";
			$clean['time2'] = "なし";
		}

		if(empty($clean['date3'])) {
			$clean['date3'] = "なし";
			$clean['time3'] = "なし";
		}

		$page_flag = 1;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;		
	}

} elseif( !empty($clean['btn_submit']) ) {
	session_start();
	if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {
		// セッションの削除
		unset($_SESSION['page']);
		$page_flag = 2;
		// 変数とタイムゾーンを初期化
		$header = null;
		$body = null;
		$admin_body = null;
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');
		
		//日本語の使用宣言
		mb_language("ja");
		mb_internal_encoding("UTF-8");
	
		$header = "MIME-Version: 1.0\n";
		$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
		$header .= "From: hipetest@bpoc.co.jp\n";
		$header .= "Reply-To: hipetest@bpoc.co.jp\n";
	
		// 件名を設定
		$auto_reply_subject = 'OFFGRIDLAB';
	
		// 本文を設定
		// $auto_reply_text =  $clean['your_name'] . "様 \n\n";
		$auto_reply_text .= "お問い合わせありがとうございます | 株式会社オフグリッドラボ\n\n●●様\n\nこの度はお問い合わせいただき誠にありがとうございます。以下の通り、お問い合わせを承りました。\n\n";

		// $auto_reply_text .= "お問い合わせ項目 ：" . $clean['inquiry'] . "\n";
		$auto_reply_text .= "会社名 ： " . $clean['company_name'] . "\n";
		$auto_reply_text .= "お名前 ： " . $clean['your_name'] . "\n";
		$auto_reply_text .= "フリガナ： " . $clean['furigana'] . "\n";
		$auto_reply_text .= "電話番号 :" . $clean['tel'] . "\n";
		$auto_reply_text .= "メールアドレス： " . $clean['email'] . "\n";
		$auto_reply_text .= "ホームページ： " . $clean['home'] . "\n";
		$auto_reply_text .= "お問い合わせ内容：" . nl2br($clean['contents']) . "\n\n";
		$auto_reply_text .= "---------------------------- \n\n";
		$auto_reply_text .= "内容を確認の上、弊社担当者より追ってご連絡させていただきます。\n\n尚、お問い合わせの内容によってはお時間をいただく場合がございますのでご了承ください。\n";
		$auto_reply_text .= "■本メールは送信専用メールです。\nご返信頂いてもお答えできませんのでご了承ください。\n";
		$auto_reply_text .= "---------------------------- \n\n";
		
		$auto_reply_text .= "株式会社オフグリッドラボ \nMail：info@offgrid-lab.co.jp\nホームページURL：https://offgrid-lab.co.jp/\n";

		$auto_reply_text .= "---------------------------- \n";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $auto_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 自動返信メール送信
		mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);
	

		// 運営側へ送るメールの件名
		$admin_reply_subject = "OFFGRIDLAB";
	
		// 本文を設定
		$admin_reply_text .= "WEBサイト担当者\n\n下記、問い合わせがありましたので内容をご確認の上、対応をお願いします。\n\n";
		$admin_reply_text .= "＝＝＝＝＝＝＝＝＝＝＝＝＝ \n";
		$admin_reply_text .= "※以下、問合せ項目の反映\n";
		
		// $admin_reply_text = "OFFGRIDLAB \n\n";
		// $admin_reply_text .= "お問い合わせ項目 ：" . $clean['inquiry'] . "\n";
		$admin_reply_text .= "会社名 ： " . $clean['company_name'] . "\n";
		$admin_reply_text .= "お名前 ： " . $clean['your_name'] . "\n";
		$admin_reply_text .= "フリガナ： " . $clean['furigana'] . "\n";
		$admin_reply_text .= "電話番号 :" . $clean['tel'] . "\n";
		$admin_reply_text .= "メールアドレス： " . $clean['email'] . "\n";
		$admin_reply_text .= "ホームページ： " . $clean['home'] . "\n";
		$admin_reply_text .= "お問い合わせ内容：" . nl2br($clean['contents']) . "\n\n";
		$admin_reply_text .= "---------------------------- \n\n";
		$admin_reply_text .= "送信された日時：" . date("Y/m/d D H:i") . "\n";

		// $admin_reply_text .= "内容を確認の上、弊社担当者より追ってご連絡させていただきます。\n\n尚、お問い合わせの内容によってはお時間をいただく場合がございますのでご了承ください。\n";
		// $admin_reply_text .= "■本メールは送信専用メールです。\nご返信頂いてもお答えできませんのでご了承ください。\n";
		// $admin_reply_text .= "---------------------------- \n\n";

		// $admin_reply_text .= "株式会社オフグリッドラボ \nMail：info@offgrid-lab.co.jp\nホームページURL：https://offgrid-lab.co.jp/\n";

		$admin_reply_text .= "---------------------------- \n";
		
		// $admin_reply_text .= "OFFGRIDLAB";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $admin_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 管理者へメール送信
		mb_send_mail('markariel.maata@bpoc.co.jp', $admin_reply_subject, $body, $header);
		
	} else {
		$page_flag = 0;
	}	
}
function validation($data) {
	$error = array();
	// 氏名のバリデーション
	if( empty($data['your_name']) ) {
		$error['your_name'] = "「お名前」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['your_name']) ) {
		$error['your_name'] = "20文字以内で入力してください。";
	}

	// 氏名のバリデーション
	if( empty($data['company_name']) ) {
		$error['company_name'] = "「会社名」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['company_name']) ) {
		$error['company_name'] = "20文字以内で入力してください。";
	}

	// ふりがな検証
	if( empty($data['furigana']) ) {
		$error['furigana'] = "「フリガナ」は入力必須項目です。";
	} 
	elseif( 20 < mb_strlen($data['furigana']) ) {
		$error['furigana'] = "20文字以内で入力してください。";
	}


	// メールアドレスのバリデーション//
	if( empty($data['email']) ) {
		$error['email'] = "「メールアドレス」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error['email'] = "正しい形式で入力してください。";
	}

	// 電話番号のバリデーション
	if( empty($data['tel']) ) {
		$error['tel'] = "「電話番号」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel']) ) {
		$error['tel'] = "正しい形式で入力してください。";
	}

	// 氏名のバリデーション
	if( empty($data['contents']) ) {
		$error['contents'] = "「お問い合わせ内容」は入力必須項目です。";
	} elseif( 300 < mb_strlen($data['contents']) ) {
		$error['contents'] = "20文字以内で入力してください。";
	}

	// 日付の検証
	// if( empty($data['inquiry']) ) {
	// 	$error['inquiry'] = "この項目は必須です。";
	// }

	if( empty($data['agreement']) ) {
		$error['agreement'] = "「個人情報の取り扱いについて」に同意します は入力必須項目です。 ";
	}
	
	// if( empty($data['time1']) ) {
	// 	$error['time1'] = "この項目は必須です。";
	// }

	return $error;
}
?>

<?php if( $page_flag === 1 ):
	// 確認画面読み込み
require_once(dirname(__FILE__)."/inc/confirm.php");
 ?>
<?php elseif( $page_flag === 2 ):
	// サンクスページへリダイレクト
// $url = "https://www.e-vision.co.jp/lp/inc/thanks.php";
// header('Location: ' . $url, true, 301);
require_once(dirname(__FILE__)."/inc/thanks.html");
exit;
 ?>
<?php else:
	// フォーム画面読み込み
require_once(dirname(__FILE__)."/inc/contact.php");
 ?>
<?php endif; ?>