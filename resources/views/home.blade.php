<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    @include('navbar')
    <body>
        <div class="container">
            <div class="mt-5 mb-5">
                <div class="row" id="card_noticia">
                    @include('alerta')
                    @if(!empty($noticias))
                            @foreach ($noticias as $noticia)
                                <div class="col-md-4 col-12">
                                    <div class="card mb-2 text-center" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title overflow-hidden" style="height:75px;"><b>{{ $noticia['titulo'] }}</b></h5>
                                            <p class="card-text overflow-hidden" style="height: 100px;">{{ $noticia['descricao'] }}</p>
                                            <a href="#" class="btn btn-primary">Saiba mais...</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endif
                </div>
            </div>
        </div>
    </body>
    @include('footer')
    @include('script')
</html>
