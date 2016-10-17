<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Allblue Technology</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                background-image: url('http://modernpurair.com/wp-content/uploads/2014/04/Coming-Soon-Background.jpg');
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding-top: 100px;
            }

            .title {
                font-size: 5em;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <div class="container content" id="content">
                <div class="row">
                    <div class="col-sm-12">
                       <h1 class="title">Allblue Technology</h1> 
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                       <h1 class="title">
                           <div id="getting"></div>
                       </h1> 
                        
                    </div>
                </div>
                <!-- <p>Build with Laravel</p> -->
                <h2>Build With Laravel 5</h2>
                <p><b>Contact : info@allblue.technology</b></p>
            </div>
        
        <script type="text/javascript">
          $("#getting")
          .countdown("2016/10/31", function(event) {
            $(this).text(
              event.strftime('%D days %H:%M:%S')
            );
          });
</script>
    </body>
</html>
