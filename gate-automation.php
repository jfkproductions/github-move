<?php
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

//Overwite any variables here
$defWhatWeDo = "Gate Automation and repair Automatic Gate Motors from Pretoria to Sandton."; //goes into title and meta description
$defMetaKeywords = "automatic gate motors, gate automation";
$defCompanyShort = "Gate Automation - Electric Gate Motors - Repairs Replace Installs.";

$mainPageHeading = "Gate Automation | We Install,Supply and Repair Automatic Gates .";
$mainPageParagraph = "Sliding and swinging gate automation, in Pretoria, Centurion, Midrand, Fourways, up to Sandton.";
$mainPageParagraph .= "<br/><br/>All major brands of electric gate motors including Centurion Gate Motors, Gemini and more.";

$pageTitle = "Gate Automation | Automatic Gate Motors Repairs and Installation";
$metaTitle = "Gate Automation and Automatic Gate Motor Repairs and Installation of Automated Gates";
$metaDescription = "Gate Automation - We supply,install and repair automatic gate motors of all major brands throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "automatic gate motor,electric gate motors,electric gate automation";


include "include/header.php";

?>


<h1>Gate Automation and Electric Gate Motors </h1>
<div style="float:right;width:380px">
    <div style="background-color: lightblue;">
    <b class="rtop">
      <b class="r1"></b> <b class="r2"></b> <b class="r3"></b> <b class="r4"></b>
    </b>
    <!--content goes here -->
    <div style="margin:15px">
        <p>
            Whether it is help with a sliding gate automation or a swing gate, you've come to the right place.
        </p>

        <p>
            Gate Motor Guru aims to be the number one source of information for everything automatic gate motors related, whether
            it is selecting the right motor, getting help with your automated gate problems.
        </p>
        <p> Our <strong>Gate Automation Experts</strong> are standing by to help you get quotes and fix your broken gate motors.
        </p>
    </div>
    <!--content end -->
    <b class="rbottom">
      <b class="r4"></b> <b class="r3"></b> <b class="r2"></b> <b class="r1"></b>
    </b>
    </div>

</div>


<div style="width:495px;text-align: center;background-color: #858585; padding:10px">
    <div style="text-align:left">
          <br/>
            We do<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="text-transform:uppercase"><strong>Gate Motor Repairs</strong></span>&nbsp;&nbsp;&nbsp; and &nbsp;&nbsp;
            <span style="text-transform:uppercase"><strong>Install and Supply New Gate Motors</strong></span>
            <br/>
            <br/>
    </div>
</div>
<br/>
<br/>

Find the
<h2 style ="margin-left:20px">Gate Motor Guru</h2>
<span style="margin-left:160px">closest to you!</span>
<br/>
<br/>
<p style="position:relative;left:-20px">
    <u>Select your area:</u>
</p>

<?php
    showAllAreasInSA();
?>

<br/>
<br/>
<table>
    <tr>
        <td style="width:50%">
            <?php include "include/tips-list-1.php"; ?>
        </td>
        <td style="width:50%;vertical-align: top;">
            <?php include "include/tips-list-2.php"; ?>
        </td>

    </tr>
</table>
<br/>

<?php include "include/form.php"; ?>


<br/>
<br/>
Featured Gate Automation Experts<br/>
<br/>

<?php
    include_once "include/gurus.php";
    showHomePageGurus();
?>




<div style="clear:both"></div>
<br/>
<br/>
<div style="float:right">
    Are you a Gate Motor Expert?<br/>
    &nbsp;&nbsp; ...looking for more business?<br/>
    <div style="text-align: center">
        <a href="partner-signup.php" style="text-decoration: none"><img src="images/join.jpg" alt="Join our Approved Gate Motor Gurus"/></a>
    </div>
    <div style="display:block;position:relative;left:30px">
        <img src="images/become-a-partner.gif"/>
    </div>
</div>

<div style="clear:both"/>

<br/>
<br/>

<h2>Gate Motor Services</h2>
<?php showServices(); ?>


<br/>

<h2>Gate Motors Brands</h2>
<?php showBrands(); ?>



<br/>
<br/>
<?php
    if (isset($extraContent)) {
        include($extraContent);
        echo "<br/> <br/>";
    }
?>

<h2>Gate Automation and Electric Gates</h2>
<p>
    Gate Automation is the process of converting a regular gate to an automatic gate with a motorised mechanism that
    drives the opening and closing of the electric gate. Such a conversion to automatic gates can either be accomplished with
    a sliding gate mechanism or a swinging gate mechanism.
</p>
<p>
    Sliding Gate Motors have become the norm these days, but in places where the sideways space for the gate to slide
    into simply isn't available (or in in situations where the existing gate is a double steel gate), a swing gate motor
    is installed.
</p>
<p>
    If you are just looking for some general information about <strong>gate automation</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>automatic gate motor</em> Guru's.
    South Africa's leading Gate Motors Web Site.
</p>

<br/>
<br/>






<?php include "include/footer.php";?>