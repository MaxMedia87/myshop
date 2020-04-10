<h1>Заголовок главной страницы</h1>
<p><?= $name; ?></p>
<p><?= $age; ?></p>
<?php debug($products); ?>

<?php foreach($posts as $post): ?>
<h3><?= $post->title; ?></h3>
<?php endforeach; ?>
