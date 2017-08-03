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
            <a class="navbar-brand" href="{{ url('/') }}" data-placement="bottom">
                Activisme_BE - Vrijwilligers
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                @if (auth()->check() && auth()->user()->hasRole('Admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">Backend</a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="mailto:informatica@activisme.be">Meld een probleem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('disclaimer') }}">Disclaimer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://twitter.com/Activisme_be">
                        <i class="fa fa-twitter"></i>
                        <p class="hidden-lg-up">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://www.facebook.com/ActivismeBE/?fref=ts">
                        <i class="fa fa-facebook-square"></i>
                        <p class="hidden-lg-up">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="https://www.flickr.com/people/activisme/?rb=1">
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

    {{-- Flash session --}}
    @if (session()->get('class') && session()->get('message') && session()->get('strong_msg') && session()->get('icon'))
        <div class="alert {{ session()->get('class') }}" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="{{ session()->get('icon') }}"></i>
                </div>

                <strong>{{ session()->get('strong_msg') }}</strong> {{ session()->get('message') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                </button>
            </div>
        </div>
    @endif
    {{-- /Flash session --}}

    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2 name="about" class="title">Wie zijn we?</h2>
                    <h5 class="description">
                        We zijn een klein collectief opgestart door Tom Manheaghe die zich inzet voor het sociaal beleid, armoede en de rechten van de mens en het kind.
                        Onze acties spelen zich vaak af op straat en over het internet.
                    </h5>
                </div>
            </div>
            <div class="separator separator-primary"></div>
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left">
                            <!-- First image on the left side -->
                            <img src="{{ asset('img/foto-1.jpg') }}" style="height:110%" alt="" class="rounded img-fluid img-raised">
                        </div>
                        <!-- Second image on the left side of the article -->
                        <div class="image-container">
                            <img src="{{ asset('img/foto-3.png') }}" alt="" class="img-fluid rounded img-raised">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right">
                            <img src="{{ asset('img/foto-2.jpg') }}" alt="" class="rounded img-fluid img-raised">
                        </div>
                        <h3>Waarom hebben wij uw hulp nodig?</h3>
                        <p>
                            Onze groepering draait momenteel op een 3 koppige kern. Helaas is dit niet genoeg. En zoeken wij vrijwilligers voor de volgende teams. Activisme, Losse vrijwilliger, Schrijvers, ITers, Grafische, Armoedebestrijding
                        </p>
                        <p>
                            Met deze ploegen willen samenwerken richting een groter geheel. Namelijk een vreedzamere wereld. Die word gebouwd vanuit een burger initiatief. Waar iedereen welkom is ongeacht ethniciteit, sociale status, enz... en last but not least
                            onafhankelijk van een politieke partij.
                        </p>
                        <p>
                            Indien je intresse hebt om je in te schrijven als vrijwilliger, kan dat. Onderaan de pagina vind je een inschrijvingsformulier. Dat u kunt invullen. En vervolgens nemen wij zo spoedig mogelijk contact met je op.
                            Om een kennismaking te plannen en of eventueel verdere afspraken te maken. Zodat u kunt starten in onze beweging.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-team text-center ">
        <div class="container">
            <h2 class="title">Wij zoeken mensen voor.</h2>
            <div class="team">
                <div class="row">
                    @foreach ($groups as $group)
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ asset($group->image_path) }}" style="height:100px; width:100px;" alt="{{ $group->name }}" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">{{ $group->name }}</h4>
                                <p class="description">
                                    {{ $group->short_description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <form name="form" action="{{ route('volunteers.store') }}" method="post">
        {{ csrf_field() }} {{-- CSRF form protection --}}

        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Schrijf je in</h2>
                <p class="description">Wij bedanken je alvast voor je intresse.</p>
                <div class="row">
                    <div class="col-lg-6 text-center offset-lg-3 col-md-8 offset-md-2">
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Uw naam">
                        </div>
                        @if ($errors->first('name'))
                            <small style="margin-bottom: 10px;" class="form-text text-danger">{{ $errors->first('name') }}</small>
                        @endif

                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail adres">
                        </div>
                        @if ($errors->first('email'))
                            <small style="margin-bottom: 10px;" class="form-text text-danger">{{ $errors->first('email') }}</small>
                        @endif

                        <div class="textarea-container">
                            <textarea class="form-control" name="extra_information" value="{{ old('extra_information') }}" rows="4" cols="80" placeholder="Extra informatie"></textarea>
                            @if ($errors->first('extra_information'))
                                <small class="form-text text-danger">{{ $errors->first('extra_information') }}</small>
                            @endif
                        </div>
                        <div class="send-button">
                            <button type="submit" href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">
                                Verstuur
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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

<script> $('div.alert').not('.alert-important').delay(3000).slideUp(300); </script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102557383-1', 'auto');
    ga('send', 'pageview');

</script>

</html>
