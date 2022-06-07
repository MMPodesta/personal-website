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
        <button class="btn-main">Get In Touch</button>
        
        <ul class="profile-box">

            <li>
                <span class="iconify" data-icon="simple-icons:tryhackme" data-width="75" data-height="75"></span>
                <a href="https://tryhackme.com/p/gangsta6">TryHackMe</a>
            </li>
            <li>
                <span class="iconify" data-icon="simple-icons:hackerrank" data-width="75" data-height="75"></span>
                <a href="https://www.hackerrank.com/mauriciomurta13">HackerRank</a>
            </li>
            <li>
                <span class="iconify" data-icon="akar-icons:github-fill" data-width="75" data-height="75"></span>
                <a href="https://github.com/MMPodesta">Github</a>
            </li>
            <li>
                <span class="iconify" data-icon="mdi:alpha-p-circle" data-width="75" data-height="75"></span>
                <a href="https://play.picoctf.org/users/gangsta6">picoCTF</a>
            </li>

        </ul>
    </div>
</div>






<!------------body ends----------->
<?php
include_once('footer.php');
?>