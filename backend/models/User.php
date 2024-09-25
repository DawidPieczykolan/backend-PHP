namespace backend\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'mobile', 'email', 'age', 'adress', 'zipcode'], 'required'],
            ['email', 'email'],  
            ['mobile', 'string', 'max' => 15],
            [['name', 'surname'], 'string', 'max' => 100],
            [['age'], 'integer'],
            [['adress', 'zipcode'], 'string', 'max' => 255],
        ];
    }

    public static function primaryKey()
    {
        return ['id'];
    }
}
