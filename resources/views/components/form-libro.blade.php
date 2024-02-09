<form class="requires-validation" id="registra-libro" method="POST"
action="/registra" novalidate>

<div class="col-md-12">
    <input class="form-control" type="text" name="name"
        placeholder="Nome del Libro" required>

</div>

<div class="col-md-12">
    <input class="form-control" type="text" name="email"
        placeholder="Autore" required>
</div>

<div class="col-md-12">
    <input class="form-control" type="file" accept="image/*" name="email"
        placeholder="Immagine" required>
</div>







<div class="form-button mt-3">
    <button id="submit" type="submit"
        class="btn btn-primary">Registra</button>
</div>
</form>