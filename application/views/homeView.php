<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>hautbois Ltd.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <div class="container.fluid">
    <div class="row">
        <div class="col-4"> test </div>
        <div class="col-8">
          - var movieList = [
- 	{
-			'title': 'Blade Runner',
-			'info':'(1982) Sci-Fi, Thriller',
-			'description': 'A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator.'
-		},
- 	{
-			'title': 'Back to the Future',
-			'info':'(1985) Adventure, Comedy, Sci-Fi',
-			'description': 'Marty McFly, a 17-year-old high school student, is accidentally sent 30 years into the past in a time-traveling DeLorean invented by his close friend, the maverick scientist Doc Brown.'
-		},
- 	{
-			'title': 'Akira',
-			'info':'(1988) Animation, Action, Drama',
-			'description': 'A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psychic psychopath that only two teenagers and a group of psychics can stop.'
-		}
- ]

mixin movie(title, info, description)
  .movie-card(data-movie= title)
    .movie-card__overlay
    .movie-card__share
      button.movie-card__icon
        i.material-icons &#xe87d
      button.movie-card__icon
        i.material-icons &#xe253
      button.movie-card__icon
        i.material-icons &#xe80d
    .movie-card__content
      .movie-card__header
        h1.movie-card__title= title
        h4.movie-card__info= info
      p.movie-card__desc= description
      button.btn.btn-outline.movie-card__button(type="button") Watch Trailer

#movie-card-list
  each movie in movieList
    +movie(movie.title, movie.info, movie.description);

        </div>
    </div>
</div>
</body>

</html>
