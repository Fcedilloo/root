<?php

/*************************************************************************
*
* This algorithm solves the 8 queens problem using backtracking.
* Please try with N<=25 * * * *************************************************************************/
class Queens {
var $size;
var $arr;
var $sol;
function Queens($n = 20) {
$valor = $_GET['tablero'];
$n = $valor;
$this->size = $valor;
$this->arr = array();
$this->sol = 0;

// Inicialiate array;
for($i=0; $i<$n; $i++) { $this->arr[$i] = 0;
}
}

function isSolution($n) {
for ($i = 0; $i < $n; $i++) {
if ($this->arr[$i] == $this->arr[$n] ||
($this->arr[$i] - $this->arr[$n]) == ($n - $i) ||
($this->arr[$n] - $this->arr[$i]) == ($n - $i))
return false;
}
return true;
}
function PrintQueens() {
echo "<table border = 1px bgcolor = '#B533FF' align = 'center'>";
echo "<tr width = 40px>";
echo "<td width = 100px style = 'color:#ffffff'>";
echo("solution: ".(++$this->sol)."\n");
echo "</td>";
echo"</tr>";
echo "</table>";
echo "<table border = 1px bgcolor = '#000000' align = 'center'>";
for ($i = 0; $i < $this->size; $i++) {
echo "<tr>";
for ($j = 0; $j < $this->size; $j++) {
if ($this->arr[$i] == $j){
echo "<td bgcolor = '#ffffff' width = 30px align = 'center'>";
echo ("&");
echo "</td>";
}
else{
echo "<td style = 'color:#ffffff' width = 30px align = 'center'>";
echo(".");
echo "</td>";
}
}
echo("\n");
}
echo("\n");
}


// backtracking Algorithm
function run($n = 0) {
if ($n == $this->size)
$this->PrintQueens();
else {
for ($i = 0; $i < $this->size; $i++) {
$this->arr[$n] = $i;
if ($this->isSolution($n)) $this->run($n+1);
}
}
}

}

$myprogram = new Queens(8);
$myprogram->run();
?>
</pre>
</body>
</html>
