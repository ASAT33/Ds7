<?php
final class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
// Aquí da igual si se declara el método como
// final o no
final public function moreTesting() {
echo "ClaseBase::moreTesting() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
}
?>

<!-- no puedo hacer que extienda de la clasebase ya que esta definido como un final  -->