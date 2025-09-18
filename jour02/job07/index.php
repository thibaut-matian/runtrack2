<?php
<?php
// $outerSpace = '';
// $innerSpace = '';
$LeftChar = '/';
$RightChar = '\\';
$Space = '  ';   // entités avec ';'
$Height = 8;

// init (nécessaires car variables commentées)
$innerSpace = '';
$foot = '';
$CountA = 0;
$CountB = 0;

for ($CountA; $CountA < $Height; $CountA++) {
    // (re)crée outerSpace à chaque tour
    $outerSpace = '';
    for ($countOuterSpaces = 0; $countOuterSpaces < ($Height - 1 - $CountA); $countOuterSpaces++) {
        $outerSpace .= $Space;
    }

    echo $outerSpace . " /" . $innerSpace . "\\" . "<br />";
    $innerSpace .= $Space . $Space;
}
for ($CountB; $CountB < $Height; $CountB++) {
    $foot .= '---';
}
echo $foot . "<br />";
?>



</body>
</html>