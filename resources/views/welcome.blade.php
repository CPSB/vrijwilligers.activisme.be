@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <div class="row"> {{-- This part is an info part and can be deleted --}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Barebone info:</div>
                </div>

                <div class="panel-body">
                    <p class="lead">Dit is de barebone applicatie die gebruikt word in bijna alles projecten en web platformen van ActivismeBE.</p>
                    <p>
                        Het gebruik van deze template zou de ontwikkel tijd aan applicatie moeten verminderen. Maar indien u een buitenstaander bent van ActrivismeBE.
                        Dan geven wij u de volgende informatie mee. Wij bieden geen ondersteuning aan 3de partij. Tenzij dit is afgesproken met de 3de partij.
                    </p>

                    <h3>Assets en front-end.</h3>

                    <p>
                        In deze barebone gebruiken we standaard Bootstrap als css framework en hebben het gebruik van icons vervangen door Font-Awesome.
                        De assets worden geplaatst in <code>/resources/assets</code> en worden gerenderdt met Laravel Mix. De volgende beschikbare commando's gaan als volgt: 
                    </p>

                    <ul>
                        <li><code>npm run dev</code></li>
                        <li><code>npm run development</code></li>
                        <li><code>npm run watch</code></li>
                        <li><code>npm run watch-poll</code></li>
                        <li><code>npm run hot</code></li>
                        <li><code>npm run prod</code></li>
                        <li><code>npm run production</code></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> {{-- This part is an info part and can be deleted --}}
@endsection