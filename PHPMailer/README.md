# PHPMailer SMTP Connection

https://github.com/PHPMailer/PHPMailer

### Disable to not check(verify) the SSL 

```php
$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true,
	)
);
```
