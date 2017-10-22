<!DOCTYPE html>

<?php
   ob_start();
   session_start();
?>

<html>

<head>
	<meta charset="UTF-8">
	<title>360 KUEHNE-NAGEL Vietnam Warehouse</title>
	<link rel="icon" type="image/png" href="icon/icon.png"/>

<?php
	$msg = '';
	$valid = false;
	$isMsg = false;
	//Log out
	if (isset($_GET['logOut']) && $_GET['logOut'] == 'true'){
		session_destroy();
	} else {
		//Log in
		if ((isset($_SESSION['valid']) && isset($_SESSION['username']))
			&& $_SESSION['valid'] == true && $_SESSION['username'] == 'admin'){
			$valid = true;
		} else {
			if (isset($_POST['login']) && !empty($_POST['fieldUser']) && !empty($_POST['fieldPassword'])) {
				
			   if ($_POST['fieldUser'] == 'admin' && $_POST['fieldPassword'] == 'admin@115500') {
				  $_SESSION['valid'] = true;
				  $_SESSION['timeout'] = time();
				  $_SESSION['username'] = 'admin';
				  $valid = true;
			   } else {
				   $valid = false;
				   $msg = '</br><span style="color: red">Please re-check user and password!</span>';
				   $isMsg = true;
			   }
			} else {
				$valid = false;
			}
		}
	}
