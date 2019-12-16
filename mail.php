<?php 
    require 'vendor/autoload.php';

    class Mail{
        public static function SendMail($to, $subject, $content){

            $key ='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';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("rwebley.mothers@gmail.com", "Tobin Frost");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try {
                $response = $sendgrid->send($email);
                return $response;
            } catch (Exception $e) {
                echo 'Error while sending Email : ' . $e->getMessage();
                return false;
                
            }
        }
    }

?>