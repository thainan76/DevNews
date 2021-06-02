<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('noticia')->insert([
            array(
                'titulo' => 'Gabriel pode jogar contra o Atlético-GO',
                'descricao' => 'O volante Gabriel está recuperado das dores musculares que o vetaram de estar em campo na estreia do Campeonato Brasileiro, no último domingo, e foi relacionado pelo técnico Sylvinho para o jogo de amanhã (2)',
                'id_categoria' => 1
            ),
            array(
                'titulo' => 'Saiu! Conheça a lista dos participantes confirmados no Ilha Record',
                'descricao' => 'O elenco do novo programa de Sabrina Sato conta como nomes clássicos de reality shows, como Lucas Selfie (A Fazenda 12), Valesca Popozuda (A Fazenda 4), Dinei (A Fazenda 4), Any Borges (De Férias Com o Ex), Antonela (BBB 4) e Pyong Lee (BBB 20)',
                'id_categoria' => 2
            ),
            array(
                'titulo' => 'Morte de arquiteto em SP é registrada como suicídio, mas amigos pedem investigação por homicídio',
                'descricao' => 'Para compartilhar esse conteúdo, por favor utilize o link [LINK] ou as ferramentas oferecidas na página. Textos, fotos, artes e vídeos da Folha estão protegidos pela legislação brasileira sobre direito autoral. Não reproduza o conteúdo do jornal em qualquer meio de comunicação, eletrônico ou impresso, sem autorização da Folhapress (pesquisa@folhapress.com.br). As regras têm como objetivo proteger o investimento que a Folha faz na qualidade de seu jornalismo. Se precisa copiar trecho de texto da Folha para uso privado, por favor logue-se como assinante ou cadastrado.',
                'id_categoria' => 6
            ),
            array(
                'titulo' => 'Portugal inaugura cabo de fibra ótica de R$ 1 bi para ligação ultrarrápida entre Europa e Brasil',
                'descricao' => 'Para compartilhar esse conteúdo, por favor utilize o link ou as ferramentas oferecidas na página. Textos, fotos, artes e vídeos da Folha estão protegidos pela legislação brasileira sobre direito autoral. Não reproduza o conteúdo do jornal em qualquer meio de comunicação, eletrônico ou impresso, sem autorização da Folhapress (pesquisa@folhapress.com.br). As regras têm como objetivo proteger o investimento que a Folha faz na qualidade de seu jornalismo. Se precisa copiar trecho de texto da Folha para uso privado, por favor logue-se como assinante ou cadastrado.',
                'id_categoria' => 4
            ),
            array(
                'titulo' => 'Vice de Doria confirma pré-candidatura ao governo de São Paulo em 2022',
                'descricao' => 'Filiado ao PSDB desde o último 14 de maio, o vice-governador paulista, Rodrigo Garcia, anunciou hoje que é pré-candidato ao Palácio dos Bandeirantes em 2022 e defendeu a realização de prévias caso outro tucano também se apresente para disputar o cargo',
                'id_categoria' => 7
            ),
            array(
                'titulo' => 'Debilitado, Chumbo surpreende equipe e pede para ser eliminado de No Limite',
                'descricao' => 'Lucas Chumbo pegou todos os colegas da Tribo Carcará de surpresa e pediu para ser eliminado de No Limite 5. Debilitado, ele foi diagnosticado com gastrite e pediu para que a equipe votasse nele na noite desta terça-feira (1º) ',
                'id_categoria' => 5
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
