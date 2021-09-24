class FlashMsg
{

    public static function set_message($name, $message)
    {
        $_SESSION[$name] = $message;
    }

    public static function display_flash_message($name)
    {
        if (isset($_SESSION[$name])) {
            echo $_SESSION[$name];
            unset($_SESSION[$name]);
        }
    }

}
