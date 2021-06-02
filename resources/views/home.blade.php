<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    @include('navbar')
    <body>
        <div class="container">
            <div class="mt-5 mb-5">

                <div class="row mb-5">

                    <div class="col-md-12 text-center">
                        <h1><b>Dev News</b></h1>
                        <h2>Procurando o que? O Dev News ajuda você!</h2>
                    </div>

                </div>

                <div class="row" id="card_noticia">
                    @include('alerta')
                    @if(!empty($noticias))
                            @foreach ($noticias as $noticia)
                                <div class="col-md-4 col-12">
                                    <div class="card mb-2 text-center" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title overflow-hidden" title="{{ $noticia['titulo'] }}" style="height:75px;"><b>{{ $noticia['titulo'] }}</b></h5>
                                            <p class="card-text overflow-hidden border-noticia" style="height: 100px;"><a id="hrefNoticia" class="text-decoration" href="#" style="color: grey;">{{ $noticia['descricao'] }}</a> </p>
                                            <!--<a href="#" class="btn btn-primary">Saiba mais...</a>-->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endif
                </div>
            </div>
        </div>
    </body>
    <style>
        .border-noticia {
            border: none;
            border-left: 5px solid red;
            padding: 10px;
        }

        #hrefNoticia:hover {
            color: red!important;
        }
    </style>
    @include('footer')
    @include('script')
</html>
