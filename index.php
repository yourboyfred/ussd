<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$service_code = $_POST["service_code"];
$mobile_number = $_POST["mobile_number"];
$message        = $_POST["message"];


if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome to PROFTIKA VENTURES \n";
   
   


} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Your loan limit is 4000 \n Enter amount you want to borrow \n";
    $response .= "1. 4000 \n";
    $response .= "2. 2000 \n";
    $response .= "3. 1000 \n";
    $response .= "4. 500 \n";
    $response .= "0. exit \n";

} else if ($text == "0") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your phone number is ".$phoneNumber;

} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $loanamount  = "Kes 4000";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Loan amount Kes 4000 \n Loan interest Kes 320 \n  Processing fee Kes 95 \n  Repayment period 15 to 30 days \n APPLY LOAN NOW \n";
    
    $response .= "1. Yes \n";
    $response .= "2. No \n";
    $response .= "0. Back \n";
    $response .= "00.Home \n";


}  else if($text == "1*2") { 
    // This is a second level response where the user selected 1 in the first instance
    $loanamount  = "Kes 2000";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Loan amount Kes 2000 \n Loan interest Kes 160 \n  Processing fee Kes 95 \n  Repayment period 15 to 30 days \n APPLY LOAN NOW \n";
    
    $response .= "1. Yes \n";
    $response .= "2. No \n";
    $response .= "0. Back \n";
    $response .= "00.Home \n";


} else if($text == "1*3") { 
    // This is a second level response where the user selected 1 in the first instance
    $loanamount  = "Kes 1000";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Loan amount Kes 1000 \n Loan interest Kes 80 \n  Processing fee Kes 95 \n  Repayment period 15 to 30 days \n APPLY LOAN NOW \n";
    
    $response .= "1. Yes \n";
    $response .= "2. No \n";
    $response .= "0. Back \n";
    $response .= "00.Home \n";


} else if($text == "1*4") { 
    // This is a second level response where the user selected 1 in the first instance
    $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Loan amount Kes 500 \n Loan interest Kes 50 \n  Processing fee Kes 95 \n  Repayment period 15 to 30 days \n APPLY LOAN NOW \n";
    
    $response .= "1. Yes \n";
    $response .= "2. No \n";
    $response .= "0. Back \n";
    $response .= "00.Home \n";


} elseif($text == '1*1*1'){
   
$response = "END payment of 95 has been initiated,";

}elseif($text == '1*2*1'){
   
    $response = "END payment of 95 has been initiated, wait for the STK push";
   
}elseif($text == '1*3*1'){
   
    $response = "END payment of 95 has been initiated, wait for the STK push";
  
}elseif($text == '1*4*1'){
   
    $response = "END payment of 95 has been initiated, wait for the STK push";
  
}elseif($text == '4'){
   
    $response = "END Loan Term: the shortest tenor is 15 days, the longest is 30 days.

    Loan request: Need to be at least 18 years old or above.
    
    Late loan repayments automatically incur a fee of 1.5 % per day.
    
    If listed on CRB  your credit score might be affected for higher amounts. Regardless of  payment processing fee";
  
}
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
