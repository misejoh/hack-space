<?php
/*
 * @version $Id: HEADER 15930 2012-03-08 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Projet plugin for GLPI
 Copyright (C) 2003-2012 by the Projet Development Team.

 https://forge.indepnet.net/projects/projet
 -------------------------------------------------------------------------

 LICENSE
		
 This file is part of Projet.

 Projet is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Projet is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Projet. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

Session::checkLoginUser();

$fup = new PluginProjetFollowup();

if (isset($_POST["add"])) {
   $fup->check(-1,'w',$_POST);
   $fup->add($_POST);
   Html::back();

} else if (isset($_POST["update"])) {
   $fup->check($_POST['id'], 'w');
   $fup->update($_POST);
   Html::back();

} else if (isset($_POST["delete"])) {
   $fup->check($_POST['id'], 'w');
   $fup->delete($_POST);
   Html::back();
}

Html::displayErrorAndDie('Lost');
?>