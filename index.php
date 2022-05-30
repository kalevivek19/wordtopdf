<?php

require_once('vendor/autoload.php');

use Ilovepdf\Ilovepdf;

$template_file_name = 'sample.docx';
$rand_no = time();
$fileName = $rand_no . ".docx";
$full_path = $fileName;

$ilovepdf = new Ilovepdf('project_public_5a4f4f8fda8f6e7b8dfe8b3fe49d71eb_PozmZ0e96ceb0f93ac6e1d8b4a494989f1522', 'secret_key_e968672bb6bd33c30917f88367fad4e8_wQ6Yzd20af5ec0578ba9e7de5a22dbe2ff54c');
$ilovepdf->verifySsl(false);
$myTaskConvertOffice = $ilovepdf->newTask('officepdf');

try {
    copy($template_file_name, $full_path);

    $zip_val = new ZipArchive;
    if ($zip_val->open($full_path) == true) {
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);

        $timestamp = date('d-M-Y H:i:s');
        $companyLogo = 'Logo';
        $companyAddress = 'Sample Company Address';
        $companyEmail = 'vivek@claimtech.com';
        $companyFax = '+19766766919';
        $companyPhone = '+19766766919';
        $companyTextNumber = '+19766766919';
        $todaysDate = date('m/d/Y');
        $customerName = 'Vivek Kale';
        $customerAddress = 'Houston, Texas';
        $fundAmount = '1000';
        $customerEmail = 'vivek@claimtech.com';

        $purchasePrice = '1000';
        $date1 = '1 July 2022';
        $date2 = '2 July 2022';
        $date3 = '3 July 2022';
        $date4 = '4 July 2022';
        $date5 = '5 July 2022';
        $date6 = '6 July 2022';
        $date7 = '7 July 2022';
        $date8 = '8 July 2022';
        $date9 = '9 July 2022';
        $date10 = '10 July 2022';

        $claim1 = '1000';
        $claim2 = '2000';
        $claim3 = '3000';
        $claim4 = '4000';
        $claim5 = '5000';
        $claim6 = '6000';
        $claim7 = '7000';
        $claim8 = '8000';
        $claim9 = '9000';
        $claim10 = '10000';
        $totalTo = '1000';
        $customerSignature = 'Vivek Kale';
        $transactionId = '123467';

        $sellarAddress = '32, My Stree,New York ,NY, 10001';
        $sellarEmail = 'vivek@claimtech.com';
        $sellarPhone = '+19766766919';

        $companySignature = 'Vivek Kale';
        $lawFirmName = 'Sample Law Firm';
        $attorneySignature = 'Vivek Kale';
        $finalizedDate = '6 July 2022';

        $generationDate = '6 July 2022';
        $transactionNumber = '96767434346';

        $companyStreet = '32, My Stree,New York ,NY, 10001';
        $companyCity = 'New York';
        $companyState = 'NY';
        $companyZip = '10001';
        $callUsNumber = '+174345345';

        $uspsStreetAddress = '32, My Stree';
        $uspsApartment = 'Kingston';
        $uspsCity = 'New York';
        $uspsState = 'NY';
        $uspsZip = '10001';

        $cirAddress = '32, My Stree';
        $cirCurrentAddress = '32, My Stree';
        $cirCity = 'New York';
        $cirState = 'NY';
        $cirZip = '10002';
        $cirTelephone = '1234567890';
        $cirDOB = '19 Sep 1988';

        $purchaseAggreementAmount = '9999';
        $attorneyName = 'Vivek Kale';
        $attorneyFirm = 'Sample Firm';

        $purchaseAggreementCompAddr = '9999';
        $companyToEmail = 'Vivek Kale';
        $sellerAddr = 'Sample Seller Address';
        $sellerEmail = 'sample@email.com';
        $sellerPhone = 123465790;
        $caseNumber = '1';

        $typeofCourt = 'District Court';
        $courtCounty = 'Broome County';
        $courtState = 'NY';

        $attorneyFee = 1111;
        $beforeTrialPercent = 10;
        $afterTrialPercent = 20;
        $medicalLienHoderName = 'Vivek Kale';
        $medicalLienHoderAmount = 200;
        $childSupportLienHolderName = 'Vivek Kale';
        $childSupportLienHolderAmount = 300;
        $otherFunderName = 'Vivek Kale';
        $otherFundingAmount = 100;

        $effectiveDate = '6 July 2022';
        $attorneyAddress = '32, My Stree,New York ,NY, 10001';
        $attorneyEmail = 'vivek@claimtech.com';

        $dbaOne = 'Vivek';
        $dbaTwo = 'Vivek';
        $dbaThree = 'Vivek';

        $companyPrivacyEmail = 'privacy@sample.com';
        $companyPrivacyPhone = +1124567890;
        $payoffAmount = '7000';
        
        $callUs = 1234567890;
        $extension = 123;

        $companyLegalName = 'Sample Company';
        $sellerName = 'Vivek Kale';
        
        
        $message = str_replace('COMPANYSTREET', $companyStreet, $message);
        $message = str_replace('COMPANYCITY', $companyCity, $message);
        $message = str_replace('COMPANYSTATE', $companyState, $message);
        $message = str_replace('COMPANYZIP', $companyZip, $message);
        $message = str_replace('Company Logo', $companyLogo, $message);
        $message = str_replace('Company Address', $companyAddress, $message);
        $message = str_replace('Company Fax', $companyFax, $message);
        $message = str_replace('Company Phone', $companyPhone, $message);
        $message = str_replace('COMPANYLOGO', $companyLogo, $message);
        $message = str_replace('COMPANYADDRESS', $companyAddress, $message);
        $message = str_replace('COMPANYFAX', $companyFax, $message);
        $message = str_replace('COMPANYPHONE', $companyPhone, $message);
        $message = str_replace('Company Email', $companyEmail, $message);
        $message = str_replace('Company Text Number', $companyTextNumber, $message);
        $message = str_replace('DATE', $todaysDate, $message);
        $message = str_replace('Customer Name', $customerName, $message);
        $message = str_replace('Customer Address', $customerAddress, $message);
        $message = str_replace('customerNameTwo', $customerName, $message);
        $message = str_replace('fundAmount', $fundAmount, $message);
        $message = str_replace('PURCHASEPRICE', $purchasePrice, $message);
        $message = str_replace('D1', $date1, $message);
        $message = str_replace('D2', $date2, $message);
        $message = str_replace('D3', $date3, $message);
        $message = str_replace('D4', $date4, $message);
        $message = str_replace('D5', $date5, $message);
        $message = str_replace('D6', $date6, $message);
        $message = str_replace('D7', $date7, $message);
        $message = str_replace('D8', $date8, $message);
        $message = str_replace('D9', $date9, $message);
        $message = str_replace('10D', $date10, $message);
        $message = str_replace('CLAIM1', $claim1, $message);
        $message = str_replace('CLAIM2', $claim2, $message);
        $message = str_replace('CLAIM3', $claim3, $message);
        $message = str_replace('CLAIM4', $claim4, $message);
        $message = str_replace('CLAIM5', $claim5, $message);
        $message = str_replace('CLAIM6', $claim6, $message);
        $message = str_replace('CLAIM7', $claim7, $message);
        $message = str_replace('CLAIM8', $claim8, $message);
        $message = str_replace('CLAIM9', $claim9, $message);
        $message = str_replace('TENCLAIM', $claim10, $message);
        $message = str_replace('TOTALTO', $totalTo, $message);
        $message = str_replace('USPS-STREETADDRESS', $uspsStreetAddress, $message);
        $message = str_replace('USPS-APARTMENT', $uspsApartment, $message);
        $message = str_replace('USPS-CITY', $uspsCity, $message);
        $message = str_replace('STATEUSPS', $uspsState, $message);
        $message = str_replace('USPS-ZIP', $uspsZip, $message);
        $message = str_replace('CR-CURRENT-ADDR', $cirAddress, $message);
        $message = str_replace('CR-CITY', $cirCity, $message);
        $message = str_replace('CR-STATE', $cirState, $message);
        $message = str_replace('CR-ZIP', $cirZip, $message);
        $message = str_replace('CR-PHONE', $cirTelephone, $message);
        $message = str_replace('CR-DOB', $cirDOB, $message);
        $message = str_replace('PA-AMOUNT', $cirAddress, $message);
        $message = str_replace('PA-ATTORNEY', $attorneyName, $message);
        $message = str_replace('ATTORNEYFIRM', $attorneyFirm, $message);
        $message = str_replace('PA-COMPANYADDR', $purchaseAggreementCompAddr, $message);
        $message = str_replace('PA-EMAILTOCOMPANY', $companyToEmail, $message);
        $message = str_replace('SELLERADDR', $sellerAddr, $message);
        $message = str_replace('SELLEREMAIL', $sellerEmail, $message);
        $message = str_replace('SELLERPHONE', $sellerPhone, $message);
        $message = str_replace('CASENUMBER', $caseNumber, $message);
        $message = str_replace('COURTTYPE', $typeofCourt, $message);
        $message = str_replace('COUNTY', $courtCounty, $message);
        $message = str_replace('COURTSTATE', $courtState, $message);
        $message = str_replace('ATTORNEYFEE', $attorneyFee, $message);
        $message = str_replace('BEFORETRIAL', $beforeTrialPercent, $message);
        $message = str_replace('AFTERTRIAL', $afterTrialPercent, $message);
        $message = str_replace('MEDICALLIENHOLDERNAME', $medicalLienHoderName, $message);
        $message = str_replace('MEDICALLIENHOLDERAMOUNT', $medicalLienHoderAmount, $message);
        $message = str_replace('CHILDLIENHOLDERNAME', $childSupportLienHolderName, $message);
        $message = str_replace('CHILDLIENHOLDERAMOUNT', $childSupportLienHolderAmount, $message);
        $message = str_replace('OTHERLIENHOLDERNAME', $otherFunderName, $message);
        $message = str_replace('OTHERLIENHOLDERAMOUNT', $otherFundingAmount, $message);
        $message = str_replace('MODIFIEDAT', $finalizedDate, $message);
        $message = str_replace('EFFECTIVEAS', $effectiveDate, $message);
        $message = str_replace('ATTORNEYADDRESS', $attorneyAddress, $message);
        $message = str_replace('ATTORNEYEMAIL', $attorneyEmail, $message);
        $message = str_replace('DBAONE', $dbaOne, $message);
        $message = str_replace('DBATWO', $dbaTwo, $message);
        $message = str_replace('DBATHREE', $dbaThree, $message);
        $message = str_replace('COMPANYPRIVACYEMAIL', $companyPrivacyEmail, $message);
        $message = str_replace('COMPANYPRIVACYPHONE', $companyPrivacyPhone, $message);
        $message = str_replace('PAYOFFAMOUNT', $payoffAmount, $message);
        $message = str_replace('CALLUS', $callUs, $message);
        $message = str_replace('EXTENSION', $extension, $message);
        $message = str_replace('CUSTOMEREMAIL', $customerEmail, $message);     
        $message = str_replace('COMPANYLEGALNAME', $companyLegalName, $message);       
        $message = str_replace('SELLERNAME', $sellerName, $message);
        $message = str_replace("TRANSACTIONID", $transactionId, $message);
        $message = str_replace("[", '', $message);
        $message = str_replace("]", '', $message);
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();

        //Create pdf file
        $file1 = $myTaskConvertOffice->addFile($fileName);
        $myTaskConvertOffice->execute();
        $myTaskConvertOffice->download();

        //Download file
        $file_url = $rand_no . '.pdf';
        header("Content-disposition: attachment; filename=" . $file_url);
        header("Content-type: application/pdf");
        readfile($file_url);
        unlink($fileName);
        unlink($file_url);
    }
} catch (Exception $exc) {
    $error_message = "Error creating the PDF Document";
    var_dump($exc);
}