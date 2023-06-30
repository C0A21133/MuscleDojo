<!DOCTYPE html>
<head>
    <title>{$trainingData["training_name"]} | マッスル道場</title>
</head>
<body>
    <h1>{$trainingData["training_name"]}</h1>
    <h3>レベル</h3>
    {$trainingData["training_level"]}
    <h3>鍛えられる部位</h3>
    {foreach $parts as $part}
        {$part},
    {/foreach} <br>
    <h3>目的</h3>
    {foreach $targets as $target}
        {$target},
    {/foreach} <br>
    <h3>解説</h3>
    {$trainingData["training_desc"]}
    <br>
    <h3>注意事項</h3>
    {$trainingData["training_point"]}
    <br>

</body>