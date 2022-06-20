<?php

/*******************************************************************************

<one line to give the program's name and a brief idea of what it does.>
Copyright (C) <year>  <name of author>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

********************************************************************************

lib/traits/database.php

Common functions for objects that access the database.

*******************************************************************************/

namespace lib\core\traits;

trait Database
{
	/*	Checks that a table exists in the database.
	*/
	private function tableExists(string $name) : bool
	{
		global $mysqli;

		$result = $mysqli->query("SELECT")
		return true;
	}

	/*	Prepares a statement.
	*/
	private function prepare()
	{
		global $mysqli;

		$mysqli->prepare();
	}

	/*	Executes a statement.
	*/
	private function execute()
	{
		global $mysqli;

		$mysqli->execute();
	}

	public function Select() : array
	{
		return array();
	}

	public function Update() : bool
	{
		return true;
	}

	public function Delete() : bool
	{
		global $mysqli;

		$mysqli->query("DELETE FROM 
		return true;
	}
}
