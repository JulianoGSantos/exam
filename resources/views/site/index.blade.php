@include('layouts.style')

<nav class="navbar bg-primary-subtle">
    <div class="container-fluid">
        <div>
            <img src="img/coruja.png" alt="coruja" width="100" height="80" class="d-inline-block">
            Simulado
        </div>
    </div>
</nav>

<div class="container-sm mt-5 mb-5 rounded border border-2 border-warning">
    <form action="#" method="POST">
        <p class="mt-2">1- Observe a figura abaixo.</p>
        <img src="img/quadrado.jpeg" alt="quadrado" width="200px" height="200px">
        <p>A parte colorida corresponde a:</p>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="first" id="2/6" value="2/6">
                    <label for="2/6">2/6</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="first" id="3/6" value="3/6">
                    <label for="3/6">3/6</label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="first" id="1/2" value="1/2">
                    <label for="1/2">1/2</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="first" id="3/8" value="3/8">
                    <label for="3/8">3/8</label>
                </div>
            </div>
        </div>
        <hr>
        <p class="mt-2">2- Observe a figura abaixo.</p>
        <img src="img/quadrado.jpeg" alt="quadrado" width="200px" height="200px">
        <p>A parte colorida corresponde a:</p>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="first" id="2/6" value="2/6">
                    <label for="2/6">2/6</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="first" id="3/6" value="3/6">
                    <label for="3/6">3/6</label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="first" id="1/2" value="1/2">
                    <label for="1/2">1/2</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="first" id="3/8" value="3/8">
                    <label for="3/8">3/8</label>
                </div>
            </div>
        </div>
        <hr>
        <p class="mt-2">3- Observe as figuras abaixo.</p>
        <img src="img/celulas.jpeg" alt="celulas" width="400px" height="200px">
        <p>As figuras que representam a mesma parte são:</p>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="third" id="A e B" value="A e B">
                    <label for="A e B">A e B</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="third" id="A e C" value="A e C">
                    <label for="A e C">A e C</label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="third" id="B e D" value="B e D">
                    <label for="B e D">B e D</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="third" id="C e D" value="C e D">
                    <label for="C e D">C e D</label>
                </div>
            </div>
        </div>
        <hr>
        <p class="mt-2">4- Uma pizza foi dividida em 8 pedaços iguais:</p>
        <img src="img/pizza.jpeg" alt="pizza" width="200px" height="200px">
        <p>Se a pizza custar 24 reais, quanto custará 1/8 dela?</p>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="fourth" id="1 real" value="1 real">
                    <label for="1 real">1 real</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="fourth" id="3 reais" value="3 reais">
                    <label for="3 reais">3 reais</label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="fourth" id="6 reais" value="6 reais">
                    <label for="6 reais">6 reais</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="fourth" id="8 reais" value="8 reais">
                    <label for="8 reais">8 reais</label>
                </div>
            </div>
        </div>
        <hr>
        <p class="mt-2">5- Na fazenda de Marcos há muitas vacas. Marcos vendeu 2/3 dessas vacas e ainda sobraram 48 vacas. Quantas vacas havia na fazenda?</p>
        <img src="img/vaca.jpeg" alt="vaca" width="300px" height="200px">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="fifth" id="32 vacas" value="32 vacas">
                    <label for="32 vacas">32 vacas</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="fifth" id="96 vacas" value="96 vacas">
                    <label for="96 vacas">96 vacas</label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="radio" name="fifth" id="144 vacas" value="144 vacas">
                    <label for="144 vacas">144 vacas</label>
                </div>
                <div class="col-2">
                    <input type="radio" name="fifth" id="80 vacas" value="80 vacas">
                    <label for="80 vacas">80 vacas</label>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-grid col-12 mt-2 justify-content-end">
            <button class="btn btn-outline-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3.0rem; --bs-btn-font-size: 1.5rem;">
                Enviar
            </button>
        </div>
    </form>
</div>
<div class="container-fluid bg-primary">
    RODAPE
</div>