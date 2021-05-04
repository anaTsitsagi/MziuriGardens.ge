<?php defined('DIR') OR exit; ?>


<div class="ProjectContentDiv WithBackground BackgroundBlue MobileWidth100">
	<div class="container Padding0"> 
		
		<div class="SelectsDiv"> 
			<div class="Item Item1">  
				<select id="SelectOnChangeValue"> 
					<optgroup label="<?php echo menu_title('8');?>">
						<option value="<?php echo href('81');?>">14</option>
						<option value="<?php echo href('80');?>">13</option>
						<option value="<?php echo href('79');?>">12</option>
						<option value="<?php echo href('82');?>">11</option>
						<option value="<?php echo href('77');?>">10</option>
						<option value="<?php echo href('76');?>">9</option>
						<option value="<?php echo href('75');?>">8</option>
						<option value="<?php echo href('74');?>">7</option>
						<option value="<?php echo href('73');?>">6</option>
						<option value="<?php echo href('72');?>">5</option>
						<option value="<?php echo href('102');?>">4</option>
					</optgroup>
				</select>
			</div>
			<div class="Item Item2">
				<select id="SelectOnChangeValue2">
					<optgroup label="<?php echo menu_title('7');?>">
						<option value="<?php echo href('98');?>">14</option>
						<option value="<?php echo href('97');?>">13</option>
						<option value="<?php echo href('96');?>">12</option>
						<option value="<?php echo href('95');?>">11</option>
						<option value="<?php echo href('94');?>">10</option>
