<?php
$a = array('1','2','1','2','23','0','2');
var_dump($a);

foreach ($a as $key => $value) {
		$buscar = (array_keys($a, $value));
        $contador = count($buscar);
        echo "$value se repite $contador veces <br>";
}

?>

<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($contador);?>;
    
    // Mostramos los valores del array
    for(var i=0;i<arrayJS.length;i++)
    {
        document.write("<br>"+arrayJS[i]);
    }
</script>