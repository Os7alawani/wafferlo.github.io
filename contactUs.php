<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        Contact Us page
    </title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <script src="scramble.js" defer type="text/javascript"></script>
</head>

<body id="conUsBo">
    <?php include 'header.php'; ?>
    <div id="coTa">
        <br />
        <p style="display: inline;">If you face any issues, contact us on our direct number +966546945598 or on our email
        <p style="display: inline;" id="scrambled-email">waffrlo@gmail.com</p> during our
        work hours:</p>

        <table id="woTi" border="2">
            <caption>Working Days and Times</caption>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
            <tr>
                <td rowspan="2">Sunday</td>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td rowspan="2">Monday</td>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td rowspan="2">Tuesday</td>
                <td>11:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td rowspan="2">Wednesday</td>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td rowspan="2">Thursday</td>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>8:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td colspan="2" rowspan="2">Vacation</td>
            </tr>
            <tr>
                <td>Saturday</td>
            </tr>
        </table>
    </div>

    <div id="pdfContainer">
        <br /><br /><br />
        <h3> document presents the curriculum vitae of a valuable member of our team: </h3>
        <object data="Os_CV.pdf" type="application/pdf" width="75%" height="1000px"></object>
        <br /><br />
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>