<!--						<option value="<?php echo href('93');?>">6</option>
						<option value="<?php echo href('92');?>">5</option>
						<option value="<?php echo href('91');?>">4</option>
						<option value="<?php echo href('90');?>">3</option>
						<option value="<?php echo href('89');?>">2</option>
						<option value="<?php echo href('103');?>">1</option>-->
					</optgroup>
				</select> 
			</div>
			<div class="Item Item3">  
				<select id="SelectOnChangeValue3">
					<optgroup label="<?php echo menu_title('6');?> ">
						<option value="<?php echo href('70');?>">14</option>
						<option value="<?php echo href('69');?>">13</option>
						<option value="<?php echo href('68');?>">12</option>
						<option value="<?php echo href('67');?>">11</option>
						<option value="<?php echo href('66');?>">10</option>
						<option value="<?php echo href('65');?>">9</option>
						<option value="<?php echo href('64');?>">8</option>
						<option value="<?php echo href('63');?>">7</option>
						<option value="<?php echo href('62');?>">6</option>
						<option value="<?php echo href('61');?>">5</option>
						<option value="<?php echo href('104');?>">4</option>
					</optgroup>
				</select> 
			</div> 
		</div>
		
		
		<div class="row">
			<div class="col-sm-12"> 
				<div class="MapAreaDiv">
					<div class="PlanTitle">
						<?php echo l('choose');?>
					</div>
					<?php 
					$oleandra = g_select_building(8);					
					$ole = [];
					foreach ($oleandra as $v) {
						$ole[(int)$v["menutitle"]] = $v;
					}

					$gardens = g_select_building(7);
					$gar = [];
					foreach ($gardens as $v) {
						$gar[(int)$v["menutitle"]] = $v;
					}

					$hortenzia = g_select_building(6);
					$hor = [];
					foreach ($hortenzia as $v) {
						$hor[(int)$v["menutitle"]] = $v;
					}
					?>

					<img src="_website/img/project_image_1.jpg?<?php echo time(); ?>" class="map" id="sadasdada" usemap="#features" alt=""/>
					<map name="features"> 

                        <!-- oleandra -->   
						<!--<area size="<div class='FloorToolTip Color1'><span>4 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[4]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('102');?>" coords="89,1550,656,1553,1006,1574,1011,1508,648,1458,91,1458" shape="poly" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>-->
						<area size="<div class='FloorToolTip Color1'><span>4 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[4]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('102');?>" coords="190,1400,720,1470" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>5 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[5]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('72');?>" coords="190,1320,720,1390" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>6 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[6]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('73');?>" coords="190,1240,720,1310" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>7 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[7]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('74');?>" coords="190,1160,720,1230" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>8 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[8]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('75');?>" coords="190,1080,720,1150" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>9 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[9]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('76');?>" coords="190,1000,720,1070" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>10 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('77');?>" coords="190,920,720,990" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>11 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('82');?>" coords="190,840,720,910" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>12 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[12]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('79');?>" coords="190,760,720,830" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>13 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[13]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('80');?>" coords="190,680,720,750" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						<area size="<div class='FloorToolTip Color1'><span>14 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[14]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" href="<?php echo href('81');?>" coords="190,600,720,670" shape="rect" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						
						<area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('109');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" href="<?php echo href('109');?>" coords="172,1572,693,1562,999,1572,993,1662,674,1672,172,1669" shape="poly" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
						
						<area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('108');?></span><label> </label></div>" class="FloorHover fancybox"  data-fancybox="parking1" coords="172,1669,2338,1656,2831,1665,2831,1765,172,1772" shape="poly" href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>
    					<area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('107');?></span><label> </label></div>" class="FloorHover fancybox"  data-fancybox="parking2" coords="162,1772,2831,1766,2834,1872,159,1882" shape="poly" href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'>					   
					 
					 	<!-- gardens-->     
					   
						<!--<area size="<div class='FloorToolTip Color2'><span>16 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[16]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1230,430,1760,430,1760,500,1237,500" href="<?php echo href('114');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 0-->
						<area size="<div class='FloorToolTip Color2'><span>16 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[16]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,430,1750,500" href="<?php echo href('114');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>15 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[15]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,510,1750,580" href="<?php echo href('113');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>14 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[14]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,590,1750,660" href="<?php echo href('98');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>13 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[13]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,670,1750,740" href="<?php echo href('97');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color2'><span>12 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[12]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,750,1750,820" href="<?php echo href('96');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color2'><span>11 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,830,1750,900" href="<?php echo href('99');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>10 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="rect" coords="1230,910,1750,980" href="<?php echo href('94');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
 						
 						<area size="<div class='FloorToolTip Color2'><span><?php echo menu_title('112');?><div class='PlanIcon'></div></span><label><?php echo menu_title('7');?></label></div>" class="FloorHover" shape="poly" coords="1228,1000,1797,1000,1804,1549,1228,1552" href="<?php echo href('112');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						<area size="<div class='FloorToolTip Color2'><span><?php echo menu_title('110');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" shape="poly" coords="1270,1556,1775,1546,1775,1658,1270,1662" href="<?php echo href('110');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<!-- hortenzia -->
						<area size="<div class='FloorToolTip Color3'><span>14 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[14]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1955,954,2367,652,2898,671,2895,577,2367,568,1952,890,1952,922" href="<?php echo href('70');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>13 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[13]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1955,1024,2380,741,2898,760,2902,673,2370,654,1955,957" href="<?php echo href('69');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color3'><span>12 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[12]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1955,1090,2370,832,2908,845,2902,760,2374,745,1949,1034" href="<?php echo href('68');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>11 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1955,1143,2380,925,2905,933,2898,850,2380,831,1955,1089" href="<?php echo href('71');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>10 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1965,1188,2386,1012,2903,1023,2903,936,2376,925,1958,1140,1958,1166" href="<?php echo href('66');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>9 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[9]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1933,1254,2379,1108,2906,1110,2906,1028,2373,1018,1933,1203" href="<?php echo href('65');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>8 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[8]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1936,1320,2376,1190,2911,1201,2906,1116,2373,1110,1931,1264" href="<?php echo href('64');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>7 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[7]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1931,1386,2373,1277,2903,1277,2906,1206,2376,1195,1933,1322" href="<?php echo href('63');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}' /> 
						
						<area size="<div class='FloorToolTip Color3'><span>6 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[6]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1930,1439,2373,1367,2909,1375,2908,1285,2370,1285,1930,1383" href="<?php echo href('62');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>5 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[5]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1936,1500,2381,1455,2911,1450,2911,1383,2376,1370,1933,1447" href="<?php echo href('61');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>4 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[4]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1936,1580,2379,1556,2919,1556,2914,1460,2376,1460,1936,1511" href="<?php echo href('104');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						<area size="<div class='FloorToolTip Color3'><span><?php echo menu_title('111');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" shape="poly" coords="2831,1564,2329,1557,1962,1577,1962,1638,2338,1664,2831,1667" href="<?php echo href('111');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
					</map>
				</div>
			</div> 
		</div>
		
		
		<div class="ParkingImagesDiv">
			<div class="Parking111">
				<a href="https://mziurigardens.ge/files/flats/parking/garage_1.jpg" data-fancybox="parking1" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_1.jpg"/>
				<a>
				<a href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-fancybox="parking1" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_2.jpg"/>
				<a>
			</div>
			<div class="Parking222">
				<a href="https://mziurigardens.ge/files/flats/parking/garage_1.jpg" data-fancybox="parking2" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_1.jpg"/>
				<a>
				<a href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-fancybox="parking2" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_2.jpg"/>
				<a>
			</div>
		</div>
		
		
		<div class="SmallSelectMobile">
			<div class="Item Color111">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('8');?></div> 
				</div>
			</div>
			<div class="Item Color222">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('7');?></div> 
				</div>
			</div>
			<div class="Item Color333">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('6');?></div> 
				</div>
			</div>
		</div>
		
		
		
 
	</div>
</div>