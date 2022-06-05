<?php 
$pageTitle="Home";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('header.php');
?>
<!------------body starts----------->
<div class="landing-image">
    <div class="landing-text">
        <h1>Test Main</h1>
        <p>Lorem ipsum dolor sit amet, consectetur 
        adipiscing elit, sed do eiusmod tempor <br> 
        incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea  <br> commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat <br> cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est 
        laborum.</p>
        <button class="btn-main">Find Out More</button>
        
        <div class="profile-box">
            <div class="left">
                <h2>left column</h2>
                <span class="iconify" data-icon="simple-icons:tryhackme"></span>
                <a href="https://tryhackme.com/p/gangsta6">TryHackMe</a>

            </div>
            <div class="right">
                <h2>right column</h2>
                <span class="iconify" data-icon="akar-icons:github-fill"></span>
                <a href="https://github.com/MMPodesta">Github</a>

            </div>
        </div>
    </div>
</div>






<!------------body ends----------->
<?php
include_once('footer.php');
?>