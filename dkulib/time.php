<?php
class Time {
  public static function relative_time($date) {
    $diff = time() - $date;
    if ($diff<5)
      return "lige nu";
    if ($diff<60)
      return $diff . " sekund" . (($diff == 1) ? "" : "er") . " siden";
    $diff = round($diff/60);
    if ($diff<60)
      return $diff . " minut" . (($diff == 1) ? "" : "ter") . " siden";
    $diff = round($diff/60);
    if ($diff<24)
      return $diff . " time" . (($diff == 1) ? "" : "r") . " siden";
    $diff = round($diff/24);
    if ($diff<7)
      return $diff . " dag" . (($diff == 1) ? "" : "e") . " siden";
    $diff = round($diff/7);
    if ($diff<4)
      return $diff . " uge" . (($diff == 1) ? "" : "r") . " siden";
    return "den " . date("j. F, Y", $date);
  }
}
?>