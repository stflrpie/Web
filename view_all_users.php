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
?>
<?php require_once("includes/userspice/us_header.php"); ?>

<?php require_once("includes/userspice/us_navigation.php"); ?>

<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>
<?php
//PHP Goes Here!
$userQ = $db->query("SELECT * FROM users");
$users = $userQ->results();
?>
<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-sm-12">

        <!-- Left Column -->
        <div class="class col-sm-4"></div>

        <!-- Main Center Column -->
        <div class="class col-sm-2">

          <h1>
                <div class="input-group">
                  <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                  <input class="form-control" id="system-search" name="q" placeholder="Search Users..." required>
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </span>
              </div>
          </form><br>
                      View All Users
          </h1>
          <form action="#" method="get">
          <?php


          include("views/userspice/_view_all_users.php");
?>

          <!-- End of main content section -->
        </div>

        <!-- Right Column -->
        <div class="class col-sm-1"></div>
      </div>
    </div>

    <!-- /.row -->

    <!-- footers -->
    <?php require_once("includes/userspice/us_page_footer.php"); // the final html footer copyright row + the external js calls ?>

    <!-- Place any per-page javascript here -->
<script src="js/search.js" charset="utf-8"></script>

    <?php require_once("includes/userspice/us_html_footer.php"); // currently just the closing /body and /html ?>
