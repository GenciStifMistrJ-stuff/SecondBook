@extends('layout')

@section('header')
    <title>2Books | Prihlásenie</title>
    <link rel="stylesheet" type="text/css" id="theme" href="css/login.css"/>
@stop

@section('container')
    <div class="login-container">
        
        <div class="login-box animated fadeInDown">
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Prihlás sa</strong> do svojho účtu</div>
                <form action="index.html" class="form-horizontal" method="post"> <!-- It have to be solved next time - Authentification -->
=======
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <title>2Books | Prihlásenie</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/login.css"/>  
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Prihlás sa</strong> do svojho účtu</div>
                    <form action="index.html" class="form-horizontal" method="post">
>>>>>>> origin/master
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Zabudol si heslo?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Prihlásiť</button>
                        </div>
                    </div>
                    <div class="login-or">Alebo</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
<<<<<<< HEAD
                        <div class="col-md-4">
=======
                        <div class="col-md-4">                            
>>>>>>> origin/master
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Nemáš ešte účet? <a href="#">Zaregistruj sa</a>
                    </div>
<<<<<<< HEAD
                </form>
            </div>

            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2016 SecondBooks
                </div>
                <div class="pull-right">
                    <a href="#">O nás</a> |
                    <a href="#">Kontakt</a>
                </div>
            </div>

        </div>
            
    </div>
@stop

                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 SecondBooks
                    </div>
                    <div class="pull-right">
                        <a href="#">O nás</a> |
                        <a href="#">Kontakt</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






