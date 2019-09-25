<!doctype>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="Projeto-03">
    <meta name="keywords" content="portifolio,projeto,empresa">
    <meta name="author" content="Deyvisson Henrique">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Projeto 03</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Logo</div>
            <nav class="desktop-menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">serviços</a></li>
                    <li><a href="#">sobre</a></li>
                    <li><a href="#">contato</a></li>
                </ul>
            </nav><!--Menu-Desktop-->
            <nav class="mobile-menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">serviços</a></li>
                    <li><a href="#">sobre</a></li>
                    <li><a href="#">contato</a></li>
                </ul>
            </nav><!--Menu-Mobile-->

            <div class="clear"></div><!--Clear-->

            <div class="chamada1">
                <h2>Sistemas Próprios<br>
                    Para Empresas Autênticas</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex augue. Nulla a tempor felis. In nec augue non tellus scelerisque eleifend et vel mauris.
                </p>
            </div><!--chamada1-->
        </div><!--container-->
    </header>

    <section class="sessao1">
        <div class="container">
            <div class="texto-sessao1">
                <h2>Desenvolvemos Sistemas Únicos</h2>
                <p>Lorem Ipsum sílor domor amet</p>
                <ul>
                    <li>Sites</li>
                    <li>Lojas Virtuais</li>
                    <li>Sistemas</li>
                </ul>
                <div class="clear"></div>
                <div class="btn-texto">Entre em contato</div>
            </div><!--texto-sessão1-->
            <div class="device-sessao1"></div><!--device-img-->
            <div class="clear"></div>
        </div><!--container-->
    </section><!--sessão1-->
    <section class="sessao2">
        <div class="container">
            <div class="texto-sessao2">
                <h2>Desenvolvido por pessoas e para pessoas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien. Ut tempus pulvinar ante, at euismod orci commodo suscipit. Nunc ut viverra dui. Ut efficitur cursus diam a volutpat. Sed sagittis pharetra dolor, ac mollis sapien condimentum vitae. Ut in interdum tortor.
                </p>
            </div>
            <img src="imagens/pessoas.jpg">
        </div><!--container-->
    </section><!--sessão2-->

    <section class="sessao3">
            <div class="sessao3-left">
                <div class="wraper-sessao3-left">
                    <h2>Nosso Time</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien. Ut tempus pulvinar ante, at euismod orci commodo suscipit. Nunc ut viverra dui.</p>
                </div><!--wraper-sessao3-->
            </div><!--sessao3-left-->

            <div class="sessao3-right">
                    <div class="wraper-sessao3-right">
                        <div class="sobre-autor">
                            <h2>Deyvisson Henrique</h2>
                            <div class="img-autor"></div>
                            <strong>Full-Stack / Desenvolvedor</strong>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, risus ut tempus condimentum, urna est volutpat augue.</p>
                    </div><!--wraper-sessao3-->
            </div><!--sessao3-right-->
        <div class="clear"></div>
    </section><!--sessao3-->

    <section class="sessao4">
        <div class="container">
            <div class="sessao4-left">
                <h2>Entre em contato</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque lobortis iaculis. In hac habitasse platea dictumst. Cras vitae purus metus.</p>
                <form>
                    <input type="text" id="nome" placeholder="Seu nome*">
                    <input type="email" id="email" placeholder="e-mail">
                    <textarea placeholder="digite seu texto..."></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="sessao4-right">
                <h2>Faça uma visita</h2>
                <div class="map-wraper">
                    <div class="map">
                        <!--------MAPA--------------->
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCx8sh_HlLuleKqI2-ujHXj3P4jZfhnSUQ'></script><div class="map" id='gmap_canvas'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-9.6407935,-35.71779889999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-9.6407935,-35.71779889999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Web9 Soluções</strong><br>Rua Cleto Campelo<br> Maceió<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        <!--------MAPA-FIM----------->
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>Todos os direitos reservados</p>
            <p>contato@gmail.com</p>
            <div class="clear"></div>
        </div>

    </footer>
</body>
</html>