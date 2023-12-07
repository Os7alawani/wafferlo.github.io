<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        Recommendation page
    </title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <?php include 'header.php'; ?>


    <div id="reDi">
        <form action="dataRetrieval.php">
            <div>
                <img src="offer.png" alt="" />
                <br /><br />

                <fieldset>

                    <legend>Shop Recommendation</legend>
                    <label for="name">Shop Name</label>
                    <input type="text" name="ShopName">
                    
                    <br /><br />

                    <label>Select Shop Type</label>
                    <select id="ShopType" name="ShopType">
                        <option value="Restaurants">Restaurants</option>
                        <option value="Cafes">Cafes</option>
                        <option value="Stores">Stores</option>
                        <option value="E-commerce">E-commerce</option>
                    </select>

                    <br /><br />
                </fieldset>
                <br /><br />
                <button type="submit"> Show All The Recommended Shops </button>

            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>