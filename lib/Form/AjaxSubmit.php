<?php
/***********************************************************
   ..

   Reference:
     http://atk4.com/doc/ref

 **ATK4*****************************************************
   This file is part of Agile Toolkit 4 
    http://www.atk4.com/
  
   (c) 2008-2011 Agile Technologies Ireland Limited
   Distributed under Affero General Public License v3
   
   If you are using this file in YOUR web software, you
   must make your make source code for YOUR web software
   public.

   See LICENSE.txt for more information

   You can obtain non-public copy of Agile Toolkit 4 at
    http://www.atk4.com/commercial/ 

 *****************************************************ATK4**/
/**
 * Displays submit button
 *
 * @author		Romans <romans@adevel.com>
 * @copyright	See file COPYING
 * @version		$Id$
 */
class Form_AjaxSubmit extends AbstractView {
	public $label;
	function setLabel($_label){
		$this->label=$_label;
	}
	function render(){
		$this->owner->template_chunks['form']->append('form_buttons',
		'<input type="button" value="'.$this->label.'" onclick="submit_'.$this->owner->name.'(\''.$this->name.'\')">');
	}
}