<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <style>
        #tituloPagina {
            color: #4682B4;
        }

        p {
            color: #707070;
        }

        body {
            width: 50%;
            height: 300px;
            margin: 18px;
            font-size: 14px;
        }

        #titulosTabela {
            color: #4682B4;
        }

        .labelIMC {
            color: #4682B4;
        }

        #primeiroTituloTabela {
            background-color: #4682B4;
            color: white;
        }

        .btn-circle {
            width: 170px;
            height: 50px;
            text-align: center;
            padding: 6px 0;
            font-size: 15px;
            line-height: 1.42;
            border-radius: 25px;
        }

        #resultadoIMC {
            background: #ff5202;
            color: #fff;
            font-size: 22px;
            padding: 10px 20px;
            border-radius: 20px;
            width: 200px;
            margin: 40px 0;
        }

        .form-control {
            border-color: #4682B4;
            border-radius: 20px
        }
        #limpar{
            background: #ff5202;
        }
    </style>


</head>

<body>
    <div id="global">
        <h3 id="tituloPagina">Cálculo IMC</h3>
        <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o
            peso ideal de cada pessoa.

            O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado.
            Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

            Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela.
            Importante: siga os exemplos e use pontos como separadores.</p>

        <form action="/" method="get">
            <div class="row">
                <div class="col-md-3">
                    <label class="labelIMC">Altura (ex: 1,70)</label><br>
                    <input type="text" class="form-control" name="altura" id="altura" placeholder="Metros" required><br>
                </div>
                <div class="col-md-3">
                    <label class="labelIMC">Peso(ex: 69.2)</label><br>
                    <input type="text" class="form-control" name="peso" id="peso" placeholder="Quilos" required><br>
                </div>
            </div>
            <button type="submit" id="calcular" name="calcular" class="btn btn-primary btn-circle btn-lg">Calcular</button>
            <button type="reset" id="limpar" name="limpar" class="btn btn-danger btn-circle btn-lg">Limpar</button>
        </form>

        <br>
        <table class="table">
            <tr id="primeiroTituloTabela">
                <th colspan="3">
                    VEJA A INTERPRETAÇÃO DO IMC
                </th>
            </tr>
            <tr id="titulosTabela">
                <th>IMC</th>
                <th>CLASSIFICAÇÃO</th>
                <th>OBESIDADE (GRAU)</th>
            </tr>

            <tr>
                <td>MENOR QUE 18.5</td>
                <td>MAGREZA</td>
                <td>0</td>
            </tr>

            <tr>
                <td>ENTRE 18.5 E 24.9</td>
                <td>NORMAL</td>
                <td>0</td>
            </tr>

            <tr>
                <td>ENTRE 25.0 E 29.9</td>
                <td>SOBREPESO</td>
                <td>I</td>
            </tr>

            <tr>
                <td>ENTRE 30.0 E 39.9</td>
                <td>SOBREPESO</td>
                <td>II</td>
            </tr>

            <tr>
                <td>MAIOR QUE 40.0</td>
                <td>OBESIDADE GRAVE</td>
                <td>III</td>
            </tr>
        </table>
        <button type="button" id="resultadoIMC" name="resultadoIMC" class="btn btn-warning btn-lg">Seu IMC: {{$valor}} </button>
        <button type="button" class="btn btn-info">Verifique a sua situação na tabela acima</button>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>