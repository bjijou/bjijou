<html>

<head>

    <meta charset="utf-8">
    <link rel="icon" href="https://www.cebi.com/sites/default/files/favicon.ico">
    <title>Web 2  </title>

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/img.css" type="text/css" />

    <script src="./js/jquery-3.5.1.js"></script>


    <style type="text/css" class="init">
        .aligncenter {
            text-align: center;
        }
    </style>

</head>

<body>
    <div id="container">
        <form action="includes/verification.php" method="POST" autocomplete="off">
            <p class="aligncenter"> <img src="img/cebi_logo.png" alt="CEBI"> </p>
            <h1>EDI PORTAL</h1>
            <label><b>Username(email)</b></label>
            <input type="email" name="username" placeholder="your cebi email" id="username" required>
            <label><b>Password</b></label>
            <input type="password" name="password_1" placeholder="Password" id="password1" required>

            <!--  <button type="submit">LOGIN</button>   -->
            <input type="submit" class="btn" name="reg_user" value="Login"></input>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];

                switch ($err) {
                    case 1:
                        echo "<p style='color:red'>⚠️ User or Password incorrect</p>";
                        break;
                    case 2:
                        echo "<p style='color:red'>🛑 User Blocked Contact Administrator</p>";
                        break;
                    case 3:
                        echo "<p style='color:red'>😴 Session Expired, please re-login</p>";
                        break;
                    default:
                        break;
                }
            }
            ?>

            <p>New user? <a href="mailto:aissa.el-hammouti@cebi.com"> Contact portal admin </a></p>
        </form>

        <div class="u-flag">
            <p class="aligncenter"> Access to WIKI </p>
            <a href="https://lu11edi-wa01/dokuwiki/doku.php?id=wikicebi:wikicebilux" target="_blank" style="padding-left: 120px "><img src="img/lu.png" alt="Cebi luxembourg" width="50" height="50"/></a>
            <a href="https://lu11edi-wa01/dokuwiki/doku.php?id=wikicebi:wikicebipl" target="_blank" alt="Cebi poland" style="padding-left: 50px "><img src="img/pl.png"  width="50" height="50"/></a>
            <!-- <a href="http://" target="_blank" style="padding-right: 0px"><img src="img/mx.png" alt="Cebi mx" width="50" height="50"></a> -->
        </div>
    </div>
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function() {
            $('input[type=submit]').click(function() {
                $(this).attr('disabled', 'disabled');
                $(this).parents('form').submit();
            });
        });
    </script>
</body>

</html>
