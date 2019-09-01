@extends('layout')
@section('title','practise')
@section('content')
    {{-- <script>
         function validateform() {
             var name=document.myform.name.value;
             var password=document.myform.passsword.value;
             if (name==null || name==""){
                 alert("name can't be blank");
                 return false;
             } else if (password.length<6){
                 alert("password must be at least 6 character long.");
                 return false;
             }
         }
     </script>
     <form action="abc.jsp" name="myform" method="post" onsubmit="return validateform()">
         name: <input type="text" name="name"><br>
         password: <input type="password" name="password"><br>
         <input type="submit" value="register">
     </form>--}}
    <?php
    $names = ['shyam', 'ram', 'bahadur'];
    foreach ($names as $name) {
        echo "<li>$name</li>";
    }
    $person = [
        'age' => 31,
        'hair' => 'black',
        'career' => 'software engineer'
    ];
    $person['name'] = 'pradeep';
    echo $person['age'];
    /** @var TYPE_NAME $person */
    //    die(var_dump($person));
    unset($person['career'])
    ?>
    <ul>
        <?php foreach ( $person as $key => $feature) : ?>
        <li><strong><?= ucwords($key); ?></strong>:<?= $feature; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php
    $task = [
        'title' => 'go to shop',
        'due' => 'today',
        'reffered to' => 'puja',
        'completed' => true
    ];
    ?>
    <h1>Task for today</h1>
    <ul>
        <?php foreach ($task as $key => $work): ?>
        <li>
            <storng><?= ucwords($key); ?></storng>
            :<?= $work; ?>
        </li>
        <?php endforeach;?>
    </ul>
    <ul>
        <li>
            <strong>Name: </strong><?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date: </strong><?= $task['due']; ?>
        </li>
        <li>
            <strong>Responsible for: </strong><?= $task['reffered to'];?>
        </li>
        <li>
            {{--conditional in oneline--}}
            <strong>Status: </strong><?= $task['completed'] ? 'completed &#9745' : 'incompleted';
            //            echo '<span class="icon" >&#9745;<?span>'
            ?>
        </li>
        <li>
            {{--conditional in detail if-else--}}
            <strong>Status:</strong>
            <?php if ( $task['completed']):?>
            <span class="icon">&#9745</span>
            <?php else :?>
            <span class="icon">incompleted</span>
            <?php endif; ?>
        </li>
    </ul>

    <?php
        // alll about classes
    class Math
    {
        public $name;
        public $description;
        public $played = false;

        public function __construct($name, $description)
        {
            $this->name = $name;
            $this->description = $description;
        }

        public function played()
        {
            $this->played = true;
        }

        public function isPlayed()
        {
            return $this->played;
        }
    }
    $maths = [
        new Math('pradeep', 'an engineer'),
        new Math('sujan', 'pro-legend'),
        new Math('ramesh', 'Ultra-legend')
    ];
    $maths[0]->played();
    var_dump($maths);
    ?>
    <ul>
        <?php foreach ($maths as $math) ?>
        <li>
            <?php if ( $math->played) : ?>
                <strike> <?= $math->description;?> </strike>
            <?php else: ?>
                <?= $math->description;?>
          <?php endif; ?>
        </li>
    </ul>

    <?php
    //about function
    function bio($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
    bio($person);
//    function showAll($pdo){
//        $statement = $pdo->prepare('select * from matches');
//
//        $statement->execute();
//        //var_dump($statement->fetchAll());
//        $results = ($statement->fetchAll(PDO:: FETCH_CLASS,'MAtch'));
//        var_dump($results);
//    }
    ?>
<?php
    // All about php data object (PDO)
    class Match
    {
        public $id;
        public $sport_id;
        public $teams;
        public $description;
        public $played;
    };
    class Connection
    {
        public static function make()
            {
                try{
                    return new PDO('mysql:dbname=sport;host=127.0.0.1','homestead','secret');
                } catch (PDOException $e){
                    die('could not connect to database');
                    die($e->getMessage());
                }
            }
    }

    class QuerryBuilder
    {
        protected  $pdo;

        public function __construct($pdo)
        {
            $this->pdo =$pdo;
        }
        function showAll($table, $intoClass)
        {
            $statement = $this->pdo->prepare("select * from {$table}");

            $statement->execute();
            //var_dump($statement->fetchAll());
            $results = ($statement->fetchAll(PDO:: FETCH_CLASS,$intoClass));
            var_dump($results);
        }
    }
    $pdo = Connection::make();
    $query =  new QuerryBuilder($pdo);
    $matches = $query->showAll('matches','Match');
    ?>
<!--    -->
//    config ()
//    {
//       return[
//           'database' =>[
//              'name' =>'sport',
//              'username' =>'homestead',
//              'password' => 'secret',
//              'connection'=> 'mysql:host=127.0.0.1',
//              'options' => []
//           ]
//       ]
//    }

@endsection
