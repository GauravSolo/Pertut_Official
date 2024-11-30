<?php
  include 'config.inc.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PERTUT OFFICIAL</title>
  
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="styles/whoweare.css">
    <style>
      svg{
        position: absolute;
      }
      #home {
  clip-path: url(#cache);
}

#red {
  fill: none;
  opacity: 0.15;
  stroke: #CE1B5F;
  stroke-width: 12;
  stroke-miterlimit:10;
  animation: show 4s;
  animation-fill-mode: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out; 
}

#blue {
  fill: none;
  opacity: 0.15;
  stroke: #06A1C4;
  stroke-width: 12;
  stroke-miterlimit:10;
  animation: show 4s;
  animation-fill-mode: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}

#light-blue {
  fill: none;
  opacity: 0.15;
  stroke: #06A1C4;
  stroke-width: 6;
  stroke-miterlimit:10;
  stroke-dasharray: 200;
  stroke-dashoffset: 800;
  animation: draw 4s;
  animation-fill-mode: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;    
}

@keyframes draw {
  to {
    stroke-dashoffset: 0;
 }
    }

@keyframes show {
  0% {
    opacity: 0.15;
 }
  50% {
    opacity: 0.2;
 }
  100% {
    opacity: 0.15;
 }
    }
    .logoname{
        display:block;
  }
  .logoimage{
        display:none;
  }

      @media only screen and (max-width: 600px){
 .logoname{
        display:none;
  }
  .logoimage{
        display:block;
  }
}
    </style>
  </head>
  <body>
    
      <!-- <div class="front position-absolute">
      </div> -->
    <div class="container-fluid m-0 mb-5 p-0  position-relative ">

        <div class="row mainrow m-0 p-0  front position-relative d-flex flex-row">
            <div class="col-12 position-relative">
              <?php
                      include "navbar.php";
              ?>
                    <h1 class="mt-0 mt-sm-5 text-center heading1" style="color:orange;">
                        Who We Are
                      </h1>
            </div>
            <!-- <div class="col-12 frontrow d-flex flex-column justify-content-start overflow-hidden" >
                <div class="row h-50 "  >
                  <div class="col d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-white heading">
                      WHO WE ARE
                  </h1>
                  <p class="text-white text-center">Acing elit phasellus eu ornare erat. Curabitur pulvinar elit id eros tincidunt.</p>
                  </div>
                </div>
            </div> -->
        </div>


<div  class="row d-flex my-5 my-sm-0 flex-column-reverse  flex-lg-row justify-content-lg-around align-items-lg-center" style="min-height: 80vh;width: 80vw;margin-left: auto;margin-right: auto;">

  <div   class="col-lg-5 h-50 d-flex flex-column justify-content-between align-items-start ">
    <h1  style="width: 100%; border-bottom: 2px solid #ffa737; font-size: 35px;line-height:1.4; font-weight:800;font-family: 'Source Sans Pro';">
      PERTUT
      </h1>
    <!-- <p  style="font-size: 20px ; line-height: 1.4 ; font-family: 'Source Sans Pro';  color:#5d5f64; text-align: justify;" >Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. ex ea commodo consequat.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->

    <p   style="font-size: 20px;line-height:1.4;font-family: 'Source Sans Pro'; color:#5d5f64; text-align: justify;">
    Welcome everyone on PERTUT.
    This is platform where you will get a personal tutor for your children at your home.

    No need  to go outside for any coaching classes .
    just start your learning with us at your home.

    <br><strong>Key features of this platform. </strong>
    <ul>
      <li>We will save you travel time from any season.
    </li>
      <li>We will provide you a quality of education.
    </li>
    <li>Here you can practice and give tests on PerTut.
    </li>
    <li>Track progress of your children
    </li>
    </ul>
    There we will make students report card by which parents can check the progress of their children. 
    we will conduct the competition between all the students who is connected with us and provide some gift to winners.

    <strong> Our AIM : FOCUS ON QUALITY OF EDUCATION NOT A QUANTITY OF STUDENTS.</strong>
    </p>
    <div class="col-12 mt-3 d-flex" style="font-size:1.2rem;">
      <div class="pop button text-white py-1 px-3 d-flex justify-content-center align-items-center" style="background-color: #ffa737;border-radius: 50px;"><a class="text-decoration-none text-white" href="what-we-do.php">DISCOVER</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-5 text-center position-relative h-50 my-5" >
          <img src="images/teacherstudent.png" style="width:80%;height:80%;
            object-fit:cover; " alt="">

            
