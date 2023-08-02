<html>
<body>
{for $start = 0 to $len-1}
    {$curr = $data[$start]}
    {foreach from = $curr item = foo}
      {$foo}
    {/foreach}
{/for}



</body>
</html>
