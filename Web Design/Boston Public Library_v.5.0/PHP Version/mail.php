<?php

$mail=mail('mohan.k@husky.neu.edu', 'the subject', 'the message','From: nugpaca@gmail.com'); 
echo $mail;
if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}
?>