<svg version="1.1" id="home-anim" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 1820 1080" style="enable-background:new 0 0 1820 1080;" xml:space="preserve">

  <g id="home">
  <defs>
    <rect id="masque" y="0.4" width="1820" height="1080"/>
  </defs>
  <clipPath id="cache">
    <use xlink:href="#masque"  style="overflow:visible;"/>
  </clipPath>
  <g id="light-blue">
    <line x1="630.8" y1="894.3" x2="476.3" y2="1048.8"/>
    <line x1="858.2" y1="823.9" x2="1012.7" y2="669.4"/>
    <line x1="1066.9" y1="458.2" x2="912.4" y2="612.7"/>
    <line x1="1294.3" y1="387.8" x2="1448.8" y2="233.3"/>
    <line x1="1503" y1="22.1" x2="1348.5" y2="176.6"/>
    <line x1="895.6" y1="1166.6" x2="1050.1" y2="1012.1"/>
    <line x1="1104.3" y1="800.9" x2="949.8" y2="955.4"/>
    <line x1="1331.7" y1="730.5" x2="1486.2" y2="576"/>
    <line x1="1540.4" y1="364.8" x2="1385.9" y2="519.3"/>
    <line x1="1767.8" y1="294.4" x2="1922.3" y2="139.9"/>
    <line x1="1976.5" y1="-71.3" x2="1822" y2="83.2"/>
    <line x1="1369.1" y1="1073.2" x2="1523.6" y2="918.7"/>
    <line x1="1577.8" y1="707.5" x2="1423.3" y2="862"/>
    <line x1="1805.2" y1="637.1" x2="1959.7" y2="482.6"/>
    <line x1="1624" y1="1041.4" x2="1469.4" y2="1195.9"/>
    <line x1="-134.7" y1="674.9" x2="19.8" y2="520.4"/>
    <line x1="74" y1="309.2" x2="-80.5" y2="463.7"/>
    <line x1="301.4" y1="238.8" x2="455.9" y2="84.3"/>
    <line x1="510.1" y1="-126.9" x2="355.6" y2="27.6"/>
    <line x1="-88.6" y1="1008.9" x2="65.9" y2="854.4"/>
    <line x1="120.1" y1="643.1" x2="-34.4" y2="797.7"/>
    <line x1="347.5" y1="572.8" x2="502" y2="418.3"/>
    <line x1="556.2" y1="207.1" x2="401.7" y2="361.6"/>
    <line x1="783.6" y1="136.7" x2="938.1" y2="-17.8"/>
    <line x1="157.6" y1="985.8" x2="3" y2="1140.3"/>
    <line x1="384.9" y1="915.5" x2="539.4" y2="760.9"/>
    <line x1="593.6" y1="549.7" x2="439.1" y2="704.3"/>
    <line x1="821" y1="479.4" x2="975.5" y2="324.9"/>
    <line x1="1029.7" y1="113.6" x2="875.2" y2="268.2"/>
    <line x1="1257.1" y1="43.3" x2="1411.6" y2="-111.2"/>
  </g>
  <g id="red">
    <line x1="794.4" y1="883.4" x2="639.8" y2="1037.9"/>
    <line x1="694.6" y1="834.8" x2="849.2" y2="680.3"/>
    <line x1="1230.4" y1="447.3" x2="1075.9" y2="601.8"/>
    <line x1="1130.7" y1="398.7" x2="1285.2" y2="244.2"/>
    <line x1="1666.5" y1="11.2" x2="1512" y2="165.7"/>
    <line x1="732" y1="1177.5" x2="886.6" y2="1023"/>
    <line x1="1267.9" y1="790" x2="1113.3" y2="944.5"/>
    <line x1="1168.1" y1="741.4" x2="1322.7" y2="586.9"/>
    <line x1="1703.9" y1="353.9" x2="1549.4" y2="508.4"/>
    <line x1="1604.2" y1="305.3" x2="1758.7" y2="150.8"/>
    <line x1="1205.5" y1="1084.1" x2="1360.1" y2="929.6"/>
    <line x1="1741.4" y1="696.5" x2="1586.8" y2="851.1"/>
    <line x1="1641.6" y1="648" x2="1796.2" y2="493.5"/>
    <line x1="1787.5" y1="1030.5" x2="1633" y2="1185"/>
    <line x1="1687.8" y1="981.9" x2="1842.3" y2="827.4"/>
    <line x1="200.1" y1="-44.4" x2="45.6" y2="110.1"/>
    <line x1="237.5" y1="298.3" x2="83" y2="452.8"/>
    <line x1="137.8" y1="249.7" x2="292.3" y2="95.2"/>
    <line x1="673.6" y1="-137.8" x2="519.1" y2="16.7"/>
    <line x1="283.7" y1="632.2" x2="129.2" y2="786.8"/>
    <line x1="184" y1="583.7" x2="338.5" y2="429.2"/>
    <line x1="719.8" y1="196.2" x2="565.2" y2="350.7"/>
    <line x1="620" y1="147.6" x2="774.6" y2="-6.9"/>
    <line x1="321.1" y1="974.9" x2="166.6" y2="1129.4"/>
    <line x1="221.4" y1="926.4" x2="375.9" y2="771.8"/>
    <line x1="757.2" y1="538.8" x2="602.7" y2="693.4"/>
    <line x1="657.5" y1="490.3" x2="812" y2="335.8"/>
    <line x1="1193.3" y1="102.7" x2="1038.7" y2="257.3"/>
    <line x1="1093.5" y1="54.2" x2="1248.1" y2="-100.3"/>
  </g>
  <g id="blue">
    <line x1="225.8" y1="1151" x2="534.9" y2="841.9"/>
    <line x1="827.1" y1="1003.3" x2="518" y2="1312.3"/>
    <line x1="661.9" y1="714.9" x2="971" y2="405.9"/>
    <line x1="1263.1" y1="567.2" x2="954.1" y2="876.3"/>
    <line x1="1098" y1="278.8" x2="1407.1" y2="-30.2"/>
    <line x1="1699.2" y1="131.1" x2="1390.2" y2="440.2"/>
    <line x1="699.3" y1="1057.6" x2="1008.4" y2="748.5"/>
    <line x1="1300.6" y1="909.9" x2="991.5" y2="1218.9"/>
    <line x1="1135.4" y1="621.5" x2="1444.5" y2="312.4"/>
    <line x1="1736.6" y1="473.8" x2="1427.6" y2="782.8"/>
    <line x1="1571.5" y1="185.4" x2="1880.6" y2="-123.6"/>
    <line x1="1172.8" y1="964.2" x2="1481.9" y2="655.1"/>
    <line x1="1774.1" y1="816.5" x2="1465" y2="1125.5"/>
    <line x1="1608.9" y1="528.1" x2="1918" y2="219"/>
    <line x1="1219" y1="1298.1" x2="1528" y2="989.1"/>
    <line x1="1655.1" y1="862" x2="1964.1" y2="553"/>
    <line x1="232.8" y1="75.5" x2="-76.2" y2="384.6"/>
    <line x1="270.2" y1="418.2" x2="-38.8" y2="727.3"/>
    <line x1="105.1" y1="129.8" x2="414.2" y2="-179.2"/>
    <line x1="706.3" y1="-17.9" x2="397.3" y2="291.2"/>
    <line x1="-284.8" y1="899.9" x2="24.2" y2="590.8"/>
    <line x1="316.4" y1="752.2" x2="7.3" y2="1061.2"/>
    <line x1="151.3" y1="463.8" x2="460.3" y2="154.7"/>
    <line x1="752.5" y1="316.1" x2="443.4" y2="625.1"/>
    <line x1="587.3" y1="27.7" x2="896.4" y2="-281.4"/>
    <line x1="1188.6" y1="-120" x2="879.5" y2="189"/>
    <line x1="-247.4" y1="1242.5" x2="61.6" y2="933.5"/>
    <line x1="188.7" y1="806.4" x2="497.7" y2="497.4"/>
    <line x1="789.9" y1="658.8" x2="480.8" y2="967.8"/>
    <line x1="624.8" y1="370.4" x2="933.8" y2="61.3"/>
    <line x1="1226" y1="222.7" x2="916.9" y2="531.7"/>
    <line x1="1662.1" y1="-213.4" x2="1353" y2="95.6"/>
  </g>
