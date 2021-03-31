<?php
function add($a, $b)
{
  $c = $a + $b;
  return $c;
}
function mult($a, $b)
{
  $c = $a * $b;
  return $c;
}

function divide($a, $b)
{
  $c = $a / $b;
  return $c;
}
function Greet()
{
  $resp = array(
    "source_ip" => "192.168.122.98",
    "table_name" => "main"
  );
  $resp = json_encode($resp);
  return $resp;
}
function newGreet(){
  echo $_COOKIE["msg"]."<br>";
  echo "Hello world";
}

?>

<script>
  var phpadd = <?php echo add(1, 2); ?> //call the php add function
  console.log(phpadd)
  var phpmult = <?php echo mult(1, 2); ?> //call the php mult function
  console.log(phpmult)
  var phpdivide = <?php echo divide(1, 2); ?> //call the php divide function
  console.log(phpdivide)
  var greetMessage = <?php echo Greet(); ?> 
  console.log(greetMessage)
  document.cookie="msg=Message from JavaScript"
</script>
<?php newGreet();?>