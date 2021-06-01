<?php 

class Artigo
{
    public function exibirTodos(): array {
        
        $artigos = [
            [
                'titulo' => 'Hi, I`m vampyrsoda! :)',
            
                'conteudo' => 'Hoje em dia eu sou animador e desenvolvedor e tenho direcionado meus estudos para
                a area de Front-End e Mobile development.',
            
                ///'link' => 'https://www.github.com/vampyrsoda',
                'link' => 'hi-im-vampyrsoda.html',
            ],
            
            [
                'titulo' => 'Welcome to the Dark-Side',
                'conteudo' => 'Conheca alguns projetos ja desenvolvidos! ',
                'link' => 'dark-side.html',
            ],
            
            [
                'titulo' => 'Hack!ng Z0nE',
                'conteudo' => 'C0DE / / / Dicas & Tutorials + + + ',
                'link' => 'hacking-zone.html',
            ],
        ];
        return $artigos;
    }
}
