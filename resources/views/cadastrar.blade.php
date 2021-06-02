<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
@include('navbar')
<body>
<div class="container">
    <div class="mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2> Cadastro de Notícias </h2>
                @include('alerta')
                <form method="post" action="{{ route('criarNoticia') }}">
                    {{ csrf_field()  }}
                    <div class="form-group mt-2 col-md-12">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" name="titulo" placeholder="Coloque um título da notícia aqui..">
                        </div>
                    </div>
                    <div class="form-group mt-2 col-md-12">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Categoria" name="id_categoria">
                                <option selected> Escolha uma categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id  }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3 col-md-12">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" placeholder="Escreva a notícia aqui.." rows="3" name="descricao"></textarea>
                    </div>
                    <div class="form-group mt-4 col-md-12">
                        <button type="submit" class="btn btn-primary">Criar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
@include('footer')
@include('script')
</html>
