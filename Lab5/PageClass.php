<?php

class Page {
	private $title;
	private $content;
	private $year;
	private $author;

	function __construct($title, $year, $author) {
		$this->title = $title;
		$this->year = $year;
		$this->author = $author;
	}

	public function setContent($content) {
		$this->setHeader();
		$this->page .= $content;
		$this->setFooter();
	}

	private function setHeader() {
		$this->page .=
		'<html>
			<head>
				<title>' . $this->title . '</title>
			</head>
			<body>
				<h1>' . $this->title . '</h1>
		';
	}

	private function setFooter() {
		$this->page .=
		'<footer>
			<p>'  . ' Copyright © ' . $this->year . ' ' . ucwords($this->author) . '.</p>
			<p>' . ' All rights reserved' . '.</p>
		</footer>
		</body>
		</html>';
	}

	public function show() {
		echo $this->page;
	}
}

?>
