<?php

$config['atk']['base_path']='./atk4/';
$config['dsn']='mysql://root:winserver@localhost/xbank';

$config['sef']=true;

$config['url_postfix']='';
// $config['url_prefix']='';
$config['url_prefix']='?page=';

# Agile Toolkit attempts to use as many default values for config file,
# and you only need to add them header_remove() if you wish to re-define default
# values. For more options look at:
#
#  http://www.atk4.com/doc/config

// $config['js']['versions']['jquery'] = "1.8.3.min";

$config['tmail']['transport'] = "PHPMailer";
$config['tmail']['phpmailer']['from'] = "info@epan.in";
$config['tmail']['from'] = "";
$config['tmail']['phpmailer']['from_name'] = "Epan Enquiry";
$config['tmail']['smtp']['host'] = "ssl://mail.epan.in";
$config['tmail']['smtp']['port'] = 465;
$config['tmail']['phpmailer']['username'] = "info@epan.in";
$config['tmail']['phpmailer']['password'] = "Info@123";
$config['tmail']['phpmailer']['reply_to'] = "no-reply@epan.in";
$config['tmail']['phpmailer']['reply_to_name'] = "No-Reply";