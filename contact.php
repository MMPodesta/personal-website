<?php 
$pageTitle="Home";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('header.php');
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}
?>

<!------------body starts----------->

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5 style="color: white;">Dublin, Lucan</h5>
                </span>
            </div>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span>
                    <h5 style="color: white;">+353 83 365-4417</h5>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope-square"></i>
                <span>
                    <h5 style="color: white;">mauriciomurta13@hotmail.com</h5>
                </span>
            </div>
        </div>

        <div class="contact-col">
            <form action="contact.php" method="post">

                <!------------person Name----------->
                <input type="text" id="name" name="name" placeholder="Enter your name" 
                value="<?php
                if (isset($_POST['name']) && preg_match('/^[a-z ]{3,40}$/i', Pass_Input($_POST['name']))){
                    $name = ucfirst(strtolower(Pass_input($_POST['name'])));
                    echo $name;
                    $nameSet = true;
                }?>"><br>
                <div class='invalid'>
                    <?php 
                    if (!empty($_POST)){
                        if(!$nameSet)echo'<p style="color: red;">Invalid name Input!</p>';
                    }?>
                </div>



                <!------------email----------->
                <input type="email" id="mail" name="mail" placeholder="Enter email address" 
                value="<?php
                    
                if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                    $mail = Pass_input($_POST['mail']);
                    echo $mail;
                    $mailSet = true;
                }?>"><br>
                <div class='invalid'>
                    <?php 
                    if (!empty($_POST)){
                        if(!$mailSet)echo'<p style="color: red;">Invalid email Input!</p>';
                    }?>
                </div>

                <!------------message----------->
                <textarea rows="8" id="message" name="message" placeholder="Your Message Here" 
                ><?php
                if (isset($_POST['message']) && (strlen(Pass_input($_POST['message'])) <= 500)){
                    $message = Pass_input($_POST['message']);
                    echo $message;
                    $messageSet = true;
                }?></textarea><br>
                <div class='invalid'>
                    <?php 
                    if (!empty($_POST)){
                        if(!$messageSet)echo'<p style="color: red;">Invalid message Input!</p>';
                    }?>
                </div>
                
                <button type="submit" class="hero-btn blue-btn">Send Message</button>
            
            </form>
        </div>

        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if ALL user data is ready to go to database                
            if($nameSet && $messageSet && $mailSet && $phoneSet){

                //statement to insert parent data into database
                $sql = "INSERT INTO contact_us (name, email, phone, message)
                VALUES ('$name', '$mail', '$phone', '$message');";
                mysqli_query($conn,$sql);
                mysqli_close($conn);

                echo'<h4>Message sent successfully!</h4>';
            }
        }?>
        <!------------END Database interaction----------->
    </div>
</section>





<!------------body ends----------->
<?php
include_once('footer.php');
?>