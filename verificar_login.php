<?php
if(!$_SESSION['email']){
	header('Location: login.html' );
	exiit();
}