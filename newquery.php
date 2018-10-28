<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./CSS/newquery.css">
    <link rel="icon" type="image/png" href="images/iwt.png">
    <title>Query</title> 
</head>
<body>
    <div class="container">
        <div class="my-form">
            <h1> Submit a Query </h1>
            <form method="POST" action="newqueryconn.php">
                <!-- <div class="radio">
                    <input type="radio" name="quote" value="hi"> Say Hi
                <input type="radio" name="quote" value="getquote"> Get a Quote
                </div> -->
                <div class="input-fields">
                    <div class="animate">
                        <input type="text" name="cname" placeholder="Customer Name">
                    </div>
                    <div class="animate">
                        <input type="text" name="cnum" placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="animate">
                        <input type="email" name="email" placeholder="Enter Your Email">
                    </div>
                    &ensp;&ensp;<input type="radio" name="pref" value="call">&nbsp;Call&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <input type="radio" name="pref" value="text">&nbsp;Text&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <input type="radio" name="pref" value="email">&nbsp;E-mail
                    <div class="animate">
                        <input type="text" name="pname" placeholder="Product Details">
                    </div>
                    <textarea name="pdetails" id=""  placeholder="Enter Your Message"></textarea>
                </div>
                <div class="submit-button"> 
                    <button type="submit" name="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>