</g>
</svg>
  </div>
</div>


<div class="row m-0 d-flex flex-column align-items-around justify-content-around position-relative my-3" style="background-color:#f7f8f9;">
      <div class="col-12">
      <svg version="1.1" id="home-anim" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 1820 1080" style="enable-background:new 0 0 1820 1080;" xml:space="preserve">

  <g id="home">
  <defs>
    <rect id="masque" y="0.4" width="1820" height="1080"/>
  </defs>
  <clipPath id="cache">
    <use xlink:href="#masque"  style="overflow:visible;"/>
  </clipPath>
  <g id="light-blue">
    <line x1="630.8" y1="894.3" x2="476.3" y2="1048.8"/>
    <line x1="858.2" y1="823.9" x2="1012.7" y2="669.4"/>
    <line x1="1066.9" y1="458.2" x2="912.4" y2="612.7"/>
    <line x1="1294.3" y1="387.8" x2="1448.8" y2="233.3"/>
    <line x1="1503" y1="22.1" x2="1348.5" y2="176.6"/>
    <line x1="895.6" y1="1166.6" x2="1050.1" y2="1012.1"/>
    <line x1="1104.3" y1="800.9" x2="949.8" y2="955.4"/>
    <line x1="1331.7" y1="730.5" x2="1486.2" y2="576"/>
    <line x1="1540.4" y1="364.8" x2="1385.9" y2="519.3"/>
    <line x1="1767.8" y1="294.4" x2="1922.3" y2="139.9"/>
    <line x1="1976.5" y1="-71.3" x2="1822" y2="83.2"/>
    <line x1="1369.1" y1="1073.2" x2="1523.6" y2="918.7"/>
    <line x1="1577.8" y1="707.5" x2="1423.3" y2="862"/>
    <line x1="1805.2" y1="637.1" x2="1959.7" y2="482.6"/>
    <line x1="1624" y1="1041.4" x2="1469.4" y2="1195.9"/>
    <line x1="-134.7" y1="674.9" x2="19.8" y2="520.4"/>
    <line x1="74" y1="309.2" x2="-80.5" y2="463.7"/>
    <line x1="301.4" y1="238.8" x2="455.9" y2="84.3"/>
    <line x1="510.1" y1="-126.9" x2="355.6" y2="27.6"/>
    <line x1="-88.6" y1="1008.9" x2="65.9" y2="854.4"/>
    <line x1="120.1" y1="643.1" x2="-34.4" y2="797.7"/>
    <line x1="347.5" y1="572.8" x2="502" y2="418.3"/>
    <line x1="556.2" y1="207.1" x2="401.7" y2="361.6"/>
    <line x1="783.6" y1="136.7" x2="938.1" y2="-17.8"/>
    <line x1="157.6" y1="985.8" x2="3" y2="1140.3"/>
    <line x1="384.9" y1="915.5" x2="539.4" y2="760.9"/>
    <line x1="593.6" y1="549.7" x2="439.1" y2="704.3"/>
    <line x1="821" y1="479.4" x2="975.5" y2="324.9"/>
    <line x1="1029.7" y1="113.6" x2="875.2" y2="268.2"/>
    <line x1="1257.1" y1="43.3" x2="1411.6" y2="-111.2"/>
  </g>
  <g id="red">
    <line x1="794.4" y1="883.4" x2="639.8" y2="1037.9"/>
    <line x1="694.6" y1="834.8" x2="849.2" y2="680.3"/>
    <line x1="1230.4" y1="447.3" x2="1075.9" y2="601.8"/>
    <line x1="1130.7" y1="398.7" x2="1285.2" y2="244.2"/>
    <line x1="1666.5" y1="11.2" x2="1512" y2="165.7"/>
    <line x1="732" y1="1177.5" x2="886.6" y2="1023"/>
    <line x1="1267.9" y1="790" x2="1113.3" y2="944.5"/>
    <line x1="1168.1" y1="741.4" x2="1322.7" y2="586.9"/>
    <line x1="1703.9" y1="353.9" x2="1549.4" y2="508.4"/>
    <line x1="1604.2" y1="305.3" x2="1758.7" y2="150.8"/>
    <line x1="1205.5" y1="1084.1" x2="1360.1" y2="929.6"/>
    <line x1="1741.4" y1="696.5" x2="1586.8" y2="851.1"/>
    <line x1="1641.6" y1="648" x2="1796.2" y2="493.5"/>
    <line x1="1787.5" y1="1030.5" x2="1633" y2="1185"/>
    <line x1="1687.8" y1="981.9" x2="1842.3" y2="827.4"/>
    <line x1="200.1" y1="-44.4" x2="45.6" y2="110.1"/>
    <line x1="237.5" y1="298.3" x2="83" y2="452.8"/>
    <line x1="137.8" y1="249.7" x2="292.3" y2="95.2"/>
    <line x1="673.6" y1="-137.8" x2="519.1" y2="16.7"/>
    <line x1="283.7" y1="632.2" x2="129.2" y2="786.8"/>
    <line x1="184" y1="583.7" x2="338.5" y2="429.2"/>
    <line x1="719.8" y1="196.2" x2="565.2" y2="350.7"/>
    <line x1="620" y1="147.6" x2="774.6" y2="-6.9"/>
    <line x1="321.1" y1="974.9" x2="166.6" y2="1129.4"/>
    <line x1="221.4" y1="926.4" x2="375.9" y2="771.8"/>
    <line x1="757.2" y1="538.8" x2="602.7" y2="693.4"/>
    <line x1="657.5" y1="490.3" x2="812" y2="335.8"/>
    <line x1="1193.3" y1="102.7" x2="1038.7" y2="257.3"/>
    <line x1="1093.5" y1="54.2" x2="1248.1" y2="-100.3"/>
  </g>
  <g id="blue">
    <line x1="225.8" y1="1151" x2="534.9" y2="841.9"/>
    <line x1="827.1" y1="1003.3" x2="518" y2="1312.3"/>
    <line x1="661.9" y1="714.9" x2="971" y2="405.9"/>
    <line x1="1263.1" y1="567.2" x2="954.1" y2="876.3"/>
    <line x1="1098" y1="278.8" x2="1407.1" y2="-30.2"/>
    <line x1="1699.2" y1="131.1" x2="1390.2" y2="440.2"/>
    <line x1="699.3" y1="1057.6" x2="1008.4" y2="748.5"/>
    <line x1="1300.6" y1="909.9" x2="991.5" y2="1218.9"/>
    <line x1="1135.4" y1="621.5" x2="1444.5" y2="312.4"/>
    <line x1="1736.6" y1="473.8" x2="1427.6" y2="782.8"/>
    <line x1="1571.5" y1="185.4" x2="1880.6" y2="-123.6"/>
    <line x1="1172.8" y1="964.2" x2="1481.9" y2="655.1"/>
    <line x1="1774.1" y1="816.5" x2="1465" y2="1125.5"/>
    <line x1="1608.9" y1="528.1" x2="1918" y2="219"/>
    <line x1="1219" y1="1298.1" x2="1528" y2="989.1"/>
    <line x1="1655.1" y1="862" x2="1964.1" y2="553"/>
    <line x1="232.8" y1="75.5" x2="-76.2" y2="384.6"/>
    <line x1="270.2" y1="418.2" x2="-38.8" y2="727.3"/>
    <line x1="105.1" y1="129.8" x2="414.2" y2="-179.2"/>
    <line x1="706.3" y1="-17.9" x2="397.3" y2="291.2"/>
    <line x1="-284.8" y1="899.9" x2="24.2" y2="590.8"/>
    <line x1="316.4" y1="752.2" x2="7.3" y2="1061.2"/>
    <line x1="151.3" y1="463.8" x2="460.3" y2="154.7"/>
    <line x1="752.5" y1="316.1" x2="443.4" y2="625.1"/>
    <line x1="587.3" y1="27.7" x2="896.4" y2="-281.4"/>
    <line x1="1188.6" y1="-120" x2="879.5" y2="189"/>
    <line x1="-247.4" y1="1242.5" x2="61.6" y2="933.5"/>
    <line x1="188.7" y1="806.4" x2="497.7" y2="497.4"/>
    <line x1="789.9" y1="658.8" x2="480.8" y2="967.8"/>
    <line x1="624.8" y1="370.4" x2="933.8" y2="61.3"/>
    <line x1="1226" y1="222.7" x2="916.9" y2="531.7"/>
    <line x1="1662.1" y1="-213.4" x2="1353" y2="95.6"/>
  </g>
