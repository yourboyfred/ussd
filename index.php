<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];



if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome, Choose a Language \n Karibu, Chagua Lugha \n Leraika, ti giri lidere nage. \n";
    $response .= "1. English \n";
    $response .= "2. Kiswahili \n";
    $response .= "3. Samburu \n";
    $response .= "4. Embu \n";


} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Welcome to Afya Bora \n Please select a service \n";
    $response .= "1. Schedule Appointment  \n";
    $response .= "2. Health Education\n";
    $response .= "3. Delivery \n";
    $response .= "4. Health Centers \n";
    $response .= "5. Emergency \n";
    $response .= "0. exit \n";

} else if ($text == "3") {
    // Business logic for first level response
    $response = "CON Ngayútúrú looni Afya Bora \n  lóuukaa samankárí. \n";
    $response .= "1. Leeni kukitil enye. \n";
    $response .= "2. ng'amekwaane leesotin\n";
    $response .= "3. lokwan. \n";
    $response .= "4. lerepei. \n";
    $response .= "5. pokwe. \n";
    $response .= "0. onyare \n";    

} else if ($text == "4") {
    // Business logic for first level response
    $response = "CON Karibu Afya Bora \n Ndugukua niũhota riua rũmenyi. \n";
    $response .= "1. Thura Njohi-ini  \n";
    $response .= "2. karimi ka meciĩ ĩkũnyũrĩria.\n";
    $response .= "3. ugwaro \n";
    $response .= "4. Kĩhũta. \n";
    $response .= "5. kwirũri \n";
    $response .= "0. tũra \n";    

} else if ($text == "1*5") {
    // Business logic for first level response
    $response = "CON Emergency Options \n";
    $response .= "1. Request Ambulance  \n";
    $response .= "2. Emergency operation team\n";

} else if ($text == "1*1*1") {
    // Business logic for first level response
    $response = "CON Select health center \n";
    $response .= "1. Pendo healthcare  \n";
    $response .= "2. Imani health center\n";   
    
} else if ($text == "1*1*1*1") {
    // Business logic for first level response
    $response = "CON Select according to your schedule \n";
    $response .= "1. 9.00 AM - 12.00 PM  \n";
    $response .= "2. 2.00 PM - 5.00 PM \n";  
    $response .= "3. 7.00 PM - 11.00 PM \n"; 
    $response .= "4. 1.00 AM - 6.00 AM \n"; 

} else if ($text == "1*1*1*1*1") {
    // Business logic for first level response
    $response = "END Your appointment at Pendo was booked successfully. \n See you anytime between 9.00 AM to 12.00 PM \n";

} else if ($text == "1*1*1*1*2") {
    // Business logic for first level response
    $response = "END Your appointment at Pendo was booked successfully. \n See you anytime between 2.00 PM to 5.00 PM \n";

} else if ($text == "1*1*1*1*3") {
    // Business logic for first level response
    $response = "END Your appointment at Pendo was booked successfully. \n See you anytime between 7.00 PM to 11.00 PM \n";
        
} else if ($text == "1*1*1*1*4") {
    // Business logic for first level response
    $response = "END Your appointment at Pendo was booked successfully. \n See you anytime between 1.00 AM to 6.00 AM \n";

} else if ($text == "1*1*1*2*1") {
    // Business logic for first level response
    $response = "END Your appointment at Imani was booked successfully. \n See you anytime between 9.00 AM to 12.00 PM \n";

} else if ($text == "1*1*1*2*2") {
    // Business logic for first level response
    $response = "END Your appointment at Imani was booked successfully. \n See you anytime between 2.00 PM to 5.00 PM \n";

} else if ($text == "1*1*1*2*3") {
    // Business logic for first level response
    $response = "END Your appointment at Imani was booked successfully. \n See you anytime between 7.00 PM to 11.00 PM \n";
        
} else if ($text == "1*1*1*2*4") {
    // Business logic for first level response
    $response = "END Your appointment at Imani was booked successfully. \n See you anytime between 1.00 AM to 6.00 AM \n";
    


} else if ($text == "1*1*1*2") {
    // Business logic for first level response
    $response = "CON Select according to your schedule \n";
    $response .= "1. 9.00 AM - 12.00 PM  \n";
    $response .= "2. 2.00 PM - 5.00 PM \n";  
    $response .= "3. 7.00 PM - 11.00 PM \n"; 
    $response .= "4. 1.00 AM - 6.00 AM \n";    

} else if ($text == "1*5*1") {
    // Business logic for first level response
    $response = "END Request Ambulance \n Imani Ambulance Services :: call 765 \n Pendo Ambulance Services :: call 654";
   
} else if ($text == "1*5*2") {
    // Business logic for first level response
    $response = "END Emergency operation Teams \n Police :: call 999 \n Fire fighters :: call 999";
   

} else if ($text == "1*0") {
    // Business logic for first level response
    $response  = "CON Welcome, Choose a Language \n Karibu, Chagua Lugha \n";
    $response .= "1. English \n";
    $response .= "2. Kiswahili \n";
    $response .= "3. Samburu \n";
    $response .= "4. Embu \n";   

} else if ($text == "2") {
    // Business logic for first level response
    $response = "CON Karibu Linda \n Chagua Huduma  \n";
    $response .= "1. Panga Muda wa Mkutano. \n";
    $response .= "2. Elimu ya Afya\n";
    $response .= "3. Utoaji \n";
    $response .= "4. Hospitali \n";
    $response .= "0. Toka \n";    

// } else if ($text == "0") {
//     // Business logic for first level response
//     // This is a terminal request. Note how we start the response with END
//     $response = "END Your phone number is ".$phoneNumber;


} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    //$loanamount  = "Kes 4000";

    // This is a terminal request. Note how we start the response with END
    $response = " CON Schedule Appointment \n Select type\n";
    
    $response .= "1. Book Appointment \n";
    $response .= "2. Cancel Appointment \n";
    $response .= "0. Back \n";
    $response .= "00.Home \n";


}  else if($text == "1*1*2") { 
    // This is a second level response where the user selected 1 in the first instance
    // $loanamount  = "Kes 2000";

    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you, Welcome Again \n";
    
    // $response .= "1. Yes \n";
    // $response .= "2. No \n";
    // $response .= "0. Back \n";
    // $response .= "00.Home \n";


} else if($text == "1*2") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 1000";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Health Education \n";
    
    $response .= "1. Cancer \n";
    $response .= "2. HIV-AIDS \n";
    $response .= "3. Child health \n";
    $response .= "4. Events \n";


} else if($text == "1*3") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Delivery \n";
    
    $response .= "1. Order Delivery \n";
    $response .= "2. Cancel Delivery \n";
    $response .= "3. Delivery History \n";
    $response .= "00.Home \n";

} else if($text == "1*3*1") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Order Delivery \n choose a health center \n";
    
    $response .= "1. Pendo health center \n";
    $response .= "2. Imani healthcare \n";
    $response .= "00.Home \n";

} else if($text == "1*3*2") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END  YOU HAVE SUCCESSFULLY CANCELLED YOUR ORDER\n";
    
        

} else if($text == "1*3*1*1") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON What do you want to order from Pendo \n";
    
    $response .= "1. PainKillers \n";
    $response .= "2. antibiotics \n";
    $response .= "00.Home \n";  

} else if($text == "1*3*1*2") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON What do you want to order from Imani \n";
    
    $response .= "1. PainKillers \n";
    $response .= "2. antibiotics \n";
    $response .= "00.Home \n";      
    
} else if($text == "1*3*1*1*1") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END You have ordered Painkillers from Pendo health center Successfully \n You will be contacted for more information \n";
   
} else if($text == "1*3*1*2*1") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END You have ordered Painkillers from Imani healthcare Successfully \n You will be contacted for more information \n";
   
} else if($text == "1*3*1*2*2") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END You have ordered Antibiotics from Imani healthcare Successfully \n You will be contacted for more information \n";
   


} else if($text == "1*3*1*1*2") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END You have ordered Antibiotics from Pendo healthcare Successfully \n You will be contacted for more information \n";
       
     

} else if($text == "1*4") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "CON Health Centers \n";
    
    $response .= "1. Get Health Centers around me \n";
        


} else if($text == "1*4*1") { 
    // This is a second level response where the user selected 1 in the first instance
   // $loanamount  = "Kes 500";

    // This is a terminal request. Note how we start the response with END
    $response = "END The following Health Centers are around you \n 1. Imani health center \n 2. Pendo Healthcare";
    

} elseif($text == '1*1*1'){
   
$response = "CON Select a date for your appointment";

}elseif($text == '1*2*1'){
   
    $response = "END Cancer awareness saves lives. Regular screenings, healthy lifestyles, and early detection are crucial. Together, let's spread knowledge, support survivors, honor those lost, and work towards a cancer-free future. \n for more information \n contact : 1-800-227-2345";

}elseif($text == '1*2*2'){
   
    $response = "END HIV-AIDS awareness is crucial to combat the epidemic. Educate yourself and others. Get tested regularly. Support those affected. Challenge stigma. Promote safe practices. Together, we can end HIV-AIDS. \n for more information \n contact : 1-800-448-0440";
   
}elseif($text == '1*2*3'){
   
    $response = "END Child Health Awareness is crucial for a thriving future. It promotes preventive care, immunizations, nutrition, and early detection of diseases. Investing in children's well-being ensures a healthier and brighter world. \n for more information \n contact : 0800 221 0800";
  
}elseif($text == '1*2*4'){
   
    $response = "END FUTURE EVENTS WILL BE POSTED HERE";
  
// }elseif($text == '4'){
   
//     $response = "END Loan Term: the shortest tenor is 15 days, the longest is 30 days.

//     Loan request: Need to be at least 18 years old or above.
    
//     Late loan repayments automatically incur a fee of 1.5 % per day.
    
//     If listed on CRB  your credit score might be affected for higher amounts. Regardless of  payment processing fee";
  
}
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
