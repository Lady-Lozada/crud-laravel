@csrf <!-- OBLIGATORIO EN LOS FORMULARIOS PARA EVITAR HACKING NO ETICO -->
@include('dashboard.partials.validation-errors')
<div class="form-group row">
    <label for="publication_name" class="col-md-2 col-fomr-label text-md-rigth">
        {{ __('Nombre noticia') }}
    </label>
    <div class="col-md-10">
        <input type="text" class="form-control @error('publication_name') is-valid @enderror"
        name="publication_name" id="publication_name" required autocomplete="publication_name"
        value="{{ old('publication_name', $post->publication_name) }}">
        @error('publication_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication"
        placeholder="Publicación" value="{{ old('publication', $post->publication) }}">
</div>

<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category_name => $id)
            <option {{ $post ->category_id == $id ? 'selected="selected"':''}} value="{{ $id }}">
                {{ category_name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revisión</option>
    </select>
</div>

<div class="form-group">
    <textarea name="publication_content" class="form-control" id="publication_content"
    cols="30" rows="10" placeholder="Contenido de la publicación">
    {{ old('content_publication', $post->content_publication) }}</textarea>
</div>

<div>
    <a href="" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
