<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
//        $this->student = [10, 20, 'BITM', 10.20, true, false];
//        echo $this->student[2];
//        foreach ($this->student as $key => $item)
//        {
//            echo 'index no - '. $key. ' value - '. $item.'<br/>';

        $this->student = [
            0 => [
                'name' => 'Arnob',
                'email' => 'arnob@gmail.com',
                'phone' => [
                    'phone1 =>11676788',
                    'phone2 =>65876788',
                ],
            ],

            1 => [
                'name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'phone' => [
                    'phone1 =>99676788',
                    'phone2 =>09876788',
                ],
            ],
            2 => [
                'name' => 'mahfin',
                'email' => 'mahfin@gmail.com',
                'phone' => '11223344',
            ],

//            3 => [
//                'name'      =>  'Masud',
//                'email'     =>  'hmmn@gmail.com',
//                'phone'     =>  '11223344',
//            ],
//
//            4 => [
//                'name'      =>  'Saro',
//                'email'     =>  'saro@gmail.com',
//                'phone'     =>  '11223344',
//            ],
//
//            5 => [
//                'name'      =>  'Riaz',
//                'email'     =>  'hdfgf@gmail.com',
//                'phone'     =>  '11223344',
//            ],

            2 => 'BITM',
            3 => [
                'name' => 'Masud',
                'email' => 'hmmn@gmail.com',
                'phone' => [
                    'phone1 =>11676788',
                    'phone2 =>65876788',
                ],
            ],

        ];

       // echo '<pre>';
       // print_r($this->student);
       // var_dump($this->student);


//        foreach ($this->student as $key => $item)
//        {
//            if (is_array($item))
//            {
//
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo '$v_value' . ' ';
//                        }
//                    }
//                    else
//                        {
//                        echo $value . ' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>'
//
        }
    }

