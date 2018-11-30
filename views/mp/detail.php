<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>文章详情</h1>
<ul>
<?php foreach ($infos as $info): ?>
    <li>
        <?= $info->name ?>
        <?= date("Y-m-d",$info->datetime)?>
        <?= $info->title ?>
        <a href="<?= $info->content_url ?>" target="_blank">查看</a> 
    </li>
<?php endforeach; ?>
</ul>
