## Phojs

Phojs is a Php to JavaScript transcoder. This allows you to reuse your templates in Php to also be used in Javascript. Not everything transcode yet, i.e classes do not transcode yet, when I have the time I will add those. Some stuff will never work, i.e exit in a function, I should have a better list of what does not work.

### How to Install

You will need composer to install the library which is not that painful.

	curl -s https://getcomposer.org/installer | php
	# Create composer.json
	{
		"require": {
			"joseph-montanez/phojs": "0.1"
		}
	}
	php composer.phar install

	# Create a php file test.php
	<?php 
	require 'vendor/autoload.php';
	$code = <<<'CODE'
	<?php
	echo 'hello world';
	?>
	CODE;

	$js = new Phojs();
	$js->addString('helloWorld', $code);
	echo $js->render();
	?>

	php test.php
	# Output
	<script type="text/javascript">
	var js_templates = [];

	js_templates['helloWorld'] = function (data) {
		var js_rs = [];
		js_rs.push('hello world');

		return js_rs.join('');
	};
	</script>