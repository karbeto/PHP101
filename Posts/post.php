<?php
$posts = file_get_contents('posts.json');
$posts = json_decode($posts, true);

$specificPost = null;
foreach ($posts as $post) {
    if ($post['id'] == $_GET['post']) {
        $specificPost = $post;
        break; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class='post'>
        <?php if ($specificPost): ?>
            <h3> <?=$specificPost['title'];?></h3>
            <p><b>Abstract:</b> <?=$specificPost['abstract'];?></p>
            <div><b>Author:</b> <?=$specificPost['author'];?></div>
            <p><b>Content:</b> <?=$specificPost['content'];?></p>
            <p><a href='index.html?tag=sport' class='tag'>#sport</a></p>
        <?php else: ?>
            <p>Post not found.</p>
        <?php endif; ?>
    </div>

    <div class='cookie_consent'>This website is using cookies. <a href='cookie_consent.php'>Accept</a> </div>
</body>

</html>
