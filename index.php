<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>
    <style>
        /* stile per lo snack 6 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .teachers, .pm {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .teachers {
            background: grey;
        }
        .pm {
            background: green;
        }
        /* se si vuole aggiungere altro css è preferibile creare un file apparte */
    </style>
    
</head>
<body>
    <section id="snack1">
        
        <h1> Snack 1 </h1>
        <?php 
        $partite = [
        [
            'casa' => 'Olimpia Milano',
            'ospite' => 'Cantu',
            'puntiCasa' => '55',
            'puntiOspite' => '60',
        ],
        [
            'casa' => 'Virtus Bologna',
            'ospite' => 'Brescia',
            'puntiCasa' => '101',
            'puntiOspite' => '83',
        ],
        [
            'casa' => 'Reyer Venezia Mestre',
            'ospite' => 'Brindisi',
            'puntiCasa' => '80',
            'puntiOspite' => '78',
        ]
    ];

    var_dump($partite);

    for ($i=0; $i < count($partite); $i++) {
    ?>
        <p>
          <?= $partite[$i]['casa'] ?> -
          <?= $partite[$i]['ospite'] ?> |
          <?= $partite[$i]['puntiCasa'] ?> -
          <?= $partite[$i]['puntiOspite'] ?>
        </p>
    <?php
    }
    ?>
    </section>

    <section id="snack2">

        <h1> Snack 2 </h1>
        <?php 
        $nome = $_GET['nome'];
        $mail = $_GET['mail'];
        $eta = $_GET['eta'];
        if(!empty($nome) && !empty($mail) && !empty($eta)){
            $alert = 'parametri errati';
            if(strlen($nome) > 3 && strpos($mail, '@')!== false && strpos($mail, '.') !== false && is_numeric($eta) ){
                $alert = 'accesso consentito';
            } else {
                $alert = 'accesso negato';
            };
            };

            ?>

            <p>
                <?php 
                echo $alert;
            ?></p>



            <?php
            $limit_random_array_values = range(1, 15);
            shuffle($limit_random_array_values);
            $all_five_random_array_value = array_slice($limit_random_array_values ,0,15);
            print_r($all_five_random_array_value);
            ?>


    </section>
    <section id="snack3">
        
        <h1> Snack 3 </h1>


        <?php

        $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    foreach ($posts as $key => $value){
        echo $key ?> <br> <?php 
      //  var_dump ($value);
       for($i=0; $i<count($value); $i++){
         echo "<span>{$value[$i]['title']} <br> </span>
               <span>{$value[$i]['author']} <br> - </span>
               <span>{$value[$i]['text']}<br>  - </span>";
       }
    }
  
  // }
    ?>

    </section>
    <section id="snack4">
        
        <h1> Snack 4 </h1>
        <?php 
        $new_array = [];
        while(count($new_array) < 15){
        $number = rand(1, 15);
        if(!in_array($number, $new_array)){
        $new_array[] = $number;
            }
        }
        var_dump($new_array);

        ?>
        
    </section>
    <section id="snack5">
        
        <h1> Snack 5 </h1>
        <?php 
        $text = 'nostrum voluptate velit deleniti minima. corrupti perferendis, non optio, eaque dolores voluptatum. Eveniet, doloremque inventore! Porro, suscipit, voluptates nam ratione dolorem ipsam quisquam deserunt ducimus corrupti. officia expedita deleniti. Illum est molestiae omnis, nulla id repudiandae. tempore harum temporibus corporis pariatur quod iusto laudantium, praesentium fuga magnam unde alias repellat!';

        $pieces = explode(".", $text);

        for($i = 0; $i < count($pieces); $i++){
         $x = $pieces[$i];
          echo "<span>{$x}.</span> <br>" ;
        }
        ?>
        
    </section>
    <section id="snack6">
        
        <h1> Snack 6 </h1>
        <?php

        $db = [
            'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
        ];

        foreach ($db as $key => $value){
            //var_dump($key);
            ?> <div class="<?php echo $key ?>">
            <?php foreach ($value as $value){
                echo "<p>$value[name] $value[lastname]";
            } ?>
            </div> <?php
        }
        ?>
    </section>
    <section id="snack7">
        
        <h1> Snack 7 </h1>
        
    </section>
    
</body>
</html>