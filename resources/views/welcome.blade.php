<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sea Games</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #e5e5e5;
            }

            .container table {
                background-image: url('{{ asset('image/sea_games_logo.png') }}');
                background-size: 25%;
                backgroun
            }

            button {
                border-radius: 5px;
                background-color: white;
                border-style: solid;
                float: right;

            }

            nav {
                background-color: #b4bac4;
                width: 100%;
                height: 100px;
            }

            select {
                border-radius: 5px;
                border-color: black;
                border-style: solid;
                margin-right: 15px;
                width: 50%;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg ">
            <div class="container container-fluid ">
                <div class="collapse navbar-collapse">
                    <form class="d-flex search" role="search" action="/" method="" >
                        <select name="negara" id="negara">
                            <option value="">Pilih Negara</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Filipina">Filipina</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapura">Singapura</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Laos">Laos</option>
                            <option value="Kamboja">Thailand</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Timor Leste">Timor Leste</option>
                        </select>
                        <select name="medali" id="medali">
                            <option value="">Pilih Medali</option>
                            <option value="Emas">Emas</option>
                            <option value="Perak">Perak</option>
                            <option value="Perunggu">Perunggu</option>
                        </select>
                        <button class="button " type="submit">Filter</button>
                    </form>
                </div>
            </div>
        </nav>
    
        <div class="container container-fluid mt-3  ">
            <table class="table table-hover text-center">
                <thead class="table" style="background-color:#b4bac4; color:white; ">
                    <tr>
                        <th>Negara</th>
                        <th>Medali</th>
                        <th>2003</th>
                        <th>2005</th>
                        <th>2007</th>
                        <th>2009</th>
                        <th>2011</th>
                        <th>2013</th>
                        <th>2015</th>
                        <th>2017</th>
                        <th>2019</th>
                        <th>2021</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    <?php $i = 0; ?>
                    <?php foreach ($data as $dat) : ?>
                    <tr>
                        <td><?= $dat['negara'] ?></td>
                        <td><?= $dat['medali'] ?></td>
                        <td><?= $dat['2003'] ?></td>
                        <td><?= $dat['2005'] ?></td>
                        <td><?= $dat['2007'] ?></td>
                        <td><?= $dat['2009'] ?></td>
                        <td><?= $dat['2011'] ?></td>
                        <td><?= $dat['2013'] ?></td>
                        <td><?= $dat['2015'] ?></td>
                        <td><?= $dat['2017'] ?></td>
                        <td><?= $dat['2019'] ?></td>
                        <td><?= $dat['2021'] ?></td>
                        <td><?= $dat['total'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
