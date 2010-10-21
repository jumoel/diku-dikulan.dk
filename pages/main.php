<?php

class Main {
  function index() {
    echo HSHTPL::template("frontpage");
  }

  function om() {
    echo HSHTPL::template("om-os");
  }
}

?>