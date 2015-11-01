<!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaTeX-Vorträge</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/latex.css">
    <link rel="stylesheet" type="text/css" href="css/sh_emacs.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-nice" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#latex-navbar">
            <span class="sr-only">Navigation umschalten</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">LaTeX-Vorträge</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="latex-navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">2015 <span class="sr-only">(current)</span></a></li>
            <li><a href="../2014">2014</a></li>
            <li><a href="../2013">2013</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Vorlagen <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="https://github.com/malteschmitz/latex-exercise">Übungsblätter</a></li>
                <li><a href="https://github.com/malteschmitz/latex-thesis">Abschlussarbeiten</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <p>
      <a href="https://github.com/malteschmitz/latex"><img class="fork fixed" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
    </p>

    <div class="latex-header">
      <div class="container">
        <h1>LaTeX-Vorträge</h1>
        <p class="authors">
          <a href="http://twitter.com/HerrStachel">Johannes Thorn</a>
          <a href="http://www.mlte.de">Malte Schmitz</a>
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-3 hidden-print">
          <div class="latex-sidebar" role="complementary">
            <ul class="nav latex-sidenav" id="toc"></ul>
          </div> <!-- end of latex-sidebar -->
        </div> <!-- end of col-md-3 -->
        <div class="col-md-9 col-print-12" role="main" id="main">

          <?php
            include('nook.php');
            include('einfuehrung.php');
            include('abschlussarbeiten.php');
            include('tikz.php');
            include('beamer.php');
            include('lizenz.php');
          ?>

        </div> <!-- end of col-md-9 -->
      </div> <!-- end of row -->
    <div> <!-- end of container -->

    <footer class="latex-footer" role="contentinfo">
      <div class="container">
        <ul class="footer-links">
          <li>Seite erstellt mit <a href="http://getbootstrap.com/">Bootstrap 3</a></li>
          <li class="muted">&middot;</li>
          <li><a href="http://www.schmitz-sh.de/impressum.gif">Impressum</a></li>
        </ul>
      </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/sh_main.min.js"></script>
    <script type="text/javascript" src="js/sh_latex.min.js"></script>
    <script type="text/javascript" src="js/jquery.tableofcontents.min.js"></script>
    <script src="js/latex.js"></script>
  </body>
</html>
