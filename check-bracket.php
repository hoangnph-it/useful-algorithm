<?php

$goodString = "()()()()(())";
print('goodString: '.hasMatchedParenthesis($goodString));

$badString = "(()()()(()";
print('   badString: '.hasMatchedParenthesis($badString));

function hasMatchedParenthesis($string) {
    $len = strlen($string);
    $stack = array();
    for ($i = 0; $i < $len; $i++) {
        switch ($string[$i]) {
            case '(': array_push($stack, 0); break;
            case ')': 
                if (array_pop($stack) !== 0)
                    return false;
            break;
            case '[': array_push($stack, 1); break;
            case ']': 
                if (array_pop($stack) !== 1)
                    return false;
            break;
            default: break;
        }
    }
    if (empty($stack)) {
        return 'TRUE';
    }
    else {
        return 'FALSE';
    }
}
?>
