<?php

namespace app\models;

use yii\db\ActiveRecord;

class Bookmark extends ActiveRecord
{

	public static function tableName() {
		return "bookmark";
	}

}
