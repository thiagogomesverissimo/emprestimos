<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Livro;
use App\Models\Responsabilidade;

use League\Csv\Reader;
use League\Csv\Statement;

class ImportLivro extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importlivros {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa Livros';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = $this->argument('path');
        $reader = Reader::createFromPath($path, 'r');
        
        // Importar os novos
        // colunas: localizacao, complemento_localizacao, volume
        $reader->setHeaderOffset(0);
        $records = $reader->getRecords();

        foreach($records as $row){

            $livro = new Livro;

            $livro->localizacao = trim($row['localizacao']);
            $livro->complemento_localizacao = trim($row['complemento_localizacao']);

            $livro->titulo = trim($row['titulo']);
            $livro->editora = trim($row['editora']);
            $livro->local = trim($row['local']);
            $livro->ano = trim($row['ano']);


            $livro->edicao = (int) filter_var($row['edicao'], FILTER_SANITIZE_NUMBER_INT);
            $livro->volume = (int) filter_var($row['volume'], FILTER_SANITIZE_NUMBER_INT);

            $livro->save();
            
            if (!empty(trim($row['autor']))){
                $responsabilidade = Responsabilidade::where('nome',trim($row['autor']))->first();
                if(!$responsabilidade) {
                    $responsabilidade = new Responsabilidade;
                    $responsabilidade->nome = trim($row['autor']);
                    $responsabilidade->save();
                }
    
                $livro->responsabilidades()->attach($responsabilidade->id, ['tipo' => 'Autor']);
                $livro->save();
            }

        } 

        return 0;
    }
}
