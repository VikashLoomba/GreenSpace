<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<script src="/assets/js/vendor/jquery-1.11.1.js"></script>
	<script>
		var slugs = ['blue-dream','pineapple-express','blue-mystic','blue-diesel','blue-afghani','blue-ivy','blue-velvet','blue-knight','blueberry-headband','blue-train','blue-wreck','blue-hash','blue-alien','blue-cookies','blueberry','blueberry-yum-yum','blueberry-cheesecake','blue-heron','blues','blue-diamond','blue-kripple','blue-dragon','blue-crack','blue-magoo','disney-blue','blue-monster','blue-kush','blue-og','blue-goo','blue-lights','alpine-blue','blue-magic','blue-god','blue-persuasion','alpha-blue','blue-satellite','blue-blood','strawberry-blue','blue-moonshine','blue-hawaiian','blue-cheese','blue-frost','blue-rhino','blue-bayou','blue-boy','seattle-blue','blue-widow','blue-bastard','blue-dynamite','blue-dot','blue-haze','crimea-blue','blue-venom','blueberry-skunk','blueberry-lambsbread','blue-moon-rocks','super-blue-dream','bhang-seattle-blue','bhang-blue-diesel','sour-diesel','og-kush','green-crack','girl-scout-cookies','granddaddy-purple','white-widow','jack-herer','bubba-kush','ak-47','trainwreck','northern-lights','blue-cheese','headband','pineapple-express','purple-kush','alaskan-thunder-fuck','chemdawg','durban-poison','super-silver-haze','lemon-haze','blackberry-kush','strawberry-cough','grape-ape','cheese','master-kush','super-lemon-haze','afghan-kush','maui-waui','white-rhino','la-confidential','chocolope','cherry-pie','amnesia-haze','skywalker','purple-urkle',"god's-gift",'lemon-kush','g13','purple-haze','skywalker-og','death-star','bubble-gum','$100-og','tahoe-og-kush','nyc-diesel','mango-kush','hindu-kush','cinderella-99','agent-orange','banana-kush','romulan','dutch-treat','golden-goat','mr.-nice','fire-og','harlequin','afgoo',"lamb's-bread",'cotton-candy-kush','berry-white','lsd','tangerine-dream','gorilla-glue-#4','orange-kush','silver-haze','pineapple-kush','lemon-skunk','xj-13','lavendar','island-sweet-skunk','white-russian','purple-diesel','sensi-star','chernobyl','jilybean','cinex','juicy-fruit','platinum-girl-scout-cookies','blackberry','snowcap','sour-og','alien-og','sweet-tooth','platinum-og','fruity-pebbles','cannaatonic','purple-trainwreck','casey-jones','platinum-kush','larry-og','sour-kush','flo','critical-mass','pineapple','mango','kosher-kush','kandy-kush','uk-cheese','grapefruit','skunk-#1','lemon-diesel','bruce-banner','j1','super-skunk','super-sour-diesel','deadhead-og','permafrost','orange-crush','space-queen','jack-the-ripper','white-fire-og','obama-kush','afghani','vanilla-kush','holy-grail-kush','blue-widow','jack-frost','thin-mint-girl-scout-cookies','pre-98-bubba-kush','mk-ultra','moby-dick','animal-cookies','amnesia','haze','acapulco-gold','strawberry-kush','platinum-bubba-kush','king-lous-xiii','herijuana','cherry-kush','ghost-train-haze','god-bud','great-white-shark','707-headband','ogre','pure-kush','grape-god','sage','pink-kush','cat-piss',"king's-kush",'rasberry-kush','kali-mist','kryptonite','big-bud','vortex','power-plant','purple-og-kush','chemdawg-4','red-dragon','ice','big-buddha-cheese','critical-kush','candyland','khalifa-kush','california-orange','blueberry-diesel','lemon-og-kush','true-og','ace-of-spades','ghost-og','a-10','blackwater','purple-sour-diesel','strawberry-diesel','black-domina','mendocino-purps','diamond-og','querkle','shishkaberry','black-widow','cheese-quake','pure-power-plant','diablo','dream-queen','jean-guy','presidential-og','tangie','jack-flash','banana-og','the-white','fucking-incredible','orange-bud','nebula','dj-short-blueberry',"willy's-wonder",'cannalope-haze','chocolate-kush','3-kings','afghooey','afgooey','acdc','sage-n-sour','purple-dream','trinity','m-39','black-diamond','hawaiian-snow','candy-jack','bubba-og','sunset-sherbet','yoda-og','white-berry','pineapple-trainwreck','cali-kush','green-queen','bubblegum-kush','pot-of-gold','plush-berry','grapefruit-kush','tangerine-kush','pineapple-chunk','green-ribbon','g13-haze','ak-48','stella-blue'];

		var start = 0;
		var end = start + 10;
		var timer = null;

		var getData = function() {
				console.log('start');
				if (end > slugs.length) {
					end = slugs.length;
				}
				
				for (var i = start; i < end; i++) {
					var url = '/insert_data/' + slugs[i];
					$.get(url, function() {
						console.log(i);
					});
				}
				console.log('end');
				start = end;
				end = start + 10;
				if (end > 274) {
					clearInterval(timer);
				}
			};

		$(document).ready(function() {
			getData();
			var timer = setInterval(getData, 60000);
			

		});

	</script>
<body>

</body>
</html>