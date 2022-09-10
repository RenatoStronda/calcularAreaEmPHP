<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resultado </title>
</head>
<body>
    <!-- Atividade Numéro 1-->
    <p> Largura: <?php echo $_GET["num1"];?> </p>
    <p> Comprimento: <?php echo $_GET["num2"];?> </p>
    <?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $area = $num1 * $num2;
    ?>
    <p> <?php echo "Resultado Da Area É:  $area";?> </p> 
    <hr>
    <!-- Atividade Numéro 2-->
    <p> Largura: <?php echo $_GET["num1"];?> </p>
    <p> Comprimento: <?php echo $_GET["num2"];?> </p>
    <?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $area = $num1 * $num2;
    ?>
    <p> <?php echo "Resultado Do Perímetro É:  $area";?> </p>
    <p> Largura: <?php echo $_GET["num3"];?> </p>
    <p> Comprimento: <?php echo $_GET["num4"];?> </p>
    <?php
     $num3 = $_GET["num3"];
     $num4 = $_GET["num4"];
     $area2 = ($num3 * 2) + ($num4 * 2);

    ?>
    <p> <?php echo "Resultado Da Area É:  $area2";?> </p>
    <hr>
    <!-- Atividade Numéro 3-->
    <p> Preço Do Produto: <?php echo $_GET["num5"];?> </p>
    <?php
     $num5 = $_GET["num5"];
     $area3 = $num5 - ($num5 * 0.05);

    ?>
    <p> <?php echo "Resultado Do Produto É:  $area3";?> </p>
    <hr>
    <!-- Atividade Numéro 4-->
    <p> Preço Do Produto: <?php echo $_GET["num6"];?> </p>
    <p> Preço Do Desconto: <?php echo $_GET["num7"];?> </p>
    <?php
     $num6 = $_GET["num6"];
     $num7 = $_GET["num7"];
     $area4 = $num6 - ($num6 * ($num7 / 100));

    ?>
    <p> <?php echo "Resultado Do Produto É:  $area4";?> </p>
    <hr>
    <!-- Atividade Numéro 5-->
    <p> Preço Do Produto: <?php echo $_GET["num8"];?> </p>
    <p> Preço Do Desconto: <?php echo $_GET["num9"];?> </p>
    <?php
     $num8 = $_GET["num8"];
     $num9 = $_GET["num9"];
     $area5 = 100 - (($num9 * 100) / $num8);

    ?>
    <p> <?php echo "Resultado Do Produto É:  $area5%";?> </p>
    <hr>

</body>
</html>