<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://ihor-moroz.github.io/',
	'homepage_url' => 'https://ihor-moroz.github.io/index.html',
	'icon' => '',
	'version' => '14.0.3.1',
	'sitename' => 'APS',
	'public_folder' => '',
	'salt' => 'jo30ht3unxugizzy2tu8fp1ex91j97fvfcfapn6',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


$imSettings['admin'] = array(
	'notification_public_key' => 'c74f1a9416e809df',
	'notification_private_key' => '2105eacd7dd3f2e7',
	'enable_manager_notifications' => false,
	'theme' => 'ice'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Уважаемый клиент,<br /><br />Благодарим Вас за покупку. Здесь Вы найдете информацию о заказе.<br /><br />Ниже приведен список заказанных товаров, информация о размере платежа и выбранных Вами способах оплаты и доставки.',
	'email_closing' => 'Обращайтесь к нам за дополнительной информацией.<br /><br />С уважением, сотрудники отдела продаж.',
	'email_digital_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список ссылок для загрузки заказанных товаров:',
	'email_digital_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_physical_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список заказанных товаров:',
	'email_physical_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'ihor.moroz.ukr@gmail.com',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v14 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="rgba(4, 91, 221, 1)" style="background-color: rgba(4, 91, 221, 1);">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Comfortaa\'; color: rgba(0, 0, 0, 1); background-color: rgba(255, 255, 255, 1); text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: transparent; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: rgba(255, 255, 255, 1)" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Comfortaa\'; color: rgba(255, 255, 255, 1); background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = 'rgba(255, 255, 255, 1)';
$ImMailer->bodyBackgroundEven = 'rgba(255, 255, 255, 1)';
$ImMailer->bodyBackgroundOdd = 'rgba(240, 240, 240, 1)';
$ImMailer->bodyBackgroundBorder = 'rgba(205, 205, 205, 1)';
$ImMailer->bodyTextColorOdd = 'rgba(255, 255, 255, 1)';
$ImMailer->bodySeparatorBorderColor = 'rgba(0, 0, 0, 1)';
$ImMailer->emailBackground = 'rgba(4, 91, 221, 1)';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Comfortaa\'; color: rgba(0, 0, 0, 1); background-color: rgba(255, 255, 255, 1); text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Comfortaa;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Проверочное слово:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php