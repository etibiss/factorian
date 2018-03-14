<?php
echo $view ->inc('elements/header.php');

$a = new Area('Contenu');
$a->enableGridContainer();
$a->display($c);

echo $view ->inc('elements/footer.php');
?>
