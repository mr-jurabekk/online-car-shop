<?php

const ASSETS = "view/assets";

const ADMIN = "/admin/view/assets/";

const HOST = "localhost";
const DATABASE = "avtosalon";
const USER = "root";
const PASSWORD = "";

$db = @mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die(mysqli_connect_errno());

const FRONTEND = "http://avtosalon/";

const HEADER_MENU = 1;
const FOOTER_MENU = 2;