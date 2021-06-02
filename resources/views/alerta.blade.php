@if (isset($typeMessage))
    @if ($typeMessage == 'sucesso')
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    @if ($typeMessage == 'erro')
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
@endif
