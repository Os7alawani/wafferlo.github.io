<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        Home Page
    </title>

    <meta name="description" content="Here you can find all the offers and discounts organized in one place for Saudi Stores" />

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <script src="validation.js" type="text/javascript"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <div>
        <br />
        <div id="abUsContainer">
            <!-- About us section -->
            <h1> About us </h1>
            <h3> Here you can find all the offers and discounts organized in one place
                without having to waste your time searching in social media accounts
            </h3>

            <blockquote>
                <div><b> Our Vision </b></div>
            </blockquote>
            <b><q>Believe you can, and you're halfway there.</q>
                <cite> Theodore Roosevelt </cite>
            </b>
        </div>

        <div id="vidContainer">
            <object width="520" height="540" data="Untitled design.mp4">
                <param name="autoplay" value="true" />
                <param name="loop" value="true" />
                <param name="controller" value="true" />
                Your browser does not support the video tag.
            </object>
            <object width="520" height="530" data="https://www.youtube.com/v/diwf4UAQWyo">
            </object>
        </div>


        <div id="CategoriesContainerHo">
            <!-- Categories container for home page-->
            <div class="categoryContainer">
                <!-- Category and details section -->
                <a class="category" href="cafesPage.php"><img src="cafe.png" alt="" /></a>
                <img class="detailHo" src="tim.jpeg" alt="" />
                <img class="detailHo" src="barns.jpeg" alt="" />
                <img class="detailHo" src="dunkin.jpeg" alt="" />
            </div>
            <div class="categoryContainer">
                <a class="category" href="restaurantsPage.php"><img src="resta.png" alt="" /></a>
                <img class="detailHo" src="shrimplus.jpeg" alt="" />
                <img class="detailHo" src="gamba.jpeg" alt="" />
                <img class="detailHo" src="subway.jpeg" alt="" />
            </div>
            <div class="categoryContainer">
                <a class="category" href="storesPage.php"><img src="shop.png" alt="" /></a>
                <img class="detailHo" src="jarir.png" alt="" />
                <img class="detailHo" src="extra.png" alt="" />
                <img class="detailHo" src="virgin.png" alt="" />
            </div>
            <div class="categoryContainer">
                <a class="category" href="eComPage.php"><img src="ecomm.png" alt="" /></a>
                <img class="detailHo" src="noon.png" alt="" />
                <img class="detailHo" src="namshi.png" alt="" />
                <img class="detailHo" src="amazon.png" alt="" />
            </div>
        </div>

        <form id="febaFo" method="post" onsubmit="return validateForm()" action="feedbackAction.php">
            <h1>Feedback Form</h1>
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </fieldset>

            <fieldset>
                <legend>Feedback</legend>
                <p>How satisfied are you with our web application?</p>
                <div>
                    <input type="radio" id="satisfied" name="satisfaction" value="satisfied" />
                    <label>Satisfied</label>

                    <br />
                    <input type="radio" id="neutral" name="satisfaction" value="neutral" />
                    <label>Neutral</label>

                    <br />
                    <input type="radio" id="dissatisfied" name="satisfaction" value="dissatisfied" />
                    <label>Dissatisfied</label>

                </div>
                <div>
                    <p>What features would you like to see improved?</p>
                    <input type="checkbox" id="feature1" />
                    <label>Design</label>
                    <br />
                    <input type="checkbox" id="feature2" />
                    <label>Usability</label>
                    <br />
                    <input type="checkbox" id="content" />
                    <label>Content</label>
                </div>
                <br />
                <label>Select a Category for the improvment:</label>
                <select id="category">
                    <option value="Home page">Home page</option>
                    <option value="Restaurants">Restaurants</option>
                    <option value="Cafes">Cafes</option>
                    <option value="Stores">Stores</option>
                    <option value="E-commerce">E-commerce</option>
                    <option value="where">Where to go </option>
                </select>
                <br /><br />
                <label>Additional Comments:</label>
                <br />
                <textarea id="comments" name="comments" rows="4"></textarea>
                <br /><br />
                <button type="submit">Submit Feedback</button>

            </fieldset>
        </form>

        <form action="dataRetrieval.php" id="febaFo">
            <fieldset>
                <button type="submit"> Show All The Recommended Shops </button>
            </fieldset>
        </form>

        <?php include 'footer.php'; ?>
</body>

</html>