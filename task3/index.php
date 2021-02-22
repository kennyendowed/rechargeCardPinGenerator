
<?php 
include('class/calculator.php');
$result = "";
$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['number1'],$_POST['number2'],$_POST['operation']);
}
?>
<h1>Simple PHP calculator </h1><hr>
<div align="center">
<form method="POST" action="">
                   
                      <div class="form-group">
                        <input type="number" placeholder="Enter First Number" class="form-control" name="number1"  require>
                      </div><br>
                      <div class="form-group mt-2">
                        <input  type="number" class="form-control" name="number2" placeholder="Enter Second Number"  require>

                        </div><br>
                      <div class="form-group mt-2">
                      <select name="operation">
            <option value="+">Addition</option>
            <option value="-">Subtract</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
        </div><br>
                    <div class="text-center"><input type="submit" name="submit" value="                =                "></div>

                                    <p class="mb-0 mt-4 text-center">Result = <?php echo $result; ?></p>


                </form>
                </div>