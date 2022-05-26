<?php
$path = './';
$title = 'About';
include $path . 'header.php';
?>

<div class="headerText">
    <h1>OTHER</h1>
</div>


<!-- Header ends -->

<!-- content section -->

<diV class="content">
    <div class="TitleText">
        <h1>About Page</h1>
    </div>

    <p>Welcome to the about page, here you can see the progress that has been made since the last time I have worked on this project</p>

    <h2>List of things added</h2>

    <p>A fully working Forum Page. Users can leave a note to the site that is stored into a database alongside with their ID, first and last name, message and time added</p>
    <p>This information is pulled from the database back onto the site and uptaded as a new entry is added. (Previous entries still remain on the site)</p>
    <p>There is a Javascript validation feature where the site does not allow the user to send an emprty field, such as name or message to the database</p>
    <p>Headers and footers are implemented using PHP to every page of this website. there should be no repeating code</p>
    <p>a slideshow of images was created using HTML CSS and JAVASCRIPT technologies. It can be seen here below, for demonstration</p>
    <p>A DHTML component is implemented in a form of animating text that is clickable, when clicked it leads you to another page of the website. It can be found on the homepage of the website as well as here below, for demonstration</p>

    <!-- JAVASRIPT SLIDESHOW STARTS -->

    <div class="slideContainer">

        <div class="slider">

            <div class="graffitis">

                <div class="graffiti2 active">
                    <img src="https://people.rit.edu/az4739/ISTE240/project1/Media/graf.jpg" />
                </div>

                <div class="graffiti2">
                    <img src="https://people.rit.edu/az4739/ISTE240/project1/Media/cafePrilaz.jpg" />
                </div>

                <div class="graffiti2">
                    <img src="https://people.rit.edu/az4739/ISTE240/project1/Media/suta.jpg" />
                </div>

                <div class="graffiti2">
                    <img src="https://people.rit.edu/az4739/ISTE240/project1/Media/staklena.jpg" />
                </div>

            </div>

            <div id="slideshow_dugme_right" class="dugme" onclick='slideshow()'></div>
            <div id="slideshow_dugme_left" class="dugme" onclick='slideshow()'></div>

            <div class="slider__nav">
                <div class="slideshow_dugme active" onclick='slideshow()'></div>
                <div class="slideshow_dugme" onclick='slideshow()'></div>
                <div class="slideshow_dugme"></div>
                <div class="slideshow_dugme"></div>
            </div>
        </div>
    </div>

    <!-- JAVASRIPT SLIDESHOW ENDS -->

</diV>

<diV class="content">

<h2>DHTML EXAMPLE</h2>
    <p>
        Hello traveler, welcome to Mostar, Bosnia and herzegovina. I don't really care why you visited us but I am here to make your visit spectacular. Now before all the nice places and events that you will see, first you need to know where you have come. Mostar
        is a place that lived through a lot and its people are one of the most interesting and annoying people in the world. To find out more, I strongly recommend visiting this page, just so you can understand why we don't care what the purpose of
        your visit is. <a href="https://people.rit.edu/az4739/ISTE240/project1/culture.html" class="animation"><span>CULTURE</span></a>
    </p>
    <p>

        Now we can continue. Mostar is a small place located in southern Bosnia and Herzegovina, in the heart of Herzegovina to be exact. There it is very hot during summer, very cold during winter, and okay during spring. To learn more about this geographical
        anomaly called Herzegovina click here<a href="https://people.rit.edu/az4739/ISTE240/project1/herzegovina.html" class="animation"><span>HERZEGOVINA</span></a>
    </p>
    <p> What makes Mostar unique from other cities around the area is its rich history, going through a lot of changes, different types of government and situations. <a href="https://people.rit.edu/az4739/ISTE240/project1/history.html" class="animation2"><span>HISTORY</span></a></p>
    <p>This made the people of Mostar very interesting and hard to understand. After all they went through, people had to find their inner peace over and over again as their surroundings changed. There are many places scattered around Mostar that serve
        as safe haven to all the people that just want to enjoy life. One of those places is <a href="https://people.rit.edu/az4739/ISTE240/project1/cafeDeAlma.html" class="animation2"><span>CAFE DE ALMA</span></a></p>
</diV>


<!-- content section end -->

<!-- content with pictures -->
<img src="https://people.rit.edu/az4739/ISTE240/project1/Media/graf.jpg" class="graffiti" alt="">

<!-- content with pictures end-->


<?php
$path = './';
include $path . 'footer.php';
?>