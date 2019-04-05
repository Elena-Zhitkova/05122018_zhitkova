<?php
    //на всех страницах, где нужна сессия, ее нужно начинать
    session_start();

    $response = [
        'basket'=>[
            'count'=> 0,
        ]
    ];

    //добавление товара в корзину
    if (isset($_GET['product_id'])){
        //!че-то там - это НЕ че-то там
        if (!isset($_SESSION['basket'])){
            $_SESSION['basket'] = [];
        }

        $is_find = false;
        foreach($_SESSION['basket'] as $key=>$basketItem){
            if ($basketItem['product_id'] == $_GET['product_id']){
                $_SESSION['basket'][$key]['count']++;
                $is_find = true;
            }
        }


        if($is_find == false){
            $_SESSION['basket'][] = [
                'product_id' => $_GET['product_id'],
                'count'=> 1
            ];
        }
    }


    //подсчет кол-ва товаров в корзине
    if (isset($_SESSION['basket'])){
        foreach( $_SESSION['basket'] as $basketItem){
            $response['basket']['count']+=$basketItem['count'];
        }
    }

    echo json_encode($response);
    

    //почистить сессию(не удалить, а почистить)
    // unset($_SESSION['count']);

    // //считаем сколько раз перезагрузили сессию
    // if (isset($_SESSION['count'])){
    //     $_SESSION['count']++;
    // } else {
    //     $_SESSION['count'] = 1;
    // }

    // echo $_SESSION['count'];