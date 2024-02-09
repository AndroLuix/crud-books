<form class="requires-validation" id="registra-libro" method="POST"
action="/create" enctype="multipart/form-data" >
@csrf
<div class="col-md-12">
    <input class="form-control" type="text" name="nome"
        placeholder="Nome del Libro" required>

</div>

<div class="col-md-12">
    <input class="form-control" type="text" name="autore"
        placeholder="Autore" required>
</div>

<div class="col-md-12">
    <input class="form-control" type="file" accept="image/*" name="img"
        placeholder="Immagine" >
</div>







<div class="form-button mt-3">
    <button id="submit" type="submit"
        class="btn btn-primary">Registra</button>
</div>
</form>