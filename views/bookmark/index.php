
<h1>书签列表</h1>
<ul>
<?php foreach ($list as $v): ?>
    <li>
       
        <a href="<?= $v->url ?>" target="_blank"> 
        	<?= $v->title ?>
        </a>
        <?= $v->tag ?>
    </li>
    
<?php endforeach; ?>
</ul>