</g>
</svg>
      </div>
    <div class="col-12"  style="z-index:100;">
        
    <div class="wrapper my-4">

<div class="profile-card">
    <div class="profile-header">
        <img src="images/bhu.jpg" alt="">
    </div>
    <div class="profile-body">
          <div class="author-img">
              <img src="userlogo/ai2.jpg" alt="">
          </div>
          <div class="name">Gaurav Sharma</div>
          <div class="intro">
             <!-- <p>Robert smith is an enthsiastic and passionate story
                 Teller.He loves to do different
                  home-made things and share to the world.
             </p> -->
             <p>
             Founder 
             </p>
             <p class="fw-bold" >
             BANARAS HINDU UNIVERSITY
             </p>
          </div>
          <div class="social-icon">
              <ul>
                  <li>
                      <a href="https://www.facebook.com/profile.php?id=100014702259745" target="_blank">
                          <i class="fab fa-facebook-f"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://twitter.com/Gaurav_Solo" target="_blank">
                          <i class="fab fa-twitter"></i>
                      </a>
                  </li>
          
                  <li>
                      <a href="https://www.instagram.com/gaurav_solo/" target="_blank">
                          <i class="fab fa-instagram"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gauravsharma9339@gmail.com"  target="_blank">
                          <i class="fab fa-google-plus-g"></i>
                      </a>
                  </li>
              </ul>
          </div>
    </div>
