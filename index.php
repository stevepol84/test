<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='index,follow'>
    <noscript>
        <h2>Please enable javascript</h2>
    </noscript>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header>
    <!--<a id="logo" href="#">-->
    <!--<img src="images/logo.png" alt="logo" width="197" height="58"/>-->
    <!--</a>-->
    <a id="logo" href="#" title="Return to homepage">Too Many Years logo</a>

    <h1>ΥΠΟΛΟΓΙΣΜΟΣ ΚΟΣΤΟΥΣ</h1>
    <ul id="results">
        <li id="clean">
            <span>Καθαρή Αξία</span>
            <span class="value">0.00</span>
        </li>
        <li id="fpa" class="even">
            <span>Φπα</span>
            <span class="value">0.00</span>
        </li>
        <li id="total">
            <span>Σύνολο</span>
            <span class="value">0.00</span>
        </li>
    </ul>
</header>

<section id="main"> <!-- <div id="main"> || <main> -->
    <section id="dragFunction">
        <p>
            Κάποιο κείμενο που θα περιγράφει τη διαδικασία του drag n drop Και τη διαμόρφωση του κόστους μεταφέροντας
            χαρακτηριστικά. <br/>
            Κάποιο κείμενο που θα περιγράφει τη διαδικασία του drag n drop Και τη διαμόρφωση του κόστους μεταφέροντας
            χαρακτηριστικά. <br/>
            Κάποιο κείμενο που θα περιγράφει τη διαδικασία του drag n drop Και τη διαμόρφωση του κόστους μεταφέροντας
            χαρακτηριστικά. <br/>
            Κάποιο κείμενο που θα περιγράφει τη διαδικασία του drag n drop Και τη διαμόρφωση του κόστους μεταφέροντας
            χαρακτηριστικά.
        </p>
        <ul id="presets">
            <li id="selectionOne">Επιλογή 1</li>
            <li id="selectionTwo">Επιλογή 2</li>
            <li id="selectionThree">Επιλογή 3</li>
            <li id="resetOptions">Επαναφορά</li>
        </ul>
        <div class="listWrapper">
            <h2><span>Τίτλος Πλαισίου</span></h2>
            <ul id="selectedOptions">
                <li>EpiloghEpiloghEpiloghEpiloghEpiloghEpiloghEpiloghEpilogh</li>
                <li>Epilogh</li>
                <li>Epilogh</li>
                <li>Epilogh</li>
            </ul>
        </div>
        <img src="images/drag_drop_img.png" id="dragArrows" title="Metakinhste" width="90" height="54"
             alt="drag image"/>

        <div class="listWrapper">
            <h2><span>Χαρακτηριστικά</span></h2>
            <ul id="options">
                <li id="option_static">
                    <span class="name">Static</span>
                    <span class="price">12</span>
                </li>
                <li id="option_dynamic">
                    <span class="name">Dynamic</span>
                    <span class="price">5</span></li>
                <li id="option_tade">
                    <span class="name">Tade</span>
                    <span class="price">22</span>
                </li>
                <li>
                    <span class="name">Epilogh</span>
                    <span class="price">22</span>
                </li>
                <li>
                    <span class="name">Epilogh</span>
                    <span class="price">22</span>
                </li>
                <li>
                    <span class="name">Epilogh</span>
                    <span class="price">22</span>
                </li>
            </ul>
        </div>
    </section>
    <section id="formWrapper">
        <p>
            Συμπληρώστε τα παρακάτω στοιχεία και στείλτε μας τα χαρακτηριστικά που έχετε επιλέξει μπλα μπλα μπλα
        </p>

        <form id="sendForm" method="post">
            <div class="element">
                <label>Όνομα:</label>
                <input type="text" name="name" placeholder="Το όνομα σας.."/>
            </div>
            <div class="element">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Το εμαιλ σας.."/>
            </div>
            <div class="element">
                <label>Σχόλια:</label>
                <textarea name="name" placeholder="Τα σχόλια σας.."></textarea>
            </div>
            <div class="element">
                <label class="checkboxLabel">Αποστολή αντιγράφου στο email μου:</label>
                <input type="checkbox" name="sendCopy"/>
            </div>
            <input type="submit" value="Submit" name="submit"/>
        </form>
    </section>
</section>
<footer>
    Copyrights tade tade 2014 &copy;
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script src="js/main.js"></script>
<!--<script src="js/jquery.ui.touch-punch.min.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.HoverAlls-2.5.min.js"></script>-->
</body>
</html>
