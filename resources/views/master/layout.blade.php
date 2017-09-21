<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset("css/materialize.css") }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title", "Home") | {{ config("app.name") }}</title>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper narbar-fixed">
                <a href="#!" class="brand-logo left"><i class="material-icons">books</i>Libraro</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li class="active"><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>

        <div class="carousel carousel-slider center" data-indicators="true">
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">button</a>
            </div>
            <div class="carousel-item red white-text" href="#one!">
                <h2>First Panel</h2>
                <p class="white-text">This is your first panel</p>
            </div>
                <div class="carousel-item amber white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
            </div>
                <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
                <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s4">test</div>
                <div class="col s4">test</div>
                <div class="col s4">test</div>
            </div>
        </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </body>
    <script type="text/javascript" src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/material/materialize.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/layout.js") }}"></script>
</html>