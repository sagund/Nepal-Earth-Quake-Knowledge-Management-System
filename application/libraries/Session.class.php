<?PHP

class SESSION
{

	static public function set($name,$value)
	{
		$_SESSION[$name] = $value;
	}


	static public function get($name)
	{
		if (array_key_exists($name,$_SESSION))
		{
		return $_SESSION[$name];
		}
		else 
		{
			return "";
		}
	}


	static public function delete($name)
	{
		$_SESSION[$name] = "";
		unset($_SESSION[$name]);
	}

	static public function exists($name)
	{
		if (isset($_SESSION[$name]))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}