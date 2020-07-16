<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>

    <header>
        <h1>Add product</h1>
    </header>
    
    <main>
        <form action="add" method="post">
         
            <div>
                <p>SELECT TYPE </p>    
                <div class="d-flex">
                        <input type="radio" name="type" value="Size" required="required" onclick="AddSize()">
                        <label><span class="radio-btn"></span> Size</label><br>

                        <input type="radio" name="type" value="Weight" required="required" onclick="AddWeight()">
                        <label><span class="radio-btn"></span> Weight</label><br>
                    
                        <input type="radio" name="type" value="Dimentions" required="required" onclick="AddDimentions()">
                        <label><span class="radio-btn"></span> Dimentions</label>  
                </div>
            </div>

            <div class="text-input">
               <input type="number" name="sku" required="required" min="0" max="9999999999999"> <br>
               <label for="sku">SKU</label> 
            </div>

            <div class="text-input">
                <input type="text" name="name" required="required" maxlength="250"> <br>
                <label for="name">NAME</label> 
            </div>
            
            <div class="text-input">
                <input type="number" name="price" required="required" min="0" max="9999999999" step="0.01"> <br>
                <label for="price">PRICE</label>
                <span>€</span>
            </div>

            <!-- special attribute -->
            <div id="specAttribute">
                <!-- size -->
                <div id="size">
                    <div class="text-input">
                        <input type="number" name="size" placeholder="Please specify size in Mb" min="0" max="9999">  <br>
                        <label for="size">SIZE</label>
                        <span>MB</span> 
                    </div>
                </div>

                <!-- weight -->
                <div id="weight">
                    <div class="text-input">
                        <input type="number" name="weight" placeholder="Please specify weight in Kg" min="0" max="9" step="0.1"> <br>
                        <label for="weight">WEIGHT</label>
                        <span>KG</span>
                    </div>
                </div>

                <!-- dimentions -->
                <div id="dimentions">
                    <div class="text-input">
                        <input type="number" name="height" placeholder="Please specify height in cm" min="0" max="9999"> <br>
                        <label for="height">HEIGHT</label>
                        <span>CM</span>
                    </div>
                    <div class="text-input">
                        <input type="number" name="width" placeholder="Please specify width in cm" min="0" max="9999"> <br>
                        <label for="width">WIDTH</label>
                        <span>CM</span>
                    </div>
                    <div class="text-input">
                        <input type="number" name="length" placeholder="Please specify length in cm" min="0" max="9999"> <br>
                        <label for="length">LENGTH</label>
                        <span>CM</span>
                    </div>
                </div>

            </div>
            <input type="submit" value="ADD" class="btn">
         </form>
    </main>

    <footer>
        <a href="/list" class="links">All products</a>
    </footer>
    
    <script src="./public/js/specialAttribute.js"></script>
</body>
</html>