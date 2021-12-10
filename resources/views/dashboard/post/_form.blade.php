@csrf <!-- OBLIGATORIO EN LOS FORMULARIOS PARA EVITAR HACKING NO ETICO -->
@include('dashboard.partials.validation-errors')
<div class="form-group row">
    <label for="publication" class="col-md-4 col-form-label text-md-right">
        {{ __('Publicación') }}</label>

    <div class="col-md-12">
        <input id="publication" type="text" class="form-control
        @error('publication') is-invalid @enderror" name="publication"
        required autocomplete="name" autofocus
        value="{{ old('publication', $post -> publication) }}">
        @error('publication')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group">
    <select class="form-control custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category => $id)
            <option {{ $post ->category_id == $id ? 'selected="selected"':'' }} value="{{ $id }}">
                {{ $category }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="state" id="state">
        <option value="">received</option>
        <option value="">published</option>
        <option value="">unpublished</option>
        <option value="">in_review</option>
    </select>
</div>
<div class="form-group">
    <textarea name="publication_content" class="form-control" id="publication_content"
    cols="30" rows="10">
    {{ old('publication_content', $post -> publication_content) }}
    </textarea>
</div>
<div>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('home') }}" class="btn btn-info">Inicio</a>x
</div>
