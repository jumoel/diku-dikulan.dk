<?php
require_once("lib/hsh-lib.php");
require_once("lib/tpl-lib.php");

// Template settings
HSHTPL::$UTF8 = FALSE;
HSHTPL::suffix("title", "DIKULAN");

HSH::get("/", "main:index");
HSH::get("/om-dikulan", "main:om");
HSH::get("/billetter", "billetter:index");
HSH::get("/turneringer-og-events", "turneringer:index");

HSH::run();
?>