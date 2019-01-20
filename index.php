<?php
//index.php
$error = '';
$area = '';
$county = '';
$ocn = '';
$fid = '';
$fn = '';
$zip = '';
$age = '';
$sex = '';
$race = '';
$ethnicity = '';
$admission = '';
$digcode = '';
$digdes = '';
$procode = '';
$prodes = '';
$drgc = '';
$drgd = '';
$mdcc = '';
$mdcd = '';
$illcode = '';
$illdes = '';
$mortality = '';
$surgical = '';
$procode = '';
$pay1 = '';
$pay2 = '';
$pay3 = '';
$attendingProvider = '';
$operatingProvider = '';
$otherProvider = '';
$birthWeight = '';
$abortion = '';
$emergency = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 
  $area = clean_text($_POST["area"]);
  $county = clean_text($_POST["county"]);
  $ocn = clean_text($_POST["ocn"]);
  $fid = clean_text($_POST["fid"]);
  $fn = clean_text($_POST["fn"]);
  $zip = clean_text($_POST["zip"]);
  $age = clean_text($_POST["age"]);
  $sex = clean_text($_POST["sex"]);
  $race = clean_text($_POST["race"]);
  $ethnicity = clean_text($_POST["ethnicity"]);
  $admission = clean_text($_POST["admission"]);
  $digcode = clean_text($_POST["digcode"]);
  $digdes = clean_text($_POST["digdes"]);
  $procode = clean_text($_POST["procode"]);
  $prodes = clean_text($_POST["prodes"]);
  $drgc = clean_text($_POST["drgc"]);
  $drgd = clean_text($_POST["drgd"]);
  $mdcc = clean_text($_POST["mdcc"]);
  $mdcd = clean_text($_POST["mdcd"]);
  $illcode = clean_text($_POST["illcode"]);
  $illdes = clean_text($_POST["illdes"]);
  $mortality = clean_text($_POST["mortality"]);
  $surgical = clean_text($_POST["surgical"]);
  $procode = clean_text($_POST["procode"]);
  $pay1 = clean_text($_POST["pay1"]);
  $pay2 = clean_text($_POST["pay2"]);
  $pay3 = clean_text($_POST["pay3"]);
  $attendingProvider = clean_text($_POST["attendingProvider"]);
  $operatingProvider = clean_text($_POST["operatingProvider"]);
  $otherProvider = clean_text($_POST["otherProvider"]);
  $birthWeight = clean_text($_POST["birthWeight"]);
  $abortion = clean_text($_POST["abortion"]);
  $emergency = clean_text($_POST["emergency"]);
  
  $command = escapeshellcmd('/model.py');

  //move to new html
  header('Location: result.html');


}




 if($error == '')
 {
  $file_open = fopen("dada.csv", "w");

  $form_data = array(
  // 'sr_no'  => $no_rows,
   'area'  => $area,
   'county'  => $county,
   'ocn' => $ocn,
   'fid' => $fid,
   'fn' => $fn,
   'age' => $age,
   'zip' => $zip,
   'sex' => $sex,
   'race' => $race,
   'ethnicity' => $ethnicity,
   'admission' => $admission,
   'digcode' => $digcode,
   'digdes' => $digdes,
   'procode' => $procode,
   'prodes' => $prodes,
   'drgc' => $drgc,
   'drgd' => $drgd,
   'mdcc' => $mdcc,
   'mdcd' => $mdcd,
   'illcode' => $illcode,
   'illdes' => $illdes,
   'mortality' => $mortality,
   'surgical' => $surgical,
   'procode' => $procode,
   'pay1' => $pay1,
   'pay2' => $pay2,
   'pay3' => $pay3,
   'attendingProvider' => $attendingProvider,
   'operatorProvider' => $operatingProvider,
   'otherProvider' => $otherProvider,
   'birthWeight' => $birthWeight,
   'abortion' => $abortion,
   'emergency' => $emergency

  );
  fputcsv($file_open, $form_data);
    $area = '';
    $county = '';
    $ocn = '';
    $fid = '';
    $fn = '';
    $zip = '';
    $age = '';
    $sex = '';
    $race = '';
    $ethnicity = '';
    $admission = '';
    $digcode = '';
    $digdes = '';
    $procode = '';
    $prodes = '';
    $drgc = '';
    $drgd = '';
    $mdcc = '';
    $mdcd = '';
    $illcode = '';
    $illdes = '';
    $mortality = '';
    $surgical = '';
    $procode = '';
    $pay1 = '';
    $pay2 = '';
    $pay3 = '';
    $attendingProvider = '';
    $operatingProvider = '';
    $otherProvider = '';
    $birthWeight = '';
    $abortion = '';
    $emergency = '';
   
 }
 


