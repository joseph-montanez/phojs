<?php 
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/phojs.php';
$code = <<<'CODE'
<?php
echo 'hello world';
?>
CODE;

$js = new Phojs();
$js->addString('helloWorld', $code);
echo $js->render();
?>