@extends('welcome')
@section('content')
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $data['img'] }}" alt="movie photo poster" width="auto" height="300">
                </div>

                <form action="#" method="POST" class="col s12">
                    <div class="card-content">
                        <h5 class="card-title">{{ $data['title'] }}</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="first_name" type="text" class="validate">
                                <label for="first_name">Primeiro Nome</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>

                            <button
                                class="btn waves-effect waves-light"
                                type="button"
                                id="btnRent"
                                name="btnRent"
                                value=""
                                onclick="save({{Js::from([
                                    'startRent' => date('d-m-Y h:m:s'),
                                    'endRent' => Date('d-m-Y h:m:s', strtotime('+2 days')),
                                    'title' => $data['title'],
                                ])}})"
                            >
                                Alugar
                            </button>
                            <a href="/" class="waves-effect waves red lighten-5 btn" style="color: black">Voltar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function save(args) {
            const nameClient = document.getElementById("first_name").value;
            args.nameClient = nameClient;

            let result = JSON.parse(window.localStorage.getItem('rent'));
            result = [result, args];
            localStorage.setItem("rent", JSON.stringify(result));
            window.location.replace("/");
        }
    </script>
@stop
