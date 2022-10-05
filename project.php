<?php 
$pageTitle="Projects";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('header.php');
?>
<!------------body starts----------->

<section class="main">
    <div class="wrapper">
        <div class="row">
            <div class="picture">
                <img src="images/boomerang.PNG">
            </div>
            <div class="text">
                <h1>Boomerang Childcare</h1>
                <a href="https://knuth.griffith.ie/~s3065078/ass03/"><h4>Try it out here</h4></a> 
                <p>Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div class="row">
            <div class="picture">
                <img src="images/boomerang.PNG">
            </div>
            <div class="text">
                <h1>project name</h1>
                <h4>Try it out here</h4>
                <p>Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</section>

<!------------body ends----------->
<?php
include_once('footer.php');
?>