# root
solo hay que copiar los archivos puzzle.php y queens.php a una carpeta dentro de la carpeta www del servidor php y llamar  por medio de la url al archivo puzzle.php

Referencias.
Codigo:
< ?php

/*************************************************************************
*
* This algorithm solves the 8 queens problem using backtracking.
* Please try with N<=25 * * * *************************************************************************/ class Queens { var $size; var $arr; var $sol; function Queens($n = 8) { $this->size = $n;
$this->arr = array();
$this->sol = 0;
// Inicialiate array;
for($i=0; $i<$n; $i++) { $this->arr[$i] = 0;
}
}

function isSolution($n) {
for ($i = 0; $i < $n; $i++) { if ($this->arr[$i] == $this->arr[$n] ||
($this->arr[$i] - $this->arr[$n]) == ($n - $i) ||
($this->arr[$n] - $this->arr[$i]) == ($n - $i)) return false;
}
return true;
}

function PrintQueens() {
echo("solution #".(++$this->sol)."\n");
for ($i = 0; $i < $this->size; $i++) {
for ($j = 0; $j < $this->size; $j++) {
if ($this->arr[$i] == $j) echo("& ");
else echo(". ");
}
echo("\n");
}
echo("\n");
}


// backtracking Algorithm
function run($n = 0) {
if ($n == $this->size) $this->PrintQueens();
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

? >

De la pagina:
http://netastasis.blogspot.com/2011/01/8-queens-problema-de-las-8-reinas-php.html
