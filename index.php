<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="calculator">
            <div class="section">
                <div class="selectionField">
                    <select id="selectItems">
                        <option value="">Number Of Pods</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                        <option value="350">350</option>
                        <option value="400">400</option>
                        <option value="450">450</option>
                        <option value="500">500</option>
                        <option value="550">550</option>
                        <option value="600">600</option>
                        <option value="650">650</option>
                        <option value="700">700</option>
                        <option value="750">750</option>
                        <option value="800">800</option>
                        <option value="850">850</option>
                        <option value="900">900</option>
                        <option value="950">950</option>
                        <option value="1000">1000</option>
                    </select>
                </div>
                <div class="checkboxField">
                    <h4>Items</h4>
                    <div class="row">
                        <label>Reduced site defect rectification <input type="checkbox" class="check" data-name="Reduced site defect rectification" data-cost="50"
                                data-benefit="200" data-hours="4">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduce P & G costs <input type="checkbox" class="check" data-name="Reduce P & G costs" data-cost="50" data-benefit="150"
                                data-hours="3">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced workforce
                            costs <input type="checkbox" class="check" data-name="Reduced workforce costs" data-cost="25" data-benefit="25" data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced waste costs <input type="checkbox" class="check" data-name="Reduced waste costs" data-cost="50" data-benefit="50"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced site
                            management costs <input type="checkbox" class="check" data-name="Reduced site management costs" data-cost="50" data-benefit="400"
                                data-hours="8">
                        </label>
                    </div>
                    <div class="row">
                        <label>Eliminate wet areas
                            theft and damage <input type="checkbox" class="check" data-name="Eliminate wet areas theft and damage" data-cost="25" data-benefit="25"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduce contract
                            administration time <input type="checkbox" class="check" data-name="Reduce contract administration time" data-cost="40" data-benefit="160"
                                data-hours="4">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced cleaning
                            costs <input type="checkbox" class="check" data-name="Reduced cleaning costs " data-cost="50" data-benefit="50" data-hours="1">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduction in site
                            program <input type="checkbox" class="check" data-name="Reduction in site program" data-cost="50" data-benefit="1250"
                                data-hours="25">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduce risk of
                            finishes program delays <input type="checkbox" class="check" data-name="Reduce risk of finishes program delays" data-cost="50"
                                data-benefit="50" data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Earlier progress
                            payments <input type="checkbox" class="check" data-name="Earlier progress payments" data-cost="0" data-benefit="195"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced scope of
                            works for onsite
                            trades <input type="checkbox" class="check" data-name="Reduced scope of works for onsite trades" data-cost="300" data-benefit="300"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduce skilled
                            labour shortages <input type="checkbox" class="check" data-name="Reduce skilled labour shortages" data-cost="300" data-benefit="300"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced
                            management time
                            during construction <input type="checkbox" class="check" data-name="Reduced management time during construction" data-cost="0" data-benefit="100"
                                data-hours="0">
                        </label>
                    </div>
                    <div class="row">
                        <label>Reduced
                            management time
                            during DLP <input type="checkbox" class="check" data-name="Reduced management time during DLP" data-cost="50" data-benefit="100"
                                data-hours="2">
                        </label>
                    </div>

                </div>
                <div class="selectionField">
                    <select id="selectApplication">
                        <option value="">Application</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Aged Care">Aged Care</option>
                        <option value="Student Accommodation">Student Accommodation</option>
                    </select>
                </div>
            </div>

            <div class="result">
                <div class="h3">
                    <h3>Estimated hourly cost or cost per bathroom: <span id="totalOne">0</span></h3>
                    <h3>Estimated benefit to client per bathroom: <span id="totalTwo">0</span></h3>
                    <h3>Estimated number of man hours saved per bathroom: <span id="totalHours">0</span></h3>
                </div>
            </div>
        </div>
        <div class="reportFrom">
            <form action="" method="post" id="enquireForm">
                <div class="row">
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                </div>

                <textarea rows="4" cols="50" placeholder="Message..." name="message" id="message"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>

</html>

  <?php 
                    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $to = "abcdamit44@gmail.com";

    $subject = $name;

    // $txt = "Name = ".$name."\r\n Email = ".$email."\r\n Message = ".$msg;
    $txt = $name." ".$email." ".$msg;

    // Set content-type header for sending HTML email 
    $headersAdmin = "MIME-Version: 1.0" . "\r\n"; 
    $headersAdmin .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    // Additional headers 
    $headersAdmin .= 'From: Admin'.'<'.$to.'>' . "\r\n";
    $headersAdmin .= 'Reply-To: Admin'.'<'.$to.'>' . "\r\n";

        // Set content-type header for sending HTML email 
    $headersUser = "MIME-Version: 1.0" . "\r\n"; 
    $headersUser .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    // Additional headers 
    $headersUser .= 'From: '.$name.'<'.$email.'>' . "\r\n";
    $headersUser .= 'Reply-To: '.$name.'<'.$email.'>' . "\r\n";

    $replyTo = $txt;
    if($email != NULL){
        mail($to,$subject,$txt,$headersAdmin);
        mail($email, "Report",$replyTo,$headersUser);
        echo "<script>
            alert('Message Sent!')
            location.href = 'https://roi.krishavinfotech.com/calculator/';
        </script>";
    }
                    
    ?>