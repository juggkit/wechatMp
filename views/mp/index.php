<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>公众号列表</h1>
<ul>
<?php foreach ($list as $v): ?>
    <li>
       
        <a href="<?=$baseUrl?>/index.php?r=mp/detail&name=<?= $v->name ?>" target="_blank"> 
        	<?= $v->name ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>


