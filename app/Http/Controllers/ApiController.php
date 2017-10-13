<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Getschedule(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
            'schedule' => [
                array (
                    'date' => '2017-10-9',
                    'daily_schedule' => [
                        array (
                        "status" => 1,
                        "time_start" => '9:0',
                        "time_end" => '11:0',
                        "subject_name" => 'ENG',
                        "room" => 'E-302',
                        "session_id" => '0001'
                        ),
                        array (
                            "status" => 1,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'FR',
                            "room" => 'A-302',
                            "session_id" => '0002'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-10',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '9:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-11',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '9:0',
                            "subject_name" => 'M&S',
                            "room" => 'F-404',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '3:0',
                            "time_end" => '5:0',
                            "subject_name" => 'N S',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-12',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-13',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-14',
                    'daily_schedule' => [ ]
                )
            ],
        );
    }


public function GetUserInfo(Request $request) {
        return array (
            "status" => true,
            "first_name" => 'siyen',
            "last_name" => 'heng',
            "student_id" => 'e20140987432509',
            "sex" => 'M',
            "photo" => 'http://ilarge.lisimg.com/image/5640895/970full-sean-thomson.jpg'

        );
    }

    public function RequestCheckin(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
        );
    }

    public function GetStudentList(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
            'group_list' => [
                array (
                    'group_name' => 'Vainglory',
                    'group_id' => 1,
                    'student_list' => [
                        array (
                            "status" => 1,
                            "first_name" => '4yht',
                            "last_name" => 'de',
                            "student_id" => 'e201049694',
                            "sex" => 'G',
                            "photo" => 'http://handsome.is/wp-content/uploads/IMG_4754-1.jpg'
                        ),
                        array (
                            "status" => 1,
                            "first_name" => 'siyen',
                            "last_name" => 'heng',
                            "student_id" => 'e20140987432509',
                            "sex" => 'M',
                            "photo" => 'http://ilarge.lisimg.com/image/5640895/970full-sean-thomson.jpg'
                        )
                    ]
                )
            ],
        );
    }
}
