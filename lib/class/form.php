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

lib/class/form.php

Object to create, handle, and display HTML forms.

*******************************************************************************/

namespace lib/class

use lib/interface/displayable as iDisp;

class Form
{
	private string
		$id,
		$action,
		$title;

	const FORM_FLAGS =
	[
		
	];

	const SUBMIT_TYPE =
	[
		"ADD",
		"EDIT",
		"DELETE"
	];

	private string
		$id,
		$action,
		$title;

	private Input	$inputs;
	private HTML	$html;

	function __construct(string $id, string $action, string $title)
	{
		$this->id		= $id;
		$this->action	= $action;
		$this->title	= $title;
	}

	public function display()
	{
	}
}
