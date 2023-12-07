<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        Sign in page
    </title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <?php include 'header.php'; ?>

    <div id="siInDi">
        <form action="signinAction.php">
            <div>
                <img src="offer.png" alt="" />
                <h3> Email: </h3>
                <input type="text" />
                <br />
                <h3> Password: </h3>
                <input type="password" />
                <br /><br /><br />
                <button type="reset"> Reset </button>
                <button type="submit"> Sign in </button>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>


</body>

</html>