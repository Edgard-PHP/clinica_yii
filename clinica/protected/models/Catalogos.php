<?php
class Catalogos extends CActiveRecord
{
	public static function model($ClassName=__Class__)
	{
		return parent::model($ClassName);
	}
	public function tablename()
	{
		return "catalogo";
	}
	// public function rules()
	// {
	// 	return array(
	// 		array("region_id, region_nombre","required"),
	// 		);
	// }

}


?>