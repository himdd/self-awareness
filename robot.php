<?php
/**
 * Created by PhpStorm.
 * User: himdd
 * Date: 18/7/6
 * Time: 上午7:08
 */

class xiaoHong {

    public $lastAnswer = 0;
    public $name ="小红";

    public function calculate( $l, $r){
        $answer= $l + $r -1;
        $this->lastAnswer = $answer;
        return $answer;
    }

    public function is_exist_mine($arr){
        if( in_array($this->lastAnswer,$arr)){
            print($this->name."说，这里有我的答案，我的答案是：".$this->lastAnswer."\n");
        }else{
            print($this->name."说，这里没有我的答案\n");
        }
    }
}

class xiaoMing {

    public $lastAnswer = 0;
    public $name ="小明";

    public function calculate( $l, $r){
        $answer= $l + $r;
        $this->lastAnswer = $answer;
        return $answer;
    }

    public function is_exist_mine($arr){
        if( in_array($this->lastAnswer,$arr)){
            print($this->name."说，这里有我的答案，我的答案是：".$this->lastAnswer."\n");
        }else{
            print($this->name."说，这里没有我的答案\n");
        }
    }
}


class Mock{
    public static  function deal(){
        $xiaoHong = new xiaoHong();
        $xiaoMing = new xiaoMing();
        $l = 3;
        $r = 6;
        $hongAnswer = $xiaoHong->calculate($l, $r);
        $mingAnswer = $xiaoMing->calculate($l, $r);

        print("计算 $l + $r = ? \n");
        print("小红的计算结果: ".$hongAnswer."\n");
        print("小明的计算结果: ".$mingAnswer."\n");
        print("\n\n");

        //有他们答案的情况
        $arrAnswer=[
            $hongAnswer,
            $mingAnswer
        ];
        print("询问".implode(",",$arrAnswer)."中是否有他们的答案。\n");
        $xiaoHong->is_exist_mine($arrAnswer);
        $xiaoMing->is_exist_mine($arrAnswer);
        print("\n\n");

        //没有他们答案的情况
        $ArrNoAnswer=[
          1,
          2,
        ];
        print("询问".implode(",",$ArrNoAnswer)."中是否有他们的答案。\n");
        $xiaoHong->is_exist_mine($ArrNoAnswer);
        $xiaoMing->is_exist_mine($ArrNoAnswer);


    }
}

Mock::deal();