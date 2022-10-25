// Include config file 
require_once 'config.php'; 
 
// Include Subscriber class 
require_once 'Subscriber.class.php'; 
$subscriber = new Subscriber(); 
 
if(!empty($_GET['email_verify'])){ 
    $verify_code = $_GET['email_verify']; 
    $con = array( 
        'where' => array( 
            'verify_code' => $verify_code 
        ), 
        'return_type' => 'count' 
    ); 
    $rowNum = $subscriber->getRows($con); 
    if($rowNum > 0){ 
        $data = array( 
            'is_verified' => 1 
        ); 
        $con = array( 
            'verify_code' => $verify_code 
        ); 
        $update = $subscriber->update($data, $con); 
        if($update){ 
            $statusMsg = '<p class="success">Your email address has been verified successfully.</p>'; 
        }else{ 
            $statusMsg = '<p class="error">Email verification failed, please try again.</p>'; 
        } 
    }else{ 
        $statusMsg = '<p class="error">You have clicked on the wrong link, please check your email and try again.</p>'; 
    } 
?> 
 

<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Email Verification with PHP by CodexWorld</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">

<!-- Stylesheet file -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body class="subs">
<div class="container">
    <div class="subscribe box-sizing">
        <div class="sloc-wrap box-sizing">
            <div class="sloc-content">
                <div class="sloc-text">
                    <div class="sloc-header"><?php echo $statusMsg; ?></div>
                </div>
                <a href="<?php echo $siteURL; ?>" class="cwlink">Go to Site</a>
            </div>
        </div>
    </div>
</div>