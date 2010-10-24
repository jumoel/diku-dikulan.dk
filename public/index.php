<?php
require_once("../lib/hsh-lib.php");
require_once("../lib/tpl-lib.php");
require_once("../config/login.php");

// Template settings
HSHTPL::$UTF8 = FALSE;
HSHTPL::suffix("title", "DIKULAN");

HSH::get("/", "main:index");
HSH::get("/om-dikulan", "main:om");
HSH::get("/billetter", "billetter:index");
HSH::get("/turneringer-og-events", "turneringer:index");

HSH::get("/nyt/@id", "news:show");

HSH::get(LoginConfig::$loginuri, "login:get");
HSH::post(LoginConfig::$loginuri, "login:post");

HSH::get("/kontrol/taarn", "control:tower");
HSH::get("/kontrol/crash", "control:crash");
HSH::get("/kontrol/ny", "control:create");
HSH::post("/kontrol/ny", "control:create");

HSH::run();
?>