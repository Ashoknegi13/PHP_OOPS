<?php     // type hinting 
    class school{
        public function getName(student $names){
            foreach($names->Names() as $name){
                echo $name ."<br>";
            }
        }
    }
    class student{
        public function Names(){
            return ['ashok','ankit','rahul'];
        }
    }
    $stu = new student();
    $sch = new school();
    $sch->getName($stu);

    // output : ashok
    //          ankit
    //          rahul   
?>
