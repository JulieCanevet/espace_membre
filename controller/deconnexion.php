<?php
session_start();
ob_start();
include ('../model/deconnexion_post.php');
deconnexion();
include ('../vue/deconnexion_vue.php');
header('Refresh: 5; ../index.php');
ob_end_flush();