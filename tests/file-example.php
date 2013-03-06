<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/phojs.php';

$items = array(
    array(
        'sale' => false,
        'name' => 'Item One'
    ),
    array(
        'sale' => true,
        'name' => 'Item Two'
    )
);

$js = new Phojs();
$js->addFile(__DIR__ . '/item-listing.php');
echo $js->render();
?>
<script type="text/javascript">
var items = <?php echo json_encode($items) ?>;
document.write(
    phojs['item-listing'](items)
);
</script>