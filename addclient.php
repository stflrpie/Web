<?php
/*
UserSpice 4
An Open Source PHP User Management System
by Curtis Parham and Dan Hoover at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
ini_set("allow_url_fopen", 1);
?>
<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>
<?php
//this is the standard, no cost register form
//If some of this code looks funny it's because it is prepared for
//an additional join form with stripe payment options.
?>
<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
<div class="row">
  <div class="col-sm-12">
    <div class="col-sm-6 col-sm-offset-3">
<?php include 'register1.php'; ?>



<!-- footers -->
<!-- Place any per-page javascript here -->

<?php 	if($settings->recaptcha == 1){ ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php } ?>

