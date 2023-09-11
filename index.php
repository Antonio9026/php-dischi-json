<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VUE  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
     <div class="container">
      <div class="card" v-for="disco in dischi">
        <div class="img_container">
          <img :src="disco.copertina" alt="">
        </div>
        <div class="info">
          <h1 class="titolo">{{ disco.titolo }}</h1>
          <p class="autore"> {{ disco.autore }}</p>
          <p class="anno">{{disco.anno}}</p>
        </div>
      </div>
     </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>