<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['dummy'] = 'dummy';
//====================================================
//
// 環境に依らない共通設定
//
//====================================================
//--------------------------------
// データ
//--------------------------------
define('DATA_UNSET',   0);  // 未設定状態
define('DATA_ON',      1);  // データON
define('DATA_OFF',     0);  // データOFF

//--------------------------------
// 削除フラグ用
//--------------------------------
define('DATA_NOT_DELETED',  0);  // 有効レコード
define('DATA_DELETED',      1);  // 削除されたレコード

//--------------------------------
// 学年一覧
//--------------------------------
define('VALUE_GRADE_KINDERGARTEN_LOW',      1); // 幼稚園年少
define('VALUE_GRADE_KINDERGARTEN_MIDDLE',   2); // 幼稚園年中
define('VALUE_GRADE_KINDERGARTEN_HIGH',     3); // 幼稚園年長
define('VALUE_GRADE_ELEMENTARY_SCHOOL_1',   4); // 小学1年
define('VALUE_GRADE_ELEMENTARY_SCHOOL_2',   5); // 小学2年
define('VALUE_GRADE_ELEMENTARY_SCHOOL_3',   6); // 小学3年
define('VALUE_GRADE_ELEMENTARY_SCHOOL_4',   7); // 小学4年
define('VALUE_GRADE_ELEMENTARY_SCHOOL_5',   8); // 小学5年
define('VALUE_GRADE_ELEMENTARY_SCHOOL_6',   9); // 小学6年
define('VALUE_GRADE_JUNIOR_HIGH_SCHOOL_1', 10); // 中学1年
define('VALUE_GRADE_JUNIOR_HIGH_SCHOOL_2', 11); // 中学2年
define('VALUE_GRADE_JUNIOR_HIGH_SCHOOL_3', 13); // 中学3年
define('VALUE_GRADE_HIGH_SCHOOL_1',        14); // 高校1年
define('VALUE_GRADE_HIGH_SCHOOL_2',        15); // 高校2年
define('VALUE_GRADE_HIGH_SCHOOL_3',        16); // 高校3年
define('VALUE_GRADE_COLLEGE_1',            17); // 大学1年
define('VALUE_GRADE_COLLEGE_2',            18); // 大学2年
define('VALUE_GRADE_COLLEGE_3',            19); // 大学3年
define('VALUE_GRADE_COLLEGE_4',            20); // 大学4年
define('VALUE_GRADE_OTHER',                99); // その他
$config['school_grades'] = array(
    VALUE_GRADE_KINDERGARTEN_LOW      => '年少',
    VALUE_GRADE_KINDERGARTEN_MIDDLE   => '年中',
    VALUE_GRADE_KINDERGARTEN_HIGH     => '年長',
    VALUE_GRADE_ELEMENTARY_SCHOOL_1   => '小１',
    VALUE_GRADE_ELEMENTARY_SCHOOL_2   => '小２',
    VALUE_GRADE_ELEMENTARY_SCHOOL_3   => '小３',
    VALUE_GRADE_ELEMENTARY_SCHOOL_4   => '小４',
    VALUE_GRADE_ELEMENTARY_SCHOOL_5   => '小５',
    VALUE_GRADE_ELEMENTARY_SCHOOL_6   => '小６',
    VALUE_GRADE_JUNIOR_HIGH_SCHOOL_1  => '中１',
    VALUE_GRADE_JUNIOR_HIGH_SCHOOL_2  => '中２',
    VALUE_GRADE_JUNIOR_HIGH_SCHOOL_3  => '中３',
    VALUE_GRADE_HIGH_SCHOOL_1         => '高１',
    VALUE_GRADE_HIGH_SCHOOL_2         => '高２',
    VALUE_GRADE_HIGH_SCHOOL_3         => '高３',
    VALUE_GRADE_COLLEGE_1             => '大１',
    VALUE_GRADE_COLLEGE_2             => '大２',
    VALUE_GRADE_COLLEGE_3             => '大３',
    VALUE_GRADE_COLLEGE_4             => '大４',
    VALUE_GRADE_OTHER                 => 'その他',
);

//--------------------------------
// 続柄
//--------------------------------
define('VALUE_RELATIONSHIP_FATHER',     1); // 父
define('VALUE_RELATIONSHIP_MOTHER',     2); // 母
define('VALUE_RELATIONSHIP_MARRIAGE',   3); // 夫・妻
define('VALUE_RELATIONSHIP_BROTHER',    4); // 兄弟、姉妹
define('VALUE_RELATIONSHIP_CHILD',      5); // 子
define('VALUE_RELATIONSHIP_GRANDPARENT',7); // 祖父母
define('VALUE_RELATIONSHIP_OTHER',     99); // その他
$config['family_relationships'] = array(
    VALUE_RELATIONSHIP_FATHER       => '父',
    VALUE_RELATIONSHIP_MOTHER       => '母',
    VALUE_RELATIONSHIP_MARRIAGE     => '夫・妻',
    VALUE_RELATIONSHIP_BROTHER      => '兄弟・姉妹',
    VALUE_RELATIONSHIP_CHILD        => '子',
    VALUE_RELATIONSHIP_GRANDPARENT  => '祖父母',
    VALUE_RELATIONSHIP_OTHER        => 'その他',
);

//--------------------------------
// 理由
//--------------------------------
define('VALUE_REASON_SICK',         1); // 病気
define('VALUE_REASON_INJURY',       2); // 怪我
define('VALUE_REASON_MATTER',       3); // 用事
define('VALUE_REASON_OTHER',       99); // その他
$config['rest_reasons'] = array(
    VALUE_REASON_SICK       => '病気',
    VALUE_REASON_INJURY     => '怪我',
    VALUE_REASON_MATTER     => '用事',
    VALUE_REASON_OTHER      => 'その他',
);

//--------------------------------
// テストフォーム
//--------------------------------
define('VALUE_TEST_EXAM',       1); // テストを受ける
define('VALUE_TEST_NOT_EXAM',   2); // テストを受けない
$config['select_exam'] = array(
    VALUE_TEST_EXAM       => '受ける',
    VALUE_TEST_NOT_EXAM   => '受けない',
);

//--------------------------------
// 送迎バスフォーム
//--------------------------------
define('VALUE_BUS_RIDE_TRANSFER_BUS',       1); // 振替先のバスに乗る
define('VALUE_BUS_CONTACT_RIDE_OR_NOT',   2); // 振替先のバスに乗らない
$config['select_transfer_bus'] = array(
    VALUE_BUS_RIDE_TRANSFER_BUS     => '振替先のバスに乗る',
    VALUE_BUS_CONTACT_RIDE_OR_NOT   => '乗る/乗らないを連絡する',
);

