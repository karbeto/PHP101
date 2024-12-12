<?php
$posts = file_get_contents('posts.json');
$posts = json_decode($posts, true);

$key = 'your_secret_key_32bytes_length_here';
$iv = '1234567890abcdef'; 
$cipherMethod = 'aes-256-cbc';
$id = urldecode(openssl_decrypt($_GET['post'], 'aes-256-cbc', $key, 0, $iv));

$specificPost = null;
foreach ($posts as $post) {
    if ($post['id'] == $id) {
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
    <title><?=$specificPost['title'];?></title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class='post'>
        <h3> <?=$specificPost['title'];?></h3>
        <p><b>Abstract:</b> <?=$specificPost['abstract'];?></p>
        <div><b>Author:</b> <?=$specificPost['author'];?></div>
        <?php
            if(!isset($_COOKIE['cookie-consent']))
            {
                echo "
                    <p><b>Content:</b> <span class='text-red'> Please first accept the cookies before reading the story content </span></p>
                    ";
            }else{
                echo "
                    <p><b>Content:</b> {$specificPost['content']};  </p>
                ";
            }
        ?>

        <?php
        foreach ($specificPost['tags'] as $tag) {
            echo "<a href='index.php?tag={$tag}' class='tag'>#{$tag}</a> ";
        }
        ?>

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
