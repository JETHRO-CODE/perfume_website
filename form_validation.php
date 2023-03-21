<?php


if(isset($_POST['submit']))

{
    $your_name = test_input($_POST["your_name"]);
    $email = test_input($_POST["Your_email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    echo $your_name." <p style='color:green; font-weight:bold;'> Thank you for contacting us </p>";


}


else
{
    echo "";
}


?>

<form name="sentMessage" id="contactForm"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name"  name="your_name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"><span class="error"> <?php echo" *" .$your_nameErr;?></span></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" name="your_email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"><span class="error"> <?php echo "*" .$emailErr;?></span></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"><span class="error"> <?php echo "*" .$subjectErr;?></span></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"><span class="error"> <?php echo "*" .$messageErr;?></span></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                            </div>
                        </form>