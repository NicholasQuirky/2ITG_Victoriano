<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FrontEnd</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Angkor&amp;display=swap">
</head>

<body>
    <style> body {
        background-image: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        
    }
        </style>
   

    <div class="container" style="background: #479f76;height: 777px;text-align: center;margin-top: 80px;">
        <h1 style="text-align: center;font-family: Aldrich, sans-serif;margin-top: -41px;padding-top: 30px;font-size: 85px;"><b> COMPUTE-YOUR-TAX-INATOR</b></h1>
        <label class="form-label" style="font-family: Aldrich, sans-serif;font-size: 25px;"><b>Easily Compute your taxes with a click of a button~</b></label>
        <form>
            <div style="height: 99px;">
                <p style="font-family: ABeeZee, sans-serif;font-size: 33px;margin-right: 450px;margin-bottom: 12px;padding-top: 32px;margin-top: 15px;"><b>Salary:</b> 
                <input class="form-control" name="salary" type="text" style="height: 38px;width: 396px;text-align: center;margin-left: 517px;margin-bottom: 37px;margin-top: -44px;" required="" pattern="^[0-9]*$"></p>
                <p style="font-family: ABeeZee, sans-serif;font-size: 33px;"><b>Type:</b> &nbsp;<input type="radio" id="Monthly" class="Monthly" value="Monthly" name="Radio" required="" style="margin-right: 10px;margin-left: 25px;">
                <label class="form-label" for="Monthly" style="font-family: ABeeZee, sans-serif;">Monthly</label>
                <input type="radio" id="BiMonthly" class="BiMonthly" value="BiMonthly" name="Radio" required="" style="margin-left: 34px;margin-right: 10px;">
                <label class="form-label" for="BiMonthly" style="font-family: ABeeZee, sans-serif;">Bi-Monthly</label>
                </p><button class="btn btn-success btn-lg" type="submit" name="compute" style="color: var(--bs-white);text-align: center;font-family: Aldrich, sans-serif;background: rgb(13,69,43);font-size: 27px;padding-bottom: 8px;padding-top: 8px;margin-bottom: 90px; margin-top: 44px;">Compute my tax</button>



<?php
if(isset($_GET['compute'])) 
    {
                    
        $salary = $_GET["salary"] ;
        $salaryType = $_GET["Radio"];
        $excess;
        $annualTax;
        $monthlyTax;
        
    
        if($salaryType == "Monthly" )
        {
            $salary*=12;
            if($salary<=250000.0)
            {
                $monthlyTax = 0.0;
                $annualTax =0.0;
            }
            else if($salary >250000.0 && $salary <= 400000.0)
            {
                $excess =  $salary-250000.0;
                $annualTax = $excess*0.2;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >400000.0 && $salary <= 800000.0)
            {
                $excess =  $salary-400000.0;
                $annualTax = 30000+$excess*0.25;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >800000.0 && $salary <= 2000000.0)
            {
                $excess =  $salary-800000.0;
                $annualTax = 130000+$excess*0.30;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >2000000.0 && $salary <= 8000000.0)
            {
                $excess =  $salary-2000000.0;
                $annualTax = 490000+$excess*0.32;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >8000000.0)
            {
                $excess =  $salary-8000000.0;
                $annualTax = 2410000+$excess*0.35;
                $monthlyTax = $annualTax/12;
            }
            $formatS = number_format($salary,2);
            $formatA = number_format($annualTax,2);
            $formatM = number_format($monthlyTax,2);
            
            echo "<br><center><font size='6pt'><b>Annual Salary:</b> <span>&#8369;</span> $formatS<br></center></font>"; 
            echo "<center><font size='6pt'><b>Est Annual Tax:</b> <span>&#8369;</span> $formatA<br></center></font>";
            echo "<center><font size='6pt'><b>Est Monthly Tax:</b> <span>&#8369;</span> $formatM<br></center></font>";
        }
        if($salaryType == "BiMonthly" )
        {
            $salary*=24;
            if($salary<=250000.0)
            {
                $monthlyTax = 0.0;
                $annualTax =0.0;
            }
            else if($salary >250000.0 && $salary <= 400000.0)
            {
                $excess =  $salary-250000.0;
                $annualTax = $excess*0.2;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >400000.0 && $salary <= 800000.0)
            {
                $excess =  $salary-400000.0;
                $annualTax = 30000+$excess*0.25;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >800000.0 && $salary <= 2000000.0)
            {
                $excess =  $salary-800000.0;
                $annualTax = 130000+$excess*0.30;
                $monthlyTax = $annualTax/12;
            }
            else if($salary >2000000.0 && $salary <= 8000000.0)
            {
                $excess =  $salary-2000000.0;
                $annualTax = 490000+$excess*0.32;
                $monthlyTax = $annualTax/12;
            }
            else if($salary > 8000000.0)
            {
                $excess =  $salary-8000000.0;
                $annualTax = 2410000+($excess*0.35);
                $monthlyTax = $annualTax/12;
            }
            $formatS = number_format($salary,2);
            $formatA = number_format($annualTax,2);
            $formatM = number_format($monthlyTax,2);

            echo "<center><font size='6pt'><b> Annual Salary:</b> <span>&#8369;</span> $formatS<br></center></font>"; 
            echo "<center><font size='6pt'><b>Est. Annual Tax:</b> <span>&#8369;</span> $formatA<br></center></font>";
            echo "<center><font size='6pt'><b>Est.Monthly Tax:</b> <span>&#8369;</span> $formatM<br></center></font>";
                        }          
    }
?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>