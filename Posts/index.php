<?php
$posts = file_get_contents('posts.json');
$posts = json_decode($posts, true);
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

    <h4 class='filter'>Filtered by tag: <span class='tag'>#AI</span> <a href='index.html'>Show all posts</a></h4>

    <div class="post-container">
        <?php
        foreach ($posts as $post) {
            echo "
                    <div class='post'>
                        <h3><a href='post.php?post={$post['id']}'>{$post['title']}</a></h3>
                        <p>{$post['abstract']}</p>
                        
                        <a href='index.html?tag=AI' class='tag'>#sport</a>
                </div>
                ";
        }
        ?>

        <a href='index.html?tag=AI' class='tag'>#health</a>
        <a href='index.html?tag=AI' class='tag'>#business</a>
        <a href='index.html?tag=AI' class='tag'>#tech</a>
        <a href='index.html?tag=AI' class='tag'>#technology</a>

    </div>
    </div>

    <div class='cookie_consent text-center text-white bg-primary p-2 rounded-3'>This website is using cookies. <a
            href='cookie_consent.php'>Accept</a> </div>
</body>

</html>