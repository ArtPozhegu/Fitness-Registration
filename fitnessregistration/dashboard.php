<!DOCTYPE html>
<html lang="en">
<head>

        <style>
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }    

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button-active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .tabcontent#Users {
            display: block;
        }
        </style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
        
        <body>

        <div class="tab">
        <button class="tablinks active" onclick="Lajmi(media, 'Users')">Users</button>
        <button class="tablinks" onclick="Lajmi(media, 'News')">News</button>
        </div>

        <div id="Users" class="tabcontent">
            <?php include 'users.php'?>
        </div>
        
        <div id="Products" class="tabcontent">
            <?php include 'news.php'?>
        </div>
        
        <script>
            function Lajmi(media, name){
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for(i = 0; i < tabcontent.length; i++){
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for(i = 0; i < tablinks.length; i++){
                    tablinks[i].className = tablinks[i].className.replace("active", "");
                }
                document.getElementById(name).style.display = "block";
                media.currentTarget.className += "active";
            }
        </script>

        </body>
        </html>