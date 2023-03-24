<?php

class Session
{
  protected static string $session_name = "ROCAMBOLESQUE_SESSION";

  /**
   * @throws SessionException
   */
  public static function start(): void
  {
    if (self::isActive()) throw new Exception("Session has already been started");

    if (headers_sent($file, $line)) throw new Exception("Headers already sent by $file at line $line");

    session_set_cookie_params([
      "secure" => true,
      "httponly" => true,
      "samesite" => "lax"
    ]);

    if (!empty(self::$session_name)) session_name(self::$session_name);

    if (!session_start()) throw new Exception("Unable to start session");

    if (!array_key_exists('_flash', $_SESSION)  || !isset($_SESSION['_flash'])) {
      $_SESSION['_flash'] = [];
    }
  }

  public static function save(): void
  {
    session_write_close();
  }

  public static function isActive(): bool
  {
    return session_status() === PHP_SESSION_ACTIVE;
  }

  public static function regenerate(): bool
  {
    return session_regenerate_id();
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function put($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function get($key, $default = '')
  {
    return self::has($key) ? $_SESSION[$key] : $default;
  }

  public static function flash($key, $value)
  {
    $_SESSION["_flash"][$key] = $value;
  }

  public static function error($values)
  {
    self::flash("errors", $values);
  }

  public static function has($key): bool
  {
    return array_key_exists($key, $_SESSION);
  }

  public static function hasFlash($key): bool
  {
    return array_key_exists($key, $_SESSION["_flash"]);
  }
  public static function getFlash(string $key)
  {
    if (self::hasFlash($key)) {
      $value = $_SESSION["_flash"][$key];
      unset($_SESSION["_flash"][$key]);

      return $value;
    }
  }
  public static function errors()
  {
    return self::getFlash("errors");
  }

  public static function forget($key)
  {
    unset($_SESSION[$key]);
  }
}
