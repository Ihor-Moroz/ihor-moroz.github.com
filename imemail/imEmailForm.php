<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Ім\'я', @$_POST['imObjectForm_3_1'], '', false);
	$form->setField('Електронна пошта', @$_POST['imObjectForm_3_2'], '', false);
	$form->setField('Дата', @$_POST['imObjectForm_3_3'], '', false);
	$form->setField('Відгук', @$_POST['imObjectForm_3_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'A818D95B280EF9F588C4C5BD10C47D0B' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('ihorukr1@mail.ru', 'ihorukr1@mail.ru', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file