<?php
    require_once "cabecario.php";
?>

<form action="exerc10resp.php" method="post">
    <div class="row">
        <div class="col">
            <label>Cálculo IMC, digite seu peso e altura</label>
            <label for="valor" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor" id="valor">
            <label for="valor1" class="form-label"> Informe o valor></label>
            <input type="number" class="form-control" name="valor1" id="valor1">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once"rodape.php";