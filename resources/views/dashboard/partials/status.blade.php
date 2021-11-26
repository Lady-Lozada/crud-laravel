<!-- MANEJO DE ESTADOS DE SESION GENERALES -->
@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif
