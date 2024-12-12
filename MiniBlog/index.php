<?php
$posts = file_get_contents('posts.json');
$posts = json_decode($posts, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>

<h4 class='filter'>Filtered by tag:
    <?php if(isset($_GET['tag'])) { echo "<span class='tag'>" . $_GET['tag'] . "</span>"; } ?>
    <a href='index.php'>Show all posts</a>
</h4>

    <div class="post-container">
        <?php
        $key = 'your_secret_key_32bytes_length_here';
        $iv = '1234567890abcdef'; 
        $cipherMethod = 'aes-256-cbc';
        foreach ($posts as $post) {
            if (isset($_GET['tag']) && !in_array($_GET['tag'], $post['tags'])) {
                continue; 
            }
            $id = openssl_encrypt($post['id'], $cipherMethod, $key, 0, $iv );
            $id = urlencode($id);
            echo "
                <div class='post'>
                    <h3><a href='post.php?post={$id}'>{$post['title']}</a></h3>
                    <p>{$post['abstract']}</p>
            ";

            foreach ($post['tags'] as $tag) {
                echo "<a href='index.php?tag={$tag}' class='tag'>#{$tag}</a> ";
            }

            echo "
                </div>
            ";
        }
        ?>
    
    </div>
    <div class="filter">
    <a href='index.html?tag=AI' class='tag'>#health</a>
        <a href='index.html?tag=AI' class='tag'>#business</a>
        <a href='index.html?tag=AI' class='tag'>#tech</a>
        <a href='index.html?tag=AI' class='tag'>#technology</a>
    </div>
    <?php
    if(!isset($_COOKIE['cookie-consent']))
    {
        echo "
            <div class='cookie_consent'>This website is using cookies. <a href='cookie_consent.php'>Accept</a> </div>
            ";
    }
    ?>
</body>

</html>