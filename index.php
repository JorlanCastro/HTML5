<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/html5');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso Work Series - HTML5 do Jeito Certo!</title>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100, 300, 400, 700" rel="stylesheet">
        <link rel="stylesheet" href="css/boot.css"/>
        
        <link rel="shortcut icon" href="img/favicon.png" />
    </head>
    <body>
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo">
                    <a title="Home" href="<?= BASE; ?>">
                        Curso Work Series - HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav">
                    <li><a title="HTML5 Semântico" href="<?= BASE; ?>/html5-semantico">Semântica</a></li>
                    <li><a title="Estilo Produtivo com OOCSS" href="<?= BASE; ?>/estilo-com-oocss">OOCSS</a></li>
                    <li><a title="Formulários com HTML5" href="<?= BASE; ?>/formularios-com-html5">Forms</a></li>
                    <li><a title="Áudio e Vídeo na Web" href="<?= BASE; ?>/audio-e-video">Midia</a></li>
                    <li><a title="Geolocation e HTML Storage" href="<?= BASE; ?>/geolocation-e-storage">API's</a></li>
                    <li><a title="Distribuição com Micro Dados" href="<?= BASE; ?>/micro-dados">Micro Dados</a></li>
                    <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar Curso</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <!--bloco de video-->
        <article class="container">
            <div class="content">
                <header>
                    <hgroup>
                        <h1>Conheça o curso WS HTML5!</h1>
                        <h2>Veja o que o tutor do curso <mark>Robson V. leite</mark> tem a dizer!</h2>
                    </hgroup>
                </header>

                <video src="midias/apresentacao.mp4" controls width="400"></video>

                <aside>
                    <h1>Pronto para <a title="Comprar Curso WS HTML5 Agora!" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
                </aside>

                <div class="clear"></div>
            </div>

            <footer class="bg-gray">
                <section class="content">
                    <h1>Veja Algumas Aulas do Curso WS HTML5!</h1>

                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1>Entenda o HTML5</h1>
                    </article>

                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1>Entenda o HTML5</h1>
                    </article>

                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1>Entenda o HTML5</h1>
                    </article>

                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1>Entenda o HTML5</h1>
                    </article>

                    <div class="clear"></div>
                </section>
            </footer>            
        </article>

        <!--seção relacional-->
        <section class="container">
            <!--container do title-->
            <div class="content">
                <hgroup>
                    <h1>Conheça as tecnologias apresentadas:</h1>
                    <h2>O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</h2>
                </hgroup>
                <div class="clear"></div>
            </div>

            <!--container dos artigos-->
            <div class="container bg-gray">
                <div class="content">
                    <article>
                        <img src="img/tec_semantic.png" alt="HTML5 Semântico" title="Módulo de HTML5 Semântico">
                        <h1>HTML5 Semântico:</h1>
                        <p class="tagline">Aprenda e produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para robôs de busca!</p>
                    </article>

                    <article>
                        <img src="img/tec_drycss.png" alt="CSS produtivo com OOCSS" title="Módulo de CSS produtivo com OOCSS">
                        <h1>CSS produtivo com OOCSS:</h1>
                        <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padronizado e de ágil desenvolvimento!</p>
                    </article>

                    <article>
                        <img src="img/tec_forms.png" alt="Formulários com HTML5" title="Módulo de Formulários com HTML5">
                        <h1>Formulários com HTML5:</h1>
                        <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulário do HTML5!</p>
                    </article>

                    <article>
                        <img src="img/tec_midia.png" alt="Áudio e Vídeo na Web" title="Módulo de Áudio e Vídeo na Web">
                        <h1>Áudio e Vídeo na Web:</h1>
                        <p class="tagline">Nunca foi tão fácil incorporar e controlar mídias na internet. Aprenda a fazer isso de forma fácil!</p>
                    </article>

                    <article>
                        <img src="img/tec_geo.png" alt="Geolocation e HTML5 Storage" title="Módulo de Geolocation e HTML5 Storage">
                        <h1>Geolocation e HTML5 Storage:</h1>
                        <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E ainda armazene dados de navegação apenas com HTML!</p>
                    </article>

                    <article>
                        <img src="img/tec_microdados.png" alt="Distribuição com Micro Dados" title="Módulo de Distribuição com Micro Dados">
                        <h1>Distribuição com Micro Dados:</h1>
                        <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuir conteúdo otimizado de forma extrema!</p>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <!--seção temática-->
        <section class="container">
            <div class="content">
                <div class="ses_title">
                    <h1>Ficha Técnica:</h1>
                    <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5!</p>
                </div>

                <article><h1>Tempo em Aula: <b>23h</b></h1></article>
                <article><h1>Certifica de: <b>230h</b></h1></article>
                <article><h1>Módulos: <b>8</b></h1></article>
                <article><h1>Vídeo Aulas: <b>50</b></h1></article>

                <div class="clear"></div>
            </div>
        </section>

        <!--retomada e converção-->
        <article class="container bg-gray">
            <div class="content">
                <header>
                    <hgroup>
                        <h1>Faça Parte Da Turma WS HTML5, Matrícule-se!</h1>
                        <h2>Começe Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></h2>
                    </hgroup>
                </header>                

                <a title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar WS HTML5!</a>

                <footer>
                    <div>
                        Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
                    </div>
                </footer>

                <div class="clear"></div>
            </div>
        </article>

        <!--content visual-->
        <div class="container">
            <div class="content">
                UpInside Treinamentos. Os melhores e mais completos cursos de desenvolvimento WEB e TI do mercado!
                <div class="clear"></div>
            </div>
        </div>
        <!--CONTEUDO-->


        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>

                <nav class="main_nav">
                    <h1 class="title">Mais sobre o WS HTML5:</h1>
                    <ul>
                        <li><a title="Assita o vídeo de apresentação com Robson V. Leite" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a title="Veja as tecnologias que você vai aprender!" href="#tecnologias">Você vai Aprender</a></li>
                        <li><a title="Mais informações na ficha técnica do curso!" href="#fichatecnica">Ficha Técnica</a></li>
                    </ul>
                </nav>

                <article class="main_social">
                    <h1 class="title">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>

                <article class="main_copy">
                    <h1 class="fontzero">Plataforma UpInside</h1>

                    <p><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upisnide.com.br">www.upinside.com.br</a></p>
                    <p><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p>&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos Os Direitos Reservados!</p>
                </article>

                <div class="clear"></div>
            </section>            
        </footer>
    </body>
</html>
