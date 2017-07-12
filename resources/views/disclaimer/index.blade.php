<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Activisme_BE | Vrijwilligers</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/now-ui-kit.css') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
</head>

<body class="landing-page">
<!-- Navbar -->
<nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
        </div>
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/')  }}" data-placement="bottom">
                Activisme_BE - Vrijwilligers
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('img/blurred-image-1.jpg') }}">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="mailto:informatica@activisme.be">Meld een probleem</a>
                    <a class="nav-link" href="{{ url('disclaimer') }}">Disclaimer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://twitter.com/Activisme_be" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="hidden-lg-up">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://www.facebook.com/ActivismeBE/?fref=ts" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="hidden-lg-up">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://www.flickr.com/people/activisme/?rb=1" target="_blank">
                        <i class="fa fa-flickr"></i>
                        <p class="hidden-lg-up">Flickr</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('img/foto-3.png') }}');">
        </div>
        <div class="container">
            <div class="content-center">
                <h1 class="title">Activisme_BE - Vrijwilligers.</h1>
                <div class="text-center">
                    <a href="https://www.facebook.com/ActivismeBE/?fref=ts" class="btn btn-primary btn-icon  btn-icon-mini">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/Activisme_be" class="btn btn-primary btn-icon btn-icon-mini">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.flickr.com/people/activisme/?rb=1" class="btn btn-primary btn-icon  btn-icon-mini">
                        <i class="fa fa-flickr"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-about-us">
        <div class="container">
            <div class="section-story-overview">
                <div style="margin-top: -40px; margin-bottom: -40px;" class="row">
                    <div class="col-12">
                        <div class="card card-padding">
                            <div class="card-block">
                                <h5 class="card-title display-4">Disclaimer</h5>
                                <hr></hr>

                                <p class="card-text">
                                    Deze website is eigendom van <a href="http://www.activisme.be">ActivismeBE</a>.
                                    Door de toegang tot en het gebruik van deze website verklaart u zich uitdrukkelijk akkoord met de volgende algemene voorwaarden.
                                </p>

                                <h3>Intellectuele eigendomsrechten</h3>

                                <p class="card-text">
                                    De inhoud van deze site met inbegrip van de merken, logo's, tekeningen, data, product of bedrijfsnamen, teksten, beelden e.d zijn beschermd door intellectuele rechten en
                                    behoren toe aan ActivismeBe of rechthoudende derden.
                                </p>

                                <h3>Beperking van aansprakelijkheid</h3>

                                <p class="card-text">
                                    De informatie op de website is van algemene aard. De informatie is niet aangepast aan persoonlijke of specifieke omstandigheden, en kan dus niet als een persoonlijk,
                                    professioneel of juridisch advies aan de gebruiker worden beschouwd.
                                </p>

                                <p class="card-text">
                                    ActivismeBE levert grote inspanningen opdat de ter beschikking gestelde informatie volledig, juist, nauwkeurig en bijgewerkt zou zijn. Ondanks deze inspanningen
                                    kunnen onjuistheden zich voordoen in de ter beschikking gestelde informatie. Indien de verstrekte informatie onjuistheden zou bevatten of indien bepaalde informatie op
                                    of via de site onbechikbaar zou zijn, zal ActivismeBE de grootst mogelijke inspanning leveren om dit zo snel mogelijk recht te zetten. ActivismeBE kan evenwel niet
                                    aansprakelijk worden gesteld voor rechtstreekse of onrechtstreekse schade die ontstaat uit het gebruik van de informatie op deze site. Indien u onjuistheden zou
                                    vaststellen in de informatie die via de site ter beschikking wordt gesteld, kan u de beheerder van de site contacteren.
                                </p>

                                <p class="card-text">
                                    De inhoud van de site (links inbegrepen) kan te allen tijde zonder aankondiging of kennisgeving aangepast, gewijzigd of aangevuld worden. ActivismeBE geeft geen garenties voor de goede
                                    werking van de website en kan op geen enkele wijze aansprakelijk gehouden worden voor een slechte werking of tijdelijke (on)beschikbaarheid van de website of voor enige vorm van schade,
                                    rechtstreekse of onrechtstreekse, die zou voortvloeien uit de toegang tot of het gebruik van de website.
                                </p>

                                <p class="card-text">
                                    ActivismeBE kan in geen geval tegenover wie dan ook, op directe of indirecte, bijzondere of andere wijze aansprakelijk worden gesteld voor schade te wijten aan het gebruik van deze site
                                    of van een andere, inzonderheid als gevolg van links of hyperlinks, met inbegrip, zonder beperking, van alle verliezen, werkonderbrekingen, beschadiging van programma's of andere gegevens
                                    op het computersysteem, van apparatuur, programmatuur of andere van de gebruiker.
                                </p>

                                <p class="card-text">
                                    De website kan hyperlinks bevatten naar websites of pagina's van derden, of daar onrechtstreeks naar verwijzen. Het plaatsten van links naar deze websites of pagina's impliceert op
                                    geen enkele wijze een impliciete goedkeuring van de inhoud ervan. ActivismeBE verklaart uitdrukkelijk dat zij geen zeggenschap heeft over de inhoud over de inhoud of
                                    over andere kenmerken van deze websites en kan in geen geval aansprakelijk gehouden worden voor de inhoud of de kenmerken ervan of voor enige andere vorm van schade door het gebruik ervan.
                                </p>

                                <h3>Privacybeleid.</h3>

                                <p class="lead">ActivismeBE hecht beland aan uw privacy.</p>

                                <p class="card-text">In geval de gebruiker van de website om persoonlijke informatie gevraagd wordt:</p>

                                <p class="card-text">
                                    De verantwoordelijke voor de verwerking, ActivismeBE respecteert de Belgische wetgeving van 8 december 1992 met betrekking tot de bescherming van het privéleven in
                                    de verwerking van de persoonlijke gegevens. De door u meegedeelde persoonsgegevens zullen gebruikt worden voor de volgende doeleinden: Ons ledenbeheer, ondertekenen van petities.
                                </p>

                                <p class="card-text">
                                    U beschikt over een wettelijk recht op inzage en eventuele correctie van uw persoonsgegevens. Miet bewijs van identiteit (kopie identiteitskaart) kun u via een schriftelijke gedateerde
                                    en ondertekende aanvraag aan ActivismeBE, <i>(acties@activisme.be)</i> gratis de schriftelijke mededeling bekomen van uw persoonsgegevens. Indien nodig kunt u ook vragen de gegevens te corrigeren die onjuist,
                                    niet volledig of niet pertinent zouden zijn.
                                </p>

                                <p class="card-text">
                                    Het is mogelijk dat de verkregen persoonsgegevens worden doorgegegeven aan de technische mensen van ActivismeBE. Uw persoonsgegevens niet worden doorgegeven worden aan derden.
                                </p>

                                <p class="card-text">
                                    De technische mensen van ActivismeBE kunnen ook tevens geaggregeerde gegevens verzamelen van niet persoonlijke aard, zoals browser type of IP adres, het besturingsprogramma dat u gebruikt of de
                                    domeinnaam van de website langs waar u op deze website gekomen bent, of waarlangs u deze verlaat. Dit maakt het ons mogelijk deze website permanent te optimaliseren voor de gebruikers.
                                </p>

                                <h3>Het gebruik van "cookies"</h3>

                                <p class="card-text">
                                    Tijdens een bezoek aan de site kunnen 'cookies' op de harde schijf van uw computer geplaatst worden. Een cookie is een tekstbestand dat door de server van een website in de browser van uw computer
                                    of op uw mobiel apperaat geplaatst wordt wanneer u een website raadpleegt. Cookies kunnen niet worden gebruikt om personen te identificeren, een cookie kan slechts een machine identificeren.
                                </p>

                                <p class="card-text">
                                    U kan uw internetbrowser zodanig instellen dat cookies niet worden geaccepteerd, dat u een waarschuwing ontvangt wanneer een cookie geinstalleerd wordt of dat de cookies nadien van uw harde
                                    schijf worden verwijderd. Dit kan u doen via de instellingen van uw browser (via de help-functie). Hou er hierbij wel rekening mee dat bepaalde grafische elementen niet correct kunnen verschijnen,
                                    of dat u bepaalde applicaties zal kunnen gebruiken.
                                </p>

                                <p class="card-text">Door gebruik van onze website, gaat u akkoord met ons gebruik van cookies.</p>

                                <h3>Google analytics</h3>

                                <p class="card-text">
                                    Deze website maakt gebruik van Google Analytics. een webanalyse-service die wordt aangeboden door Google Inc. Google Analytics maakt gebruik van "cookies". (tekstbestandjes die op uw computer worden geplaatst)
                                    Om de website te helpen analyseren hoe de gebruikers de site gebruiken. De door het cookie gegenereerde informatie over uw gebruik van de website (met inbegrip van uw ip-adres) wordt overgebracht naar en door
                                    Google opgeslagen op servers in de Vernigde Staten. Google gebruikt deze informatie om bij te houden hoe u de website gebruikt, rapporten over de website-activiteit op te stellen voor de website-exploitanten en
                                    andere diensten aan te bieden met betrekking tot website-activiteit en internetgebruik. Google mag deze informatie aan derden verschaffen indien Google hiertoe wettelijk wordt verplicht, of voor zover deze derden
                                    deze informatie verwerken namens Google. Google zal uw ip-adres niet combineren met andere gegevens waarover Google beschikt.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-default">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="{{ url('/') . '#about'}}">
                            Over ons
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('disclaimer') }}">
                            Disclaimer
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <a href="http://www.activisme.be" target="_blank">Activisme_BE</a>. Alle rechten voorbehouden
            </div>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('js/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/now-ui-kit.js') }}" type="text/javascript"></script>

<script> $('div.alert').not('.alert-important').delay(2000).slideUp(300); </script>

</html>
