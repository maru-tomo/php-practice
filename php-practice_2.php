<?php
// Q1 tic-tac問題
  for ($i = 1; $i <= 100; $i++)
  {
    if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
    } else if ($i % 4 == 0) {
      echo "tic\n";
    } else if ($i % 5 == 0) {
      echo "tac\n";
    } else {
      echo $i . "\n";
    }
  }

// Q2 多次元連想配列
  $personalInfos =
  [
    [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel' => '09011112222'
    ],
    [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel' => '08033334444'
    ],
    [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel' => '09055556666'
    ],
  ];
  
    //問題1
  echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";
  
    //問題2
  $n = 1;
  foreach ($personalInfos as $info) {
    echo $n . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
    $n++;
  }
  
    //問題3
  $ageList = [25, 30, 18];
  
  foreach ($personalInfos as $info => &$ages)
  {
    $ages["age"] = $ageList[$info];
  }
  var_dump($personalInfos);

// Q3 オブジェクト-1
  class Student
  {
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
      $this->studentId = $id;
      $this->studentName = $name;
    }

    public function attend($subject)
    {
      echo $this->studentName . "は" . $subject . "の授業に参加しました。学籍番号:" . $this->studentId . "\n";
    }
  }

  $yamada = new Student(120, '山田');
  echo "学籍番号" . $yamada->studentId . "番の生徒は" . $yamada->studentName . "です。\n";

// Q4 オブジェクト-2
  $yamada->attend('PHP');

// Q5 定義済みクラス
  //問題1
  $date = new DateTime('2021-03-02');
    // 先月の末日
  $last_date = new DateTime(date('Y-m-d', strtotime('last day of previous month', $date->getTimestamp())));
  $last_date = $last_date->format('Y-m-d');
    // 1か月前
  $prev_date = $date->modify('-1 month')->format('Y-m-d');

  if ($last_date < $prev_date)
  {
    echo $last_date . "\n";
  } else
  {
    echo $prev_date . "\n";
  }
  
  //問題2
  $time = new DateTime();
  $time2 = new DateTime('1992-04-25');
  $diff = $time->diff($time2);
  echo $diff->format("あの日から%a日経過しました。");
?>
