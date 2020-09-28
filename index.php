<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider tuto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="style/app.css">
</head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide image-diapo"><img src="https://via.placeholder.com/2000x700/1" alt=""></li>
                            <li class="splide__slide image-diapo"><img src="https://via.placeholder.com/2000x700/2" alt=""></li>
                            <li class="splide__slide image-diapo"><img src="https://via.placeholder.com/2000x700/3" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
        <script>
        document.addEventListener( 'DOMContentLoaded', function () {
		    var splide = new Splide( '.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                autoWidth: true,
                focus: 'center',
            } ).mount();
	    } );
        </script>
    </body>
</html>