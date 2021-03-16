<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/calcscript.js" defer></script>
    <title>Calculator</title>
</head>

<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="row header">
            <div class="col-md-12">
              <p>Calculator</p>
            </div>
          </div> 
          <div class="output">
            <div data-previous-operand class="previous-operand"></div>
            <div data-current-operand class="previous-operand"></div>
          </div>   
          <div class="row">
            <div class="col-md-3">
                <button data-number class="btn">7</button>
            </div>
            <div class="col-md-3">
                <button data-number class="btn">8</button>
            </div>
            <div class="col-md-3">
                <button data-number class="btn">9</button>
            </div>
            <div class="col-md-3">
                <button data-operation class="btn">/</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>4</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>5</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>6</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-operation>X</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>1</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>2</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-number>3</button>
            </div>
            <div class="col-md-3">
                <button class="btn" data-operation>-</button>
            </div>

          </div> 
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-8">
                   <button class="btn">0</button> 
                </div>
                <div class="col-md-4">
                  <button class="btn">.</button> 
                </div>
                <div class="col-md-3">
                    <button class="btn" id="clear" data-all-clear>AC</button>
                </div>
                <div class="col-md-4">
                  <button class="btn" id="del" data-delete>Del</button>  
                </div>
                <div class="col-md-5">
                    <button class="btn" id="equal" data-equals>=</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            <button type="button" class="btn" id="plus" data-operation>+</button>
            </div><br>
            <div class="col-md-12">
            <a href="/" class="btn">HOME</a>
            </div>
          </div>
        </div>
      </div>
    </div>
            
 
</body>
</html>