</div>


</div>  
    </div>
</div>

</div>


  
  <div class="row">
<?php 

include "footer.php";

?>
  </div>



<?php
include "signupform.php";
?>


       
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/3785baa6f3.js" crossorigin="anonymous"></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6330499637898912e96b2b00/1gdq9ut95';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
var myModal,invoiceModal1,invoiceModal2,invoiceModal3;
$(document).ready(function () {
    myModal = new bootstrap.Modal(document.getElementById('registermodal'), {
  keyboard: true
});
// invoiceModal1 = new bootstrap.Modal(document.getElementById('invoicemodal1'), {
//   keyboard: true
// });
// invoiceModal2 = new bootstrap.Modal(document.getElementById('invoicemodal2'), {
//   keyboard: true
// });
// invoiceModal3 = new bootstrap.Modal(document.getElementById('invoicemodal3'), {
//   keyboard: true
// });

// myModal.show();
// invoiceModal1.show();
// invoiceModal2.show();
// invoiceModal3.show();

});

function closeRegisterModal(){
  myModal.hide();
}

function saveEmail(){
  email = $("#saveemail").val().trim();
  
if(email == "")
{
  return;
}

  $.ajax({
    url: "fetch_and_submit_sitedata.php",
    method:"POST",
    dataType: "json",
    data:{
        saveEmail: "email",
        email:email
    },
    success:function(data){
            if(data.error == '1')
            {

              alert("Something went wrong");
              
            }else{
              
              alert("Thanks ");
            }
            $("#saveemail").val("");
    }
  });
}
</script>

<script src="scripts/signupform.js"></script>
  </body>

</html>