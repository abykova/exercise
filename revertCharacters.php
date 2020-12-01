function revertCharacters($str)
{
    $index = strlen($str) - 1;
    $revertCharacters = '';

    while ($index >= 0) {
        $currentChar = $str[$index];
        $revertCharacters = "{$revertCharacters}{$currentChar}";
        $index = $index - 1;
    }

    return $revertCharacters;
}

echo revertCharacters('Game Of Thrones');
