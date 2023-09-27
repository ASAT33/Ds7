<?php
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
}
?>

<!-- me da error la en la linea 6 ya que el final indica que no puede ser sobreescrito  -->
