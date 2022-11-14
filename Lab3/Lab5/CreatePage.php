<?php
	include 'PageClass.php';

	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$year = $_POST['year'];

	$page = new Page($title, $year, $author);
	$page->setContent($content);
	echo $page->show();
?>
