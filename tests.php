<?php

printf("Welcome to the PHP unicode string test suite\n");
printf("---\n\n");

test_for_unicode('hello my name is');
test_for_unicode('רֵאשִׁ֖ית בָּרָ֣א אֱלֹהִ֑ים the אֵ֥ת');
test_for_unicode('ЯБГДЖЙЯБГДЖЙ');
test_for_unicode('てすとてすとてすとてすとてすとてすと');

function test_for_unicode($str)
{
    printf("string: '%s'\n", $str);
    printf("strlen = %s / mb_strlen = %s\n", strlen($str), mb_strlen($str));

    $is_substr_equal = mb_substr($str, 8, 1) === substr($str, 8, 1);
    printf("mb_substr @ index 8 == substr @ index 8? = %s\n", $is_substr_equal ? 'yes' : 'no');

    $is_index_equal = mb_substr($str, 8, 1) === $str[8];
    printf("mb_substr @ index 8 == index[] @ index 8? = %s\n", $is_index_equal ? 'yes' : 'no');

    printf("---\n");
}
