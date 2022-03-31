<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>php-ajax-dischi</title>
</head>
  <body>
    <div id="app">

      <header class="header">
        <figure class="logo">
          <img src="../spotify-logo.png" alt="">
        </figure>
      </header>

      <main class="container container-main">
        <!-- Select -->
        <!-- <div>
          <select @change="filterGenre" v-model="selectedGenre" name="genre" class="genre-select">
            <option value="">All</option>
            <option v-for="(genre, i) in genreList" :key="i" :value="genre">{{genre}}</option>
          </select>
          
          <select @change="filterAuthor" v-model="selectedAuthor" name="author" class="genre-select">
            <option value="">All</option>
            <option v-for="(author, i) in authorList" :key="i" :value="author">{{author}}</option>
          </select>
        </div> -->

        <div class="card-wrapper">

          <!-- Card -->
          
            <div class="card" v-for='disc in discs'>
              <figure class="figure-card">
                <img class="poster" :src="disc.poster" alt="">
              </figure>
              <h4 class="card_title"> {{disc.title}} </h4>
              <p class="card_author"> {{disc.author}} </p>
              <p class="card_year"> {{disc.year}} </p>
            </div>
        </div>
      </main>
  
    </div>


    <script src="app.js"></script>
  </body>
</html>