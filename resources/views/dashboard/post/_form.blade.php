@csrf <!-- OBLIGATORIO EN LOS FORMULARIOS PARA EVITAR HACKING NO ETICO -->
@include('dashboard.partials.validation-errors')

<div class="form-group row">
    <label for="publication" class="col-md-4 col-form-label text-md-right">
        {{ __('Publicación') }}</label>

    <div class="col-md-6">
        <input id="publication" type="text" class="form-control @error('publication') is-invalid @enderror" name="publication" value="{{ old('publication') }}" required autocomplete="name" autofocus>

        @error('publication')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<!-- <div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication"
        placeholder="Publicación">
</div>

<div class="form-group">
    <textarea name="publication_content" class="form-control" id="publication_content"
    cols="30" rows="10"></textarea>
</div>

<div>
    <a href="" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div> -->
