<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        Register page
    </title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <?php include 'header.php'; ?>

    <div id="reDi">
        <form action="registrationAction.php" method="post">
            <div>
                <img src="offer.png" alt="" />

                <div>
                    <h3> First Name: <input class="names" name="FirstName" /> </h3>
                    <h3 id="LName"> Last Name: <input class="names" name="LastName" /> </h3>
                    <br />
                    <h3>Email: <input type="email" name="Email" /> &nbsp;</h3>
                    <h3>Password: <input type="password" name="Password" /> </h3>
                </div>

                <br /><br />
                <button type="reset"> Reset </button>
                <button type="submit"> Register </button>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>