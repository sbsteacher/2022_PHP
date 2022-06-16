<?php
    // Access Modifier
    // 접근제어 지시자
    // 접근지시어
    // 접근제어자
    // java: private default protected public
    class Student {        
        public $studentId;
        public $studentName;

        function __construct() {
            print "construct!!! <br>";
        }

        function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";
        }
    }

    function printStudent($id, $name) {
        print "dddd : {$id}, {$name}";
    }

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";
    $obj->printStudent($obj->studentId, $obj->studentName);

    printStudent("kkkk", "gggg");

    