<!DOCTYPE html>
<html>
  <head>
    <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style type="text/css">
    #wrapper {
      padding-left: 250px;
      transition: all 0.4s ease 0s;
    }

/*barra lateral !!*/
    #sidebar-wrapper {
      margin-left: -250px;
      top: 51px;
      left: 250px;
      width: 250px;
      color: black;
      background: #2ED7EE;

      position: fixed;
      height: 100%;
      overflow-y: auto;
      z-index: 1000;
      transition: all 0.4s ease 0s;
    }

    #wrapper.active {
      padding-left: 0;
    }

    #wrapper.active #sidebar-wrapper {
      left: 0;
    }

    #page-content-wrapper {
        background-color: #2EEE7B;
      width: 100%;
      padding-top: 70px;
      transition: all 0.4s ease 0s;
    }

    .sidebar-nav {
      color: black;
      position: absolute;
      top: 0;
      width: 250px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .sidebar-nav li {
      line-height: 40px;
      text-indent: 20px;
    }

    .sidebar-nav li a {
      color: #999999;
      display: block;
      text-decoration: none;
      padding-left: 60px;
    }

    .sidebar-nav li a span:before {
      position: absolute;
      left: 0;
      color: #41484c;
      text-align: center;
      width: 20px;
      line-height: 18px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li.active {
      color: #fff;
      background: rgba(255,255,255,0.2);
      text-decoration: none;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
      text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
      height: 65px;
      line-height: 60px;
      font-size: 18px;
    }

    .sidebar-nav > .sidebar-brand a {
      color: #999999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
      color: #fff;
      background: none;
    }

    #menu-toggle {
        text-decoration: none;
        float: left;
        color: #fff;
        padding-right: 15px;
    }

    @media (max-width:767px) {

    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      left: 0;
    }

    #wrapper.active {
      position: relative;
      left: 250px;
    }

    #wrapper.active #sidebar-wrapper {
      left: 250px;
      width: 250px;
      transition: all 0.4s ease 0s;
    }

    #menu-toggle {
      display: inline-block;
    }

    }

    </style>
  <head>
  <body>
    <!-- MENU PARTE DE ARRIBA-->
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div  class="navbar-brand">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="#">SpaceAppsChallenge</a>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                      <a href="#home">  <li>Home <i class="material-icons">assignment_ind </a></li></i>
                        <a href="#species">  <li>Species <i class="material-icons">pets </a></li></i>
                          <a href="#contact">  <li>Contact <i class="material-icons">account_balance </a></li></i>
                            <a href="#faq">  <li>Faq <i class="material-icons">help </a></li></i>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- PARTE LATERAL -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <a href="#home"><span class="fa fa-home solo">link1</span></a>
                    </li>
                        <li>
                            <a href="#home">
                                <span class="fa fa-anchor solo">home 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#species">
                                <span class="fa fa-anchor solo">species</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <span class="fa fa-anchor solo">conact</span>
                            </a>
                        </li>
                        <li>
                            <a href="#faq">
                                <span class="fa fa-anchor solo">faq</span>
                            </a>
                        </li>
                </ul>
            </nav>
        </div>
        <!-- Page content -->
        <div id="page-content-wrapper">

<img id="logo" src="{{ asset('img/Cachora2.png')  }}" >


          <!-- <img  src="img/Cachora2.png" alt="logo" width="300px" height="180px"> -->
<h1>Trace Invader</h1>

            <div class="page-content">
              1234567890
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                        Panel 1
                                </div>
                                <div class="panel-body">
                                    content body
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                        Panel 1
                                </div>
                                <div class="panel-body">
                                    content body
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



    </div>
  </body>
  <script type="text/javascript">

      /*Menu-toggle*/
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
      });
  </script>

</html>
