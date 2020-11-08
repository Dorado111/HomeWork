<?php
$newsData = $data[$_GET['news_id']];
?>

<h1><?=$newsData['title']?></h1>
<p><?=$newsData['content']?></p>
