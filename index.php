https://phpocean.com/tutorials/back-end/create-a-simple-news-site-with-php-and-mysql-using-pdo/11

<html lang="es">
<head>
	<meta charset="utf-8">
<title>Welcome to news channel</title>
    <link rel="stylesheet" type="text/css" href="design/style.css">
</head>
<body>



<div class="news"> 

<?php if ( $news && !empty($news) ) :?>

<?php foreach ($news as $key => $article) :?>
<h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
<p><?= stripslashes($article->news_short_description) ?></p>
<span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
<?php endforeach?>

<?php endif?>
 
</div> 
