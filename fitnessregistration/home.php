<?php
    include('db.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <style>    
    *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #f0f0f0;
            background-size: 100% 100%;

        }
        

        li, a, button{
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: whitesmoke;
            text-decoration: none;
            
        }

        li{
            color: black;
        }

        a{
            display: flex;
            align-items: center;
        }
        header{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 30px 10%;
            background-color: white;
            height: 150px;
        }

        .fitness{
            cursor: pointer;
            order: 3;
            margin-left: auto;
            width: 125px;
            height: 100px;
        }

        nav{
            order: 1;
        }

        .nav_links{
            list-style: none;
        }

        .nav_links li{
            display: inline-block;
            padding: 0px 20px;
        }

        .nav_links li a{
            
            text-decoration: none;
            transition: all 0.3s ease 0s;
            color: white;
        }
        

        .nav_links li a:hover{
            color: rgb(160, 138, 51);
        }
    </style>
</head>

<body>

    <header>
        <img class="fitness" src="gymlogo.jpg">
        <nav>
            <ul class="nav_links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/news">News</a></li>
                <li><a class="cta" href="/login">Login</a></li>
                <li><a class="cta" href="/register">Register</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        <div class="news-section">
            <div class="title">
                <h2>News</h2>
                <p>Informata per rendesine e fitnesit aktivitetin dhe vecorite e fitnesit.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image-section">
                        <img src="gymlogo.jpg">
                    </div>
                    <div class="content">
                        <h4>Rendesia</h4>
                        <p>Te jesh fizikisht aktiv te ndihmon me shendetin e trurit,peshes,e zvogelon rrezikun e ndonje semundje,i forcon kockat dhe muskujt permireson aftesine per te bere aktivitete te perditshme,ndihesh me energjik,zvogelon stresin,te mban te fokusuar etj.</p>
                        <a href="">Lexo me shume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image-section">
                        <img src="logogym.jpg">
                        <div class="content">
                            <h4>Aktiviteti fizik</h4>
                            <p>Aktiviteti fizik i referohet te gjitha levizjeve qe i ben trupi gjate dites si ecja,vrapimi etj.Aktiviteti fizik eshte i rendesishem per disa arsye sepse ndihmon ne zvogelimin e problemeve me zemer, menaxhimin me te mire te peshes tuaj,zvogelon rrezikun e problemeve ne shtyllen kurrizore.Ushtrimi mund te largoje mendimet negative ose t'ju largoje nga shqetesimet e perditshme,ndihmon ne permiresimin  e gjumit etj.</p>
                            <a href="">Lexo me shume</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image-section">
                            <img src="fitnesslogo.jpg">
                            <div class="content">
                                <h4>Vecorite e fitnesit</h4>
                                <p>Disa vecori te fitnesit:qendrueshmeria,forca,ekuilibri,fleksibiliteti.Qendrueshmeria eshte aktivitet i njohur si aerobik,rrit rrahjet e zemres dhe frymemarrjen.Forca muskulore:te jesh i forte te ndihmon te qendrosh i pavarur dhe te ndihesh me i lehte,kete gje e ndihmon ngritja e peshave.Ekuilibri eshte me rendesi sepse te ndihmon qe te mos rrezohesh,ushtrimet ndihmojne ne ekuiliber.Fleksibiliteti eshte me rendesi sepse ka disa ushtrime te vecanta qe permiresojne fleksibilitetin.</p>
                                <a href="">Lexo me shume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>