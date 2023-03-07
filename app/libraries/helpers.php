<?php

if (!function_exists('asset')) {
  /**
   * Get the asset path of the given file.
   */
  function asset(string $path)
  {
    return URLROOT . '/' . $path;
  }
}

if (!function_exists('url')) {
  /**
   * Get the given url.
   */
  function url($url = null)
  {
    return URLROOT . '/' . $url;
  }
}