?>
<?php 
	if ($valid){
?>
<!-- Pano body -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
	<style> @-ms-viewport { width: device-width; } </style>
	<link rel="stylesheet" href="vendor/reset.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="multiple-scenes view-control-buttons">

<div id="pano"></div>

<div id="sceneList">
  <a href="#" class="scene">
	<h1 class="textTitle">Explore</h1>
  </a>
  <div id="data">
  <ul class="scenes">
	  <a href="#" class="scene" data-id="53-kuehne-nagel-gate-skyview">
        <li class="text">Kuehne + Nagel Logistics Hub – Skyview</li>
      </a>
    
      <a href="#" class="scene" data-id="54-kuehne-nagel-skyview">
        <li class="text">Kuehne + Nagel Logistics Hub – Skyview 1</li>
      </a>
	  
      <a href="#" class="scene" data-id="0-main-gate">
        <li class="text">Main Gate</li>
      </a>
      
	  <a href="#" class="scene" data-id="56-cfs-warehouse-skyview">
        <li class="text">CFS Warehouse (Skyview)</li>
      </a>
	  
      <a href="#" class="scene" data-id="1-cfs-warehouse-reception">
        <li class="text">CFS Warehouse (Reception)</li>
      </a>
    
      <a href="#" class="scene" data-id="2-main-canteen">
        <li class="text">Main Canteen</li>
      </a>
    
      <a href="#" class="scene" data-id="3-cfs-warehouse-lobby-2">
        <li class="text">CFS Warehouse – Loading Docks 2</li>
      </a>
    
      <a href="#" class="scene" data-id="4-cfs-warehouse-lobby-3">
        <li class="text">CFS Warehouse – Loading Docks 3</li>
      </a>
    
      <a href="#" class="scene" data-id="5-cfs-warehouse-office">
        <li class="text">CFS Warehouse (Office)</li>
      </a>
      <a href="#" class="scene" data-id="6-cfs-warehouse-1st-floor-main">
        <li class="text">CFS Warehouse 1st Floor (Main)</li>
      </a>
    
      <a href="#" class="scene" data-id="7-cfs-warehouse-1st-line-begin">
        <li class="text">CFS Warehouse 1st Line (Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="8-cfs-warehouse-1st-line-end">
        <li class="text">CFS Warehouse 1st Line (End)</li>
      </a>
    
      <a href="#" class="scene" data-id="9-cfs-warehouse-1st-line-middle">
        <li class="text">CFS Warehouse 1st Line (Middle)</li>
      </a>
    
      <a href="#" class="scene" data-id="10-cfs-warehouse-2nd-line-begin">
        <li class="text">CFS Warehouse 2nd Line (Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="11-cfs-warehouse-2nd-line-end">
        <li class="text">CFS Warehouse 2nd Line (End)</li>
      </a>
    
      <a href="#" class="scene" data-id="12-cfs-warehouse-2nd-line-middle">
        <li class="text">CFS Warehouse 2nd Line (Middle)</li>
      </a>
    
      <a href="#" class="scene" data-id="13-cfs-warehouse-3th-line-begin">
        <li class="text">CFS Warehouse 3th Line (Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="14-cfs-warehouse-3th-line-end">
        <li class="text">CFS Warehouse 3th Line (End)</li>
      </a>
    
      <a href="#" class="scene" data-id="15-cfs-warehouse-3th-line-middle">
        <li class="text">CFS Warehouse 3th Line (Middle)</li>
      </a>
    
      <a href="#" class="scene" data-id="16-courtyard-before-normal-warehouse-1">
        <li class="text">Courtyard in front of General & Bonded Warehouse 1</li>
      </a>
    
      <a href="#" class="scene" data-id="17-courtyard-before-normal-warehouse-2">
        <li class="text">Courtyard in front of General & Bonded Warehouse 2</li>
      </a>
    
      <a href="#" class="scene" data-id="18-courtyard-before-small-warehouse">
        <li class="text">Courtyard in front of General Warehouse)</li>
      </a>
	  
      <a href="#" class="scene" data-id="55-normal-warehouse-skyview">
        <li class="text">General & Bonded Warehouse (Skyview)</li>
      </a>
	  
      <a href="#" class="scene" data-id="19-normal-warehouse-free-space-1">
        <li class="text">General & Bonded Warehouse (1)</li>
      </a>
    
      <a href="#" class="scene" data-id="20-normal-warehouse-free-space-2">
        <li class="text">General & Bonded Warehouse (2)</li>
      </a>
    
      <a href="#" class="scene" data-id="21-normal-warehouse-free-space-3">
        <li class="text">General & Bonded Warehouse (3)</li>
      </a>
    
      <a href="#" class="scene" data-id="22-normal-warehouse-free-space-4">
        <li class="text">General & Bonded Warehouse (4)</li>
      </a>
    
      <a href="#" class="scene" data-id="23-normal-warehouse-free-space-5">
        <li class="text">General & Bonded Warehouse (5)</li>
      </a>
    
      <a href="#" class="scene" data-id="24-normal-warehouse-free-space-6">
        <li class="text">General & Bonded Warehouse (6)</li>
      </a>
    
      <a href="#" class="scene" data-id="25-normal-warehouse-main-point">
        <li class="text">General & Bonded Warehouse (Center point)</li>
      </a>
    
      <a href="#" class="scene" data-id="26-normal-warehouse-office">
        <li class="text">General & Bonded Warehouse (Office)</li>
      </a>
    
      <a href="#" class="scene" data-id="27-normal-warehouse-r1-begin">
        <li class="text">General & Bonded Warehouse (R1 Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="28-normal-warehouse-r1-end">
        <li class="text">General & Bonded Warehouse (R1 End)</li>
      </a>
    
      <a href="#" class="scene" data-id="29-normal-warehouse-r2-begin">
        <li class="text">General & Bonded Warehouse (R2 Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="30-normal-warehouse-r2-end">
        <li class="text">General & Bonded Warehouse (R2 End)</li>
      </a>
    
      <a href="#" class="scene" data-id="31-normal-warehouse-r3-begin">
        <li class="text">General & Bonded Warehouse (R3 Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="32-normal-warehouse-r3-end">
        <li class="text">General & Bonded Warehouse (R3 End)</li>
      </a>
    
      <a href="#" class="scene" data-id="33-normal-warehouse-r4-begin">
        <li class="text">General & Bonded Warehouse (R4 Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="34-normal-warehouse-r4-end">
        <li class="text">General & Bonded Warehouse (R4 End)</li>
      </a>
    
      <a href="#" class="scene" data-id="35-normal-warehouse-r5-begin">
        <li class="text">General & Bonded Warehouse (R5 Begin)</li>
      </a>
    
      <a href="#" class="scene" data-id="36-normal-warehouse-r5-end">
        <li class="text">General & Bonded Warehouse (R5 End)</li>
      </a>
    
      <a href="#" class="scene" data-id="37-normal-warehouse-reception">
        <li class="text">General & Bonded Warehouse (Reception)</li>
      </a>
    
      <a href="#" class="scene" data-id="38-normal-warehouse-stair-to-1st-floor">
        <li class="text">General & Bonded Warehouse (Stair to 1st Floor)</li>
      </a>
    
      <a href="#" class="scene" data-id="39-normal-warehouse-1st-floor-canteen">
        <li class="text">General & Bonded Warehouse 1st Floor (Canteen)</li>
      </a>
    
      <a href="#" class="scene" data-id="40-normal-warehouse-1st-floor-main-1">
        <li class="text">General & Bonded Warehouse 1st Floor (Main 1)</li>
      </a>
    
      <a href="#" class="scene" data-id="41-normal-warehouse-1st-floor-main-2">
        <li class="text">General & Bonded Warehouse 1st Floor (Main 2)</li>
      </a>
    
      <a href="#" class="scene" data-id="42-normal-warehouse-1st-floor-manager-room-1">
        <li class="text">General & Bonded Warehouse 1st Floor (Manager Room 1)</li>
      </a>
    
      <a href="#" class="scene" data-id="43-normal-warehouse-1st-floor-manager-room-2">
        <li class="text">General & Bonded Warehouse 1st Floor (Manager Room 2)</li>
      </a>
    
      <a href="#" class="scene" data-id="44-normal-warehouse-1st-floor-meeting-room">
        <li class="text">General & Bonded Warehouse 1st Floor (Meeting Room)</li>
      </a>
    
      <a href="#" class="scene" data-id="45-small-warehouse-lobby-1">
        <li class="text">General Warehouse – Loading Docks 1</li>
      </a>
    
      <a href="#" class="scene" data-id="46-small-warehouse-lobby-2">
        <li class="text">General Warehouse – Loading Docks 2</li>
      </a>
    
      <a href="#" class="scene" data-id="47-cfs-warehouse-stair-to-1st-floor">
        <li class="text">CFS Warehouse (Stair to 1st Floor)</li>
      </a>
    
      <a href="#" class="scene" data-id="48-courtyard-before-cfs-and-canteen">
        <li class="text">Courtyard in front of CFS and Canteen)</li>
      </a>
    
      <a href="#" class="scene" data-id="49-courtyard-before-small-warehouse-1">
        <li class="text">Courtyard in front of General Warehouse 1)</li>
      </a>
    
      <a href="#" class="scene" data-id="50-main-gate-before-cfs-warehouse">
        <li class="text">Main Gate (Before CFS Warehouse)</li>
      </a>
    
      <a href="#" class="scene" data-id="51-cfs-warehouse-lobby-1">
        <li class="text">CFS Warehouse – Loading Docks</li>
      </a>
    
      <a href="#" class="scene" data-id="52-cfs-warehouse-1st-floor-meeting-room">
        <li class="text">CFS Warehouse 1st Floor (Meeting Room)</li>
      </a>
  </ul>
  </div>
</div>

<div id="titleBar">
  <h1 class="sceneName"></h1>
</div>

<a href="#" id="autorotateToggle" title="Autotour">
  <img class="icon off" src="img/play.png">
  <img class="icon on" src="img/pause.png">
</a>

<a href="#" id="fullscreenToggle" title="Fullscreen Mode">
  <img class="icon off" src="img/fullscreen.png">
  <img class="icon on" src="img/windowed.png">
</a>

<a href="#" id="sceneListToggle" title="Explore">
  <img class="icon off" src="img/expand.png">
  <img class="icon on" src="img/collapse.png">
</a>

<a href="index.php?logOut=true" id="logOut" title="Click here to log out!">
  <img class="icon" src="img/out.png">
</a>

<a href="#" id="viewUp" class="viewControlButton viewControlButton-1">
  <img class="icon" src="img/up.png">
</a>
<a href="#" id="viewDown" class="viewControlButton viewControlButton-2">
  <img class="icon" src="img/down.png">
</a>
<a href="#" id="viewLeft" class="viewControlButton viewControlButton-3">
  <img class="icon" src="img/left.png">
</a>
<a href="#" id="viewRight" class="viewControlButton viewControlButton-4">
  <img class="icon" src="img/right.png">
</a>
<a href="#" id="viewIn" class="viewControlButton viewControlButton-5">
  <img class="icon" src="img/plus.png">
</a>
<a href="#" id="viewOut" class="viewControlButton viewControlButton-6">
  <img class="icon" src="img/minus.png">
</a>
<div id="gate"></div>
<script src="vendor/es5-shim.js"></script>
<script src="vendor/eventShim.js"></script>
<script src="vendor/classList.js"></script>
<script src="vendor/requestAnimationFrame.js" ></script>
<script src="vendor/screenfull.min.js" ></script>
<script src="vendor/bowser.min.js" ></script>
<script src="vendor/marzipano.js" ></script>

<script src="data.js"></script>
<script src="index.js"></script>

</body>
		  
<?php
	} else {
?>
<!-- Login body -->
	<link rel="stylesheet" href="login/css/style.css">
</head>
<?php
		if ($isMsg) {
?>
<body onload="(
function () {
  [].map.call(document.querySelectorAll('.profile'),
	function(el) {
		el.classList.toggle('profile--open');
	});
}).call(this)"
>
<?php
		} else {
?>
<body>
<?php
		}
?>
	<!--Google Font - Work Sans-->
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<div class="container">
	  <div class="profile">
		<button class="profile__avatar" id="toggleProfile">
		 <img src="login/icon/logo.jpg" alt="Click to access KUEHNE+NAGEL 360 Vietnam Warehouse" /> 
		</button>
		<div class="profile__form">
		  <div class="profile__fields">
			<form method="post" action="index.php">
				<div class="field">
				  <input type="text" id="fieldUser" name="fieldUser" class="input" required pattern=.*\S.* />
				  <label class="label">Username</label>
				</div>
				<div class="field">
				  <input type="password" id="fieldPassword" name="fieldPassword" class="input" required pattern=.*\S.* />
				  <label class="label">Password</label>
				</div>
				<div class="profile__footer">
					<div class="center"><input name="login" class="button raised blue" type="submit" value="LOGIN" style="none;"/></div>
				</div>
			</form>
			<?php echo $msg;?>
		  </div>
		 </div>
	  </div>
	</div>
	<script  src="login/js/index.js"></script>
</body>

<?php
	}
?>

</html>