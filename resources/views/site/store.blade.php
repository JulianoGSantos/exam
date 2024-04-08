@include('layouts.style')
<div
    class="alert alert-success col-11 mx-auto mt-5"
    role="alert"
>
    <h4 class="alert-heading">Respostas enviadas com sucesso!</h4>
    <hr />
    <p class="mb-0">Aguarde a correção do Simulado, logo retornaremos com o resultado.</p>
</div>
<div class="row justify-content-center mt-5">
    <a class="btn btn-danger col-2" role="button" href=" {{ route('login') }}"
    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3.0rem; --bs-btn-font-size: 1.5rem;">Sair</a>
</div>
