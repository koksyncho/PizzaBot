<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Our Code World">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
	    <link rel="stylesheet" href="style/style.css" type="text/css">

	    <title>Botut</title>

	    <!-- Don't forget to add artyom to your document in the head tag-->

	    <script src="artyom.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<html lang="en">
	    <!---->
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	    <!--<link rel="shortcut icon" href="facivon.ico">-->

	    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	    <!--<script src="script.js"></script>-->
  	</head>

  	<body>
  		<nav>
			<ul>
				<li>
					<a href="index.php" class="active">Начало</a>
				</li>
				<li>
					<a href="index.php">Меню</a>
				</li>
				<li>
					<a href="chat-bot.php">Чат Бот</a>
				</li>
				<li>
					<a href="login-registration.php" class="active">Вход/Регистрация</a>
				</li>
			</ul>
		</nav>
		<header>
			<div>
				<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor tincidunt diam, id gravida purus interdum at. Maecenas ac fermentum odio. Donec ornare in neque eget auctor. Sed blandit vel nunc a elementum.
				</p>
				<p>
					<a href="#">Поръчай пица</a>
					<a href="#">Разгледай менюто</a>
				</p>
			</div>
		</header>
		<div class="wrapper">
			<section class="boxes">
				<!-- First Box -->
				<div class="half-box">
					<h2>Пица на деня</h2>
				</div>
				<!-- Second Box -->
				<div class="half-box">
					<h2>Препоръчано за вас</h2>
				</div>
				<!-- Promo Box -->
				<div class="full-box">
					<h2>Нашата промоция</h2>
				</div>
			</section>
			<section class="menu">
				<div>
					<span class="price-tag">
						<span>11<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
				<div>
					<span class="price-tag">
						<span>10<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
				<div>
					<span class="price-tag">
						<span>20<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
				<div>
					<span class="price-tag">
						<span>9<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
				<div>
					<span class="price-tag">
						<span>5<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
				<div>
					<span class="price-tag">
						<span>6<span>,99</span></span>
						<span>лв.</span>
					</span>
					<div></div>
					<p>Item 1</p>
				</div>
			</section>
			<section class="test">
				<div>
					<div>
						<p>
							<span>30</span>
							<span>July</span>
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
					</div>
				</div>
			</section>
		</div>
		<footer>
			<p>Всички права запазени!</p>
		</footer>
  
		<div class="chat_box">
			<div class="chat_head"> Chat Box</div>
			<div class="chat_body"> 
				<div class="user"> Krishna Teja</div>
			</div>
		</div>

		<div class="msg_box" style="right:290px">
			<div class="msg_head">Krishna Teja
				<div class="close">x</div>
			</div>
			<div class="msg_wrap">
				<div class="msg_body">
					<div class="msg_a">This is from A	</div>
					<div class="msg_b">This is from B, and its amazingly kool nah... i know it even i liked it :)</div>
					<div class="msg_a">Wow, Thats great to hear from you man </div>	
					<div class="msg_push"></div>
				</div>
				<div class="msg_footer">
					<textarea id="inputTextArea" class="msg_input" rows="4"></textarea>
					<button name="inputMic" id="inputMic" onclick="startArtyom()">&#xf131;</button> <!-- &#xf130; -->
					<button name="inputSend" id="inputSend" onclick="submitMessage()">&#xf1d8;</button>
				</div>

			</div>
		</div>

		<script>
			//Just testing something :)
			function tellScroll(){
				let elem = document.getElementsByName("inputBox")[0];
				
				console.log("Scroll: " + elem.scrollTop + " Scroll height: " + elem.scrollHeight + " Client height: " + elem.clientHeight);
			}
		</script>

		<script>
			$(document).ready(function(){
				$('.chat_body').slideToggle('slow');
				$('.msg_wrap').slideToggle('slow');
				$('.chat_head').click(function(){
					$('.chat_body').slideToggle('slow');
				});
				$('.msg_head').click(function(){
					$('.msg_wrap').slideToggle('slow');
				});
				
				$('.close').click(function(){
					$('.msg_box').hide();
				});
				
				$('.user').click(function(){

					$('.msg_wrap').show();
					$('.msg_box').show();
				});

				$("#inputMic, #inputSend").css("height", $("#inputTextArea").height());

			});
		   
		    // Now we add the most important point of the plugin, the commands
		    // This library is very flexible and now we will see why :
		    // Every command is a literal object
		    var endingLine = "";
		    artyom.addCommands([
	        {
	            description:"Artyom can talk too, lets say something if we say hello",
	            indexes:["hey"],
	            action:function(i){
		            // i = the index of the array of indexes option

		            if(i == 0){
			            //You say : "hello"
			            //document.getElementById('time').innerHTML = "Hello ! How are you? I don't want to talk today";
			            //document.getElementById('user-computer-dialogue-lines').innerHTML += "Hello ! How are you? I don't want to talk today" + endingLine;
			            //document.getElementById('computer-dialogue-lines').innerHTML = "Hello ! How are you? I don't want to talk today" + endingLine;
			            createComputerDialogueBox("Hello ! How are you?" + endingLine);
			           
		            }
	          	}
	        },
	        {
	          	description:"Say goodbye",
	          	indexes:["goodbye"],
	          	action:function(){
	          		createComputerDialogueBox("Goodbye" + endingLine);
	            	//alert("Now all is over.");
	            	
	          	}
	        },
			{
	          	description:"order pizza 1",
	          	indexes:["I want a pizza","I want to order a pizza"],
	          	action:function(){
				
					createComputerDialogueBox("From where do you want to order your pizza" + endingLine);
	          	}
	        },
			{
	          	description:"order pizza 2",
	          	indexes:["from *","I want to order my pizza from *"],
				smart:true,
	          	action:function(i, wildcard){
					var order = [place => wildcard];
					console.log(order);
					createComputerDialogueBox("Ok your pizza will be ordered from " + wildcard + " . What size would you like your pizza?" + endingLine);
	          	}
	        },
			{
	          	description:"order pizza 3",
	          	indexes:["the size will be a *"],
				smart:true,
	          	action:function(i, wildcard){
					
					createComputerDialogueBox("Ok your pizza will be a " + wildcard + " size. Would you like something for drink?" + endingLine);
	          	}
	        },
			{
	          	description:"order pizza 4.1",
	          	indexes:["yes can I get a *","I would want a * "],
				smart:true,
	          	action:function(i, wildcard){
				
					createComputerDialogueBox("Ok I added a " + wildcard + " to your order. Your order has been send!" + endingLine);
	          	}
	        },
			{
	          	description:"order pizza 4.2",
	          	indexes:["no i dont want a drink"],
				smart:true,
	          	action:function(i, wildcard){
					createComputerDialogueBox("Ok Ive got your order." + endingLine);
	          	}
	        },
	        {
	          	description:"If we want a really long answer",
	            indexes:["give me a lot of text"],
	            action:function(i){
		            // i = the index of the array of indexes option

		            if(i == 0){
			            createComputerDialogueBox("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sem vel eleifend luctus, quam urna lobortis sem, auctor porta urna urna vitae justo. Nullam quis auctor felis." + endingLine);
		            }
	        	}	
	        },
	        {
	          	description: "Smart command, say how much x in what we say",
	          	indexes:["what's the number of *"],
	          	smart:true,
	          	action:function(i,wildcard){
		            //document.getElementById('time').innerHTML = "The number of " + wildcard + ' is '+ Math.floor(Math.random() * 4000) + 1;
		            //document.getElementById('user-computer-dialogue-lines').innerHTML += "The number of " + wildcard + ' is '+ Math.floor(Math.random() * 4000) + 1 + endingLine;
		            createComputerDialogueBox("The number of " + wildcard + ' is '+ Math.floor(Math.random() * 4000) + 1 + endingLine);
		            //document.getElementById('computer-dialogue-lines').innerHTML = "The number of " + wildcard + ' is '+ Math.floor(Math.random() * 4000) + 1 + endingLine;
		        }
	        }
      		]);


	        // Redirect the recognized text
	        artyom.redirectRecognizedTextOutput(function(text,isFinal){
		     
		        if(isFinal){
		        
					$('<div class="msg_b">'+text+'</div>').insertBefore('.msg_push');
					$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
			    
		        } else {
		         
		        }
	        });

	        $('textarea').keypress(
			    function(e){
			        if (e.keyCode == 13) {
				        submitMessage();
			    	}
			});

	        function submitMessage() {
	        	var textToSubmit = $("#inputTextArea").val();
	        	if (textToSubmit != '' && textToSubmit.replace(/\s/g, '').length) {
	        		$('<div class="msg_b">'+textToSubmit+'</div>').insertBefore('.msg_push');
					$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
					$("#inputTextArea").val("");


					artyom.simulateInstruction(textToSubmit);
				/*	artyom.redirectTextOutput(function(text,isFinal){
						isFinal = true; 
						text = "goodbye";
						alert("sda");
					});*/
	        	} else {
	        		$("#inputTextArea").val("");
	        	}
	        }

	      	function startArtyom(){
	        	artyom.initialize({
	          		lang:"en-GB",// More languages are documented in the library
	          		continuous:false,//if you have https connection, you can activate continuous mode
	          		debug:true,//Show everything in the console
	          		listen:true // Start listening when this function is triggered
	       		});
	        	//document.getElementById('microphone-button').src = 'images/microphone-active.png';
	        	//document.getElementById('microphone-button').onclick = stopArtyom; 
	        	document.getElementById('inputMic').innerHTML = '&#xf130;';
	        	document.getElementById('inputMic').onclick = stopArtyom; 
	      	}

	      	function stopArtyom(){
	        	artyom.fatality();
	        	//document.getElementById('microphone-button').src = 'images/microphone-inactive.png';
	        	//document.getElementById('microphone-button').onclick = startArtyom;
	        	document.getElementById('inputMic').innerHTML = '&#xf131';
	        	document.getElementById('inputMic').onclick = startArtyom;
	     	}

	     	function createComputerDialogueBox(compText) {
	     		setTimeout(
			    function() {
					$('<div class="msg_a">'+compText+'</div>').insertBefore('.msg_push');
					$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);

					//artyom.say(compText);
			    }, Math.floor((Math.random() * 3000) + 1000));		
	     	}

	      	window.onload = function(){
	         //  	var tab = document.getElementById("commands-list");
	         //  	var commands =  artyom.getAvailableCommands();
	         //  	var html = '';

	         //  	for(var i = 0;i < commands.length;i++){
	         //    	var command = commands[i];
	         //    	html += command.description + " : <span style='color:blue;'>"+command.indexes.toString()+"</span><br>";
	         //  	}

	         //  	tab.innerHTML = html;

	          	artyom.initialize({lang:"en-GB"});;

	        	// var vocesitas = [
		        //     {lang:"es-ES",description: "Espanol"},
		        //     {lang:"de-DE",description: "Deutsch"},
		        //     {lang:"pt-PT",description: "Portugues"},
		        //     {lang:"it-IT",description: "Italiano"}
	       		//  ];

	        	// vocesitas.forEach(function(voice){
	        	//     $('#select-voice').append($('<option>', {value:voice.lang, text:voice.description}));
	        	// });
	      	};


    </script>
	</body>
</html>
