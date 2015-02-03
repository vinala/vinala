<?php 

/**
* Mail class
*/
class Mail
{
	private $too=null;
	private $atachmnt=null;
	private $subject=null;
	private $froms=null;
	private $replay=null;
	private $cc=null;
	private $cci=null;
	private $type="html";
	private static $error="";


	public static function send($view,$array,$callback)
	{
		include "../core/Associates/PHPMailer/class.phpmailer.php";
		//
		$selfmail=new self();
		$callback($selfmail);
		//
		$mail=new PHPMailer();
		//
		//
		if($selfmail->type=="text")
		{
			$view2=$view;
			$mail->IsHTML(false);
		}
		else if($selfmail->type=="html")
		{
			$view2=View::get($view,$array);
			$mail->IsHTML(true);
		}
		//
		
		$mail->IsSMTP();
		$mail->SMTPDebug=1;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure=Config::get("mail.encryption");
		$mail->Host=Config::get("mail.host");
		$mail->Port=Config::get("mail.port");

		$mail->Username=Config::get("mail.username");
		$mail->Password=Config::get("mail.password");
		if(is_null($selfmail->froms)) $selfmail->froms=Config::get("mail.from.adresse");
		$mail->SetFrom($selfmail->froms);
		$mail->Subject=$selfmail->subject;
		$mail->Body=$view2;
		//
		foreach ($selfmail->too as $key => $value) 
		{
			$name="";
			$maile="";
			//
			foreach ($value as $key2 => $value2) {
				if($key2=="name") $name=$value2;
				else if($key2=="mail") $maile=$value2;
			}
			//
			if(empty($name)) { $mail->AddAddress($maile); }
			else { $mail->AddAddress($maile,$name); }
		}
		//
		// atachement
		if(!is_null($selfmail->atachmnt) && count($selfmail->atachmnt)>0)
		foreach ($selfmail->atachmnt as $key => $value) 
		{
			$name="";
			$filee="";
			//
			foreach ($value as $key2 => $value2) {
				if($key2==1) $name=$value2;
				else if($key2==0) $filee=$value2;
			}
			//
			if(empty($name)) { $mail->addAttachment($filee); }
			else { $mail->addAttachment($filee,$name); }
		}

		//
		// CC
		if(!is_null($selfmail->cc))
		foreach ($selfmail->cc as $key => $value) 
		{
			$mail->addCC($value);
		}

		//
		// CCB
		if(!is_null($selfmail->cci))
		foreach ($selfmail->cci as $key => $value) 
		{
			$mail->addBCC($value);
		}

		
		if(!$mail->Send())
		{
			self::$error=$mail->ErrorInfo;
			return false;
		}
		else return true;
	}

	public function to()
	{
		//
		$r=func_get_args();
		$r2=array();
		//
		if(count($r)==1)
		{
			if(is_array($r))
			{
				foreach ($r as $key => $value) {
					if(is_array($value))
					{
						$i=0;
						$ry=array();
						foreach ($value as $key => $value) {
							$r2[]= $value;
						}
					}
					else if(is_string($value))
					{
						$r2[]= array(
						'mail' => $value
						);
					}
				}
			}
			else if(is_string($r))
			{
				$r2[]= array(
				'mail' => $r
				);
			}
		}
		else if(count($r)==2)
		{
			$r2[]= array(
				'mail' => $r[0], 
				'name' => $r[1]
				);
		}
		//
		$this->too=$r2;
		return $this;
	}

	public function attach()
	{
		//
		$r=func_get_args();
		$r2=array();
		//
		if(count($r)==1)
		{
			if(is_array($r))
			{
				foreach ($r as $key => $value) {
					if(is_array($value))
					{
						$i=0;
						$ry=array();
						foreach ($value as $key => $value) {
							$r2[]= $value;
						}
					}
					else if(is_string($value))
					{
						$r2[]= array(
						'file' => $value
						);
					}
				}
			}
			else if(is_string($r))
			{
				$r2[]= array(
				'file' => $r
				);
			}
		}
		else if(count($r)==2)
		{
			$r2[]= array(
				'file' => $r[0], 
				'name' => $r[1]
				);
		}
		//
		$this->atachmnt=$r2;
		return $this;
	}

	public function subject($subject)
	{
		$this->subject=$subject;
		return $this;
	}

	public function from($from)
	{
		$this->froms=$from;
		return $this;
	}

	public function cc()
	{
		$r=func_get_args();
		if(!is_array($r)) $r= array( $r );
		$this->cc=$r;
		return $this;
	}

	public function cci($from)
	{
		$r=func_get_args();
		if(!is_array($r)) $r= array( $r );
		$this->cci=$r;
		return $this;
	}

	public function type($type)
	{
		$this->type=$type;
		return $this;
	}
}