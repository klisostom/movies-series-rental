@extends('welcome')
@section('content')
    <table onload="">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Filme</th>
                <th>Data Aluguel</th>
                <th>Data Devolução</th>
            </tr>
        </thead>

        <tbody id="bodyTable">
            {{-- <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.89</td>
            </tr> --}}
        </tbody>
    </table>
    <script>
        let result = JSON.parse(window.localStorage.getItem('rent'));
        let content = ``;

        for (element of result) {

            content += `
            <tr id="${element.title + Math.random()}">
                <td>${element.title}</td>
                <td>${element.startRent}</td>
                <td>${element.endRent}</td>
                <td>${element.nameClient}</td>
            </tr>`;
        }

        document.getElementById("bodyTable").innerHTML = content;

    </script>
@stop
