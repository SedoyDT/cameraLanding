<?php

class Model_Test extends Model
{

    public function get_data()
    {

        // Здесь мы просто сэмулируем реальные данные.

        return [

            [
                'name' => 'Anatoliy',
                'surname' => 'Frolov',
                'date_of_birthday' => '12-05-1998'
            ]

        ];
    }

}
