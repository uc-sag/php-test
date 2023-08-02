<html>
<body>
  {section name = rows loop = $data}
 <tr class="{cycle values ="odd,even"}">
   <td> {$data[rows]}</td>
 </tr>
  {/section}

<br>

  {counter start = 0 skip = 3}<br>
  {counter}<br>
  {counter}<br>
  {counter}<br>
  {counter}<br>
  {counter}<br>
  
</body>
</html>
