<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->


    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Picture Gallery</title>

</head>

<body id="boPiGa">

    <?php include 'header.php'; ?>

    <div class="gallery-container">
        <div class="main-image">
            <img src="arabia.png" alt="Main Image" id="mainImg" />
        </div>
        <div class="thumbnail-bar" id="thumbnailBar">
            <img src="arabia.png" alt="Thumbnail 1" onclick="showImage(0)" />
            <img src="amazon.png" alt="Thumbnail 2" onclick="showImage(1)" />
            <img src="almajed.png" alt="Thumbnail 3" onclick="showImage(2)" />
            <img src="8oz.png" alt="Thumbnail 4" onclick="showImage(3)" />
            <img src="barns.jpeg" alt="Thumbnail 5" onclick="showImage(4)" />
            <img src="dunkin.jpeg" alt="Thumbnail 6" onclick="showImage(5)" />
            <img src="krispycream.jpeg" alt="Thumbnail 7" onclick="showImage(6)" />
            <img src="noman.png" alt="Thumbnail 8" onclick="showImage(7)" />
            <img src="saldwich.png" alt="Thumbnail 9" onclick="showImage(8)" />
        </div>
        <br /><br />
    </div>

    <script type="text/javascript" src="script.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>