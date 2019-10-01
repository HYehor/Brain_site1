<?php include __DIR__ . '/lib.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <td colsplan="2" align="center">
            <?php include __DIR__ .DS.'header.php'; ?>
        </td>
    </tr>
    <tr>
        <td> Menu
            <?php
            // Menu
               $menu = ['1' => 'страница1',
                        '2' => 'страница2',
                        '3' => 'страница3' ];
               menu($menu);

               $menuReq = [ 'punct 1'=>['href'=>'1'],
                            'punct 2'=>['href'=>'2'],
                            'punct 3'=>['href'=>'3'],
                      ];
            ?>
        </td>
        <td>
        <?php
           if(isset($_GET['id']) && !empty($_GET['id'])) {
               $page = '';
               switch ($_GET['id']) {
                   case'1':
                       $page = 'page1';
                       break;
                   case'2':
                       $page = 'page2';
                       break;
                   case'3':
                       $page = 'page3';
                       break;
                   /*case'table':
                       $page = 'table';
                       break;*/
                   default:
                       $page = '404';
               }
               include __DIR__ . DS . $page . '.php';
           } else
               echo 'Main content';
        ?>


        </td>
    </tr>
    <tr>
        <td colsplan="2" align="center">
            <?php include __DIR__.DS.'footer.php'; ?>
        </td>
    </tr>
</table>



</body>
</html>