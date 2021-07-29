<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- link vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- link axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>

    <header></header>

    <main>
    <div id="app">
        <ul>
            <li v-for="disco in dischi">
                <img :src="disco.poster" alt="">
                <div class="description">
                <h2> {{ disco.title }} </h2>
                <h3> {{ disco.author }} </h3>
                <h4> {{ disco.year }} </h4>
                </div>
            </li>
        </ul>
    </div>
    </main>

<script src="script.js"></script>
</body>
</html>