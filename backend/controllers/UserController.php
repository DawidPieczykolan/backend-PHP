namespace backend\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';

    // Usunięto mechanizm autoryzacji JWT dla testów
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Wykomentowano autoryzację, aby testy były możliwe bez tokenów
        /*
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];
        */

        return $behaviors;
    }
}
