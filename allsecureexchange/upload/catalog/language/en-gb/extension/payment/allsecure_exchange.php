<?php
$_['order_cancelled'] = 'Order was canceled.';
$_['order_error'] = 'An error occurred during the payment process. Please try again.';
$_['order_on_hold'] = 'Awaiting capture/void.';
$_['button_confirm'] = 'Confirm Order';

$_['redirect_text'] = 'You are being redirected. Please wait.';
$_['loading_text'] = 'Payment form is loading.';

$_['card_holder'] = 'Card Holder';
$_['card_number'] = 'Card Number';
$_['card_ccv'] = 'CCV';
$_['card_expiry_month'] = 'Expiry Month';
$_['card_expiry_year'] = 'Expiry Year';

/* Payment Success Page */
$_['payment_success_allsecure_exchange_heading_title'] = 'Your order has been successfully processed!';
$_['transaction_details'] = 'Transaction details';
$_['transaction_type'] = 'Transaction type';
$_['transaction_payment_method'] = 'Payment method';
$_['transaction_amount'] = 'Amount';
$_['transaction_authcode'] = 'Authorization';

/* Card decline messages */
$_['Error1000'] = 'CONFIG ERROR. Some fundamental error in your request';
$_['Error1001'] = 'CONFIG ERROR. The upstream system responded with an unknown response';
$_['Error1002'] = 'CONFIG ERROR. Request data are malformed or missing';
$_['Error1003'] = 'CONFIG ERROR. Transaction could not be processed';
$_['Error1004'] = 'CONFIG ERROR. The request signature you provided was wrong';
$_['Error1005'] = 'CONFIG ERROR. The XML you provided was malformed or invalid';
$_['Error1006'] = 'CONFIG ERROR. Preconditions failed, e.g. capture on a failed authorize';
$_['Error1007'] = 'CONFIG ERROR. Something is wrong your configuration, please contact your integration engineer';
$_['Error1008'] = 'CONFIG ERROR. Unexpected system error';
$_['Error9999'] = 'CONFIG ERROR. We received an error which is not (yet) mapped to a better error code';
$_['Error2001'] = 'Account closed. The customer cancelled permission for his payment instrument externally';
$_['Error2002'] = 'User cancelled. Transaction was cancelled by customer';
$_['Error2003'] = 'Transaction declined. Please try again later or change the card';
$_['Error2004'] = 'Quota regulation. Card limit reached';
$_['Error2005'] = 'Transaction expired. Customer took to long to submit his payment info';
$_['Error2006'] = 'Insufficient funds. Card limit reached';
$_['Error2007'] = 'Incorrect payment info. Double check and try again';
$_['Error2008'] = 'Invalid card. Try with some other card';
$_['Error2009'] = 'Expired card. Try with some other card';
$_['Error2010'] = 'Invalid card. Call your bank immediately';
$_['Error2011'] = 'Unsupported card. Try with some other card';
$_['Error2012'] = 'Transaction cancelled';
$_['Error2013'] = 'Transaction declined. Please try again later or call your bank';
$_['Error2014'] = 'Transaction declined. Please try again later or call your bank';
$_['Error2015'] = 'Transaction declined. Please try again later or call your bank';
$_['Error2016'] = 'Transaction declined. Please try again later or call your bank';
$_['Error2017'] = 'Invalid IBAN. Double check and try again';
$_['Error2018'] = 'Invalid BIC. Double check and try again';
$_['Error2019'] = 'Customer data invalid. Double check and try again';
$_['Error2020'] = 'CVV required. Double check and try again';
$_['Error2021'] = '3D-Secure Verification failed. Please call your bank or try with a non 3-D Secure card';
$_['Error3001'] = 'COMMUNICATION PROBLEM. Timeout. Try again after a short pause';
$_['Error3002'] = 'COMMUNICATION PROBLEM. Transaction not allowed';
$_['Error3003'] = 'COMMUNICATION PROBLEM. System temporary unavailable. Try again after a short pause';
$_['Error3004'] = 'Duplicate transaction ID';
$_['Error3005'] = 'COMMUNICATION PROBLEM. Try again after a short pause';
$_['Error7001'] = 'Schedule request is invalid';
$_['Error7002'] = 'Schedule request failed';
$_['Error7005'] = 'Schedule action is not valid';
$_['Error7010'] = 'RegistrationId is required';
$_['Error7020'] = 'RegistrationId is not valid';
$_['Error7030'] = 'The registrationId must point to a "register", "debit+register" or "preuth+register';
$_['Error7035'] = 'Initial transaction is not a "register", "debit+register" or "preuth+register"';
$_['Error7036'] = 'The period between the initial and second transaction must be greater than 24 hours';
$_['Error7040'] = 'The scheduleId is not valid or does not match to the connector';
$_['Error7050'] = 'The startDateTime is invalid or older than 24 hours';
$_['Error7060'] = 'The continueDateTime is invalid or older than 24 hours';
$_['Error7070'] = 'The status of the schedule is not valid for the requested operation';