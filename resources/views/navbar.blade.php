<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="/">Dev News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-15">
                    <li class="nav-item">
                        <a class="nav-link" href="/cadastrar">CADASTRAR NOTICIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">EXIBIR NOTICIAS</a>
                    </li>
                </ul>
                <form>
                    <input onkeyup="searchTitulo(this)" class="form-control border-radius" type="text" placeholder="Pesquisa Título" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>

<script>
    function searchTitulo (text) {
        console.log(text.value);
        let dados = {
            "_token": "{{ csrf_token() }}",
            titulo: text.value
        };
        $.ajax({
            url: '/search',
            dataType: 'json',
            type: 'POST',
            data: dados,
            success: function (data){
               let html = '';
               console.log(data);
               $("#card_noticia").html('');
               data.forEach(function (item) {
                   html += `<div class="col-md-4 col-12">
                                    <div class="card mb-2 text-center" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title overflow-hidden" title="` + item.titulo + `" style="height:75px;"><b> ` + item.titulo +`</b></h5>
                                            <p class="card-text overflow-hidden border-noticia" style="height: 100px;"><a id="hrefNoticia" class="text-decoration" href="#" style="color: grey;">` + item.descricao + `</a> </p>
                                        </div>
                                    </div>
                                </div>`;
               });
                $("#card_noticia").append(html);
            }
        });
    }
</script>
<style>
    .mr-15 {
        margin-right: 15px!important;
    }

    .border-radius {
        border: none;
        border-radius: 15px;
    }

    #hrefNoticia:hover {
        color: red!important;
    }
</style>
