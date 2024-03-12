<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Inputs</title>
</head>
<body>

    <form action="serverpractica.php" method="post" enctype="multipart/form-data"> 
    
    <!-- //inputs simple -->
    <label for="idpais" >Pais</label>
    <input type="text" name="elnombre" id="idpais">

    <!-- //inputs array [] y arrays asociativo[key]-->
    <label for="idcap">Capital</label>
    <input type="text" name="info_pais[capital]">

    <label for="idcant">Cant Estados</label>
    <input type="number" name="info_pais[num_estados]">

    <label for="idcap">Comida Regional</label>
    <input type="text" name="info_pais[comida]">

    <!-- input checkbox -->
    <br>
    <label for="idpreg">Deporte mas practicados</label>
    <br>
    <label for="idbeis">Beisbol</label>
    <input type="checkbox" name="deporte1" id="idbeis" value="Beisbol">
    <br>
    <label for="idfut">Futbol</label>
    <input type="checkbox" name="deporte2" id="idfut">

    <!-- input radios -->
    <br>
    <label for="idcercanos">Pais Vecinos</label>
    <br>
    <label for="idcolombia">Colombia</label>
    <input type="radio" name="veci" value="Colombia" id="idcolombia" >
    <br>
    <label for="idmexico">Mexico</label>
    <input type="radio" name="veci" id="idmexico" value="Mexico">
    <br>

    <!-- input files -->
    <label for="idgaleria">Galeria</label><br>
    <input type="file" multiple name="img[]" id="idgaleria" >
    

    <button type="submit"> Enviar datos </button>
    
</body>
</html>