?>
<!DOCTYPE html>
<html>
 <head>
 <title>MEDH</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">MEDHealth</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">Predicting a patient's hospital stay.</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
        <label  for="area">Service Area</label>
        <div >
            <select class="form-control"  name = "area">
                <option>Finger Lakes</option>
                <option>Capital/Adirondack</option>
                <option>Central NY</option>
                <option>Hudson Valley</option>
                <option>Long Island</option>
                <option>New York City</option>
                <option>Southern Tier</option>
                <option>Western NY</option>
            </select>          
        </div>     
    </div>

     <div class="form-group">
      <label>Hospital County</label>
      <input type="text" class="form-control" name="county" name = "county" placeholder="County of Hospital">
     </div>
    
     <div class="form-group">
      <label>Operating Certificate Number</label>
      <input type="text" class="form-control" name="ocn" placeholder="12345678">
     </div>

    <div class="form-group">
     <label>Facility ID</label>
     <input type="number" class="form-control" name="fid" placeholder="123456">
    </div>
     
    <div class="form-group">
      <label>Facility Name</label>
      <input type="name" class="form-control" name="fn" placeholder="Name of Facility">
    </div>
    
    <div class="form-group">
      <label>Zip Code</label>
         <input type="number" class="form-control" name="zip" placeholder="First 3 digit of patient's zip code">
    </div>
    
    <div class="form-group">
     <label>Age Group</label>
     <div>
     <select class="form-control" name="age">
         <option>0-17</option>
         <option>18-29</option>
         <option>30-49</option>
         <option>50-69</option>
         <option>70 or Older</option>
    </select>
     </div>
    </div>
    
    <div class="form-group">
      <label>Sex</label>
      <div>
      <select class="form-control" name="sex">
          <option>M</option>
          <option>F</option>               
       </select>
      </div>
     </div>
     
    <div class="form-group">
      <label>Race</label>
      <div>          
        <select class="form-control" name="race">
            <option>Black/African American</option>
            <option>White</option>
            <option>Native Americans</option>
            <option>Asian/Pacific Islander</option>
            <option>Multi</option>
            <option>Other Race</option>
            <option>Unknown</option>
        </select>
      </div>    
    </div>
    
    <div class="form-group">
     <label class="control-label col-sm-2" >Ethnicity</label>
     <div>          
        <select class="form-control" name="ethnicity">
            <option>Spanish/Hispanic Origin</option>
            <option>Not of Spanish/Hispanic Origin</option>
            <option>Multi</option>
            <option>Unknown</option>
        </select>
       </div>    
     </div>

     <div class="form-group">
      <label>Type of Admission</label>      
        <select class="form-control" name="admission">
            <option>Elective</option>
            <option>Emergency</option>
            <option>Newborn</option>
            <option>Trauma</option>
            <option>Urgent</option>
            <option>Not Available</option>
        </select>    
    </div>

     <div class="form-group">
      <label>Diagnosis Code</label>
      <input type="number" class="form-control" name="digcode" placeholder="123">
     </div>
     
     <div class="form-group">
        <label>Diagnosis Description</label>
     <input type="text" class="form-control" name="digdes" placeholder="">
     </div>

     <div class="form-group">
      <label>Procedure Code</label>
      <input type="number" class="form-control" name="procode" placeholder="123">
     </div>

     <div class="form-group">
      <label>Procedure Description</label>
      <input type="text" class="form-control" name="prodes" placeholder="">
     </div>

     <div class = "form-group">
        <label>DRG Code</label>
        <input type="number" class="form-control" name="drgc" placeholder="123">
     </div>

     <div class="form-group">
      <label>DRG Description</label>
      <input type="text" class="form-control" name="drgd" placeholder="">
     </div>

     <div class="form-group">
      <label>MDC Code</label>
      <input type="number" class="form-control" name="mdcc" placeholder="123">
     </div>

     <div>
        <label>MDC Description</label>
        <input type="text" class="form-control" name="mdcd" placeholder="">
     </div>

     <div class="form-group">
      <label>Severity of Illness Code</label>
      <select class="form-control" name="illcode">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>     
     </div>

     <div class="form-group">
      <label>Severity of Illness Description</label>
      <select class="form-control" name="illdes">                               
        <option>Minor</option>
        <option>Moderate</option>
        <option>Major</option>
        <option>Extremes</option>
       </select>     
     </div>

     <div class="form-group">
      <label>Risk of Mortality</label>
      <select class="form-control" name="mortality">                               
        <option>Minor</option>
        <option>Moderate</option>
        <option>Major</option>
        <option>Extremes</option>
       </select>     
     </div>

     <div class="form-group">
      <label>Surgical Description </label>
      <select class="form-control" name="surgical">                               
        <option>Medical</option>
        <option>Surgical</option>
        <option>Not Applicable</option>
       </select>     
     </div>

     <div class="form-group">
      <label>Payment Type 1</label>
      <input type="text" class="form-control" name="pay1" placeholder="Type of Payment">
     </div>

     <div class="form-group">
      <label>Payment Type 2</label>
      <input type="text" class="form-control" name="pay2" placeholder="Type of Payment">
     </div>
     
     <div class="form-group">
      <label>Payment Type 3</label>
      <input type="text" class="form-control" name="pay3" placeholder="Type of Payment">
     </div>

     <div class="form-group">
      <label>Attending Provider License Number</label>
      <input type="number" class="form-control" name="attendingProvider" placeholder="12345678">
     </div>

     <div class="form-group">
      <label>Operating Provider License Number</label>
      <input type="number" class="form-control" name="operatingProvider" placeholder="12345678">
     </div>

     <div class="form-group">
      <label>Other Provider License Number</label>
      <input type="number" class="form-control" name="otherProvider" placeholder="12345678">
     </div>

     <div class="form-group">
      <label>Birth Weight</label>
      <input type="number" class="form-control" name="birthWeight" placeholder="Round to nearest 100g">
     </div>

    <div class="form-group">
      <label>Abortion Edit Indicator </label>
      <select class="form-control" name="abortion">                               
        <option>Y</option>
        <option>N</option>
       </select>     
     </div>

     <div class="form-group">
      <label>Emergency Indicator </label>
      <select class="form-control" name="emergency">                               
        <option>Y</option>
        <option>N</option>
       </select>     
     </div>

     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>

    </form>
   </div>
  </div>
 </body>
</html>
