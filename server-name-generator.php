<?php

$adjectives = [
    'unsightly',
    'mushy',
    'hairy',
    'sweaty',
    'colossal',
    'teeny-tiny',
    'purring',
    'eager',
    'repulsive',
    'hard'
];

$nouns = [
    'alpaca',
    'potato',
    'flanker',
    'doohickey',
    'noggin',
    'rumpus',
    'kermudgin',
    'manscape',
    'stick-figures',
    'llamamoramma'
];

public function randomServerName() {
    return $serverName = array_rand($adjectives) + array_rand($nouns);
};

?>

<html>
<head>
    <title>Random Server Name</title>
</head>
<body>

    <h1>Server Name Generator</h1>
    <h2><?php echo $serverName; ?></h2>

</body>
</html>