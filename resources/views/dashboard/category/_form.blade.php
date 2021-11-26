@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group mb-3">
    <input class="form-control" type="text" name="category" id="category"
    placeholder="Nombre de la Categoría">
</div>
<div class="form-group mb-3">
    <textarea class="form-control" name="description_category" id="description_category"
    cols="30" rows="10" placeholder="Descripción de la Categoría"></textarea>
</div>
<div class="mb-3">
    <a href="" class="btn btn-danger btn-sm">Cancelar</a>
    <button type="submit" class="btn btn-info btn-sm">Guardar</button>
</div>
