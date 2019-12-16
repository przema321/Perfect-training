
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
                        <li> A1 Rozciąganie aktywne – tył uda z gumą 10 powtórzeń</li>
                        <li>A2 Rozciąganie aktywne – klatka piersiowa 10 powtórzeń</li>
                        <li>A3 Naprzemienne unoszenie prostych nóg – z góry 10 powtórzeń</li>
                        <li>A4 Przyciąganie gumy w klęku 15 powtórzeń</li>
                        <li>A5 Bridge z wałkiem – pompowanie 15 powtórzeń</li>
                        <li>A6 Wallslides 15 powtórzeń</li>
                        <li> A7 Rozciąganie aktywne z gumą – tył uda 10 powtórzeń</li>
                        <li>A8 Jaskółka z wypadem i otwarciem 6 powtórzeń</li>
                        <li style="list-style-type: none;">Każde ćwiczenie wykonaj raz.</li>

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
                        <li> A1 Martwy ciąg 8 powtórzeń</li>
                        <li> A2 Wyciskanie hantli jednorącz pro 8 powtórzeń</li>
                        <li> A3 Abwheel 10 powtórzeń</li>
                        <li style="list-style-type: none;"> Odpocznij 90 sekund między ćwiczeniami. Wykonaj je po 4 razy.</li>
                    </ul>
                    <ul>
                        <li> B1 Hip thruster 10 powtórzeń</li>
                        <li> B2 Wiosłowaniu antyrotacyjne 10 powtórzeń</li>
                        <li style="list-style-type: none;"> Odpocznij 90 sekund między ćwiczeniami. Wykonaj je po 3 razy.</li>
                    </ul>
                    <ul>
                        <li> C1 Push pull w klęku 10 powtórzeń</li>
                        <li> C2 Dead Bug pro 10 powtórzeń</li>
                        <li style="list-style-type: none;"> Odpocznij 60 sekund między ćwiczeniami. Wykonaj je po 3 razy.</li>

                    </ul>
                    <ul>
                        <li> D1 Rowerek – zwykła jazda 40 sekund</li>
                        <li> D2 Rowerek – sprint 20 sekund</li>
                        <li style="list-style-type: none;"> Wykonaj 10 razy.</li>
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
                        <li> A1 Rozciąganie – mięsień czworogłowy uda 60 sekund</li>
                        <li> A2 Rozciąganie – tył uda 60 sekund</li>
                        <li> A3 Rozciąganie – pośladek 60 sekund</li>
                        <li> A4 Rozciąganie – miesięń najszerszy grzbietu 60 sekund</li>
                        <li style="list-style-type: none;"> Każde ćwiczenie wykonaj raz. </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection

