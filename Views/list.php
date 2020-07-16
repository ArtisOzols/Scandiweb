<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>
    <header>
        <div id="title">
            <h1>Product list</h1>
        </div>
    </header>
    
    <main>
        <form action="delete" method="post">
            <input type="submit" class="links" value="Delete">
            <div class="row">
                <?php
                    $obj= new Products();
                    $list = $obj->AllProducts();
                    foreach($list as $item) {
                        echo '<div class="product">';

                            echo '<div class="title-box">
                                     <h3 class="title">' . $item[1] . '</h3>
                                  </div>';
                        
                            echo '<div class="description-box"> 
                                    <h3 class="price">' . $item[2] . '€</h3>
                                    <div>';
                                        if($item[3]=="Size") echo '<h3>' . $item[4] . 'Mb</h3>';
                                        if($item[3]=="Weight") echo '<h3>' . $item[5] . 'Kg</h3>';
                                        if($item[3]=="Dimentions") echo '<h3>' . $item[6]. "x" . $item[7]. "x" . $item[8] . 'cm</h3>';
                                    echo '<h4>' . $item[0] . '</h4>
                                    </div>

                                    <input type="checkbox" name="' . $item[0] . '" id="' . $item[0] . '" value="' . $item[0] . '">
                                    <label for="' . $item[0] . '">
                                        <svg>
                                            <polygon points="40,0 40,40 0,40">
                                        </svg> 
                                    </label>
                                 </div>
                            </div>';
                    }
                ?>              
            </div>
        </form>
    </main>
                                       
    <footer>
        <a href="/new" class="links">Add products</a>
    </footer>

</body>
</html>

