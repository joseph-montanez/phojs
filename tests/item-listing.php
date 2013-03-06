<ul>
    <? foreach($items as $item): ?>
    <li class="item<?= $item['sale'] ? ' sale' : ''?>"><?= $item['name'] ?></li>
    <? endforeach ?>
</ul>