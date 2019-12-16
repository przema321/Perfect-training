@extends('layouts.app')
@section('content')
<body>
<div class="container">
    <div class="d-flex align-items-center justify-content-center">

        <img style="margin-top: 30px" src="{{ URL::to('/') }}/images/logo_appki.png" width="400px" height="200px"/>

    </div>
    <div class=" d-flex align-items-center justify-content-center p-5">

        <iframe style="border-style: none" class="rounded" width="600" height="400"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
    </div>
    <div class="d-flex align-items-center justify-content-center pt-4">
        <p>
            <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
               aria-expanded="false" aria-controls="multiCollapseExample1">Warmup</a>
        </p>
    </div>
    <div class="row p-1">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <h3>Rozgrzewka:</h3>
                    <ul>
                        <li>A1 Jazda na rowerku 5 minut</li>
                        <li>A2 Krążenia 10 powtórzeń</li>
                        <li>A3 Wallslides 15 powtórzeń</li>
                        <li>A4 Hip hinge z hantlą 10 powtórzeń</li>
                        <li style="list-style-type: none;">Wykonaj każde z ćwiczeń raz</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex align-items-center justify-content-center pt-4">
        <p>
            <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample2" role="button"
               aria-expanded="false" aria-controls="multiCollapseExample2">Training</a>
        </p>
    </div>
    <div class="row p-1">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <h3>Trening:</h3>
                    <ul>
                        <li>A1 Martwy ciąg z hantlą 10 powtórzeń</li>
                        <li>A2 Wyciskanie hantli leżąc 10 powtórzeń</li>
                        <li style="list-style-type: none;">Odpoczywaj 90 sekund między A1 i A2, wykonaj po 4 serie</li>
                    </ul>
                    <ul>
                        <li>B1 Przyciąganie nóg na piłce 10 powtórzeń</li>
                        <li> B2 Wyciskanie w klęku 10 powtórzeń</li>
                        <li style="list-style-type: none;">Odpoczywaj 90 sekund między B1 i B2, wykonaj po 4 serie</li>
                    </ul>
                    <ul>
                        <li>C1 Pompka klasyczna 12 powtórzeń</li>
                        <li>C2 Wyciskanie antyrotacyjne 12 powtórzeń</li>
                        <li style="list-style-type: none;">Odpoczywaj 60 sekund między C1 i C2, wykonaj po 3 serie</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
    <div class="d-flex align-items-center justify-content-center pt-4">
        <p>
            <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample3" role="button"
               aria-expanded="false" aria-controls="multiCollapseExample3">Streching</a>
        </p>
    </div>
    <div class="row p-1">
        <div class="col" style="margin-bottom: 30px">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body">
                    <h3>Streching</h3>
                    <ul>
                        <li> A1 Rozciąganie – tył uda 60 sekund</li>
                        <li>B1 Rozciąganie – pośladek 60 sekund</li>
                        <li> C1 Rozciąganie – łydki 60 sekund</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection


