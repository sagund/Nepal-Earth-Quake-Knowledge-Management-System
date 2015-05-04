<?PHP

define("AUTH_SEPARATOR","[-()-]");

if (!defined("COOKIE_L_DEFAULT_TIME_TO_LIVE"))
{
	define("COOKIE_L_DEFAULT_TIME_TO_LIVE",7200);
}

class Authenticator
{

	public static  function buildauthedstring($user_id,$is_authed,$user_type)
	{
		$authstring = uniqid().date("shi");
		$authstring .= AUTH_SEPARATOR;
		$authstring .= $user_id;
		$authstring .= AUTH_SEPARATOR;
		$authstring .= $is_authed;
		$authstring .= AUTH_SEPARATOR;
		$authstring .= $user_type;
		$authstring .= AUTH_SEPARATOR;
		$authstring .= date("s");
		return $authstring;
	}



	public static function setAuthenticatedCookieForUser($user_id,$user_type,$cookie_time_to_live=COOKIE_L_DEFAULT_TIME_TO_LIVE)
	{
		CookieMonster::set("L",self::buildauthedstring($user_id,"y",$user_type),$cookie_time_to_live);
	}


	public static function setLoggedOutCookieForUser($cookie_time_to_live=COOKIE_L_DEFAULT_TIME_TO_LIVE)
	{
		CookieMonster::set("L",self::buildauthedstring("","n"),$cookie_time_to_live);
	}


	public static function isLoggedIn($return_id=false)
	{
		$login = CookieMonster::get("L");



		if ($login!="")
		{

			list($junk1,$user_id,$auth,$type,$junk2)=explode(AUTH_SEPARATOR,$login);


			if ($auth=="y")
			{
				if (!$return_id)
				{

					return true;
				}
				else
				{
					return $user_id;
				}
			}
			else
			{
				return false;
			}



		}
		else
		{
			return false;
		}
	}


	public static function getLoggedInUserId(){
         return self::isLoggedIn(true);
	}
	
	public static function getUserType(){
        $login = CookieMonster::get("L");
		if ($login!=""){
			list($junk1,$user_id,$auth,$type,$junk2)=explode(AUTH_SEPARATOR,$login);
			if ($auth=="y")
			{
				return $type;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}
