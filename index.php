<?php
require_once("lib/hsh-lib.php");
require_once("lib/tpl-lib.php");

HSHTPL::$UTF8 = FALSE;

HSH::get("/", "main:index");
HSH::get("/om-dikulan", "main:om");
HSH::get("/billetter", "billetter:index");
HSH::get("/turneringer-og-events", "turneringer:index");

HSHTPL::suffix("title", "DIKULAN");

HSH::run();
?>