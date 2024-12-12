<?php
function recursivePalindromeCheck($string, $start = 0, $end = null)
{
    $string = str_replace(" ", "", $string);
    
    if ($end === null) {
        $end = strlen($string) - 1;
    }

    if ($start >= $end) {
        return true;
    }

    if ($string[$start] !== $string[$end]) {
        return false;
    }

    return recursivePalindromeCheck($string, $start + 1, $end - 1);
}

$word1 = 'kajak';
$word2 = 'radar';
$word3 = 'zdravo';
$word4 = 'neli ne si ti senilen';
$word5 = 'Hello welcome to PHP';

echo $word1 . " is " . (recursivePalindromeCheck($word1) ? "a palindrome" : "not a palindrome");
echo "<br/>";
echo $word2 . " is " . (recursivePalindromeCheck($word2) ? "a palindrome" : "not a palindrome");
echo "<br/>";
echo $word3 . " is " . (recursivePalindromeCheck($word3) ? "a palindrome" : "not a palindrome");
echo "<br/>";
echo $word4 . " is " . (recursivePalindromeCheck($word4) ? "a palindrome" : "not a palindrome");
echo "<br/>";
echo $word5 . " is " . (recursivePalindromeCheck($word5) ? "a palindrome" : "not a palindrome");
echo "<br/>";