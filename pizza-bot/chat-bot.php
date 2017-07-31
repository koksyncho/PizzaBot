<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Our Code World">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" href="style/chat-bot-style.css" type="text/css">
	    
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	    <title>Botut</title>

	    <!-- Don't forget to add artyom to your document in the head tag-->

	    <script src="artyom.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<html lang="en">

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
		
		<section id="chatWrapper">
			<div id="chatHolder">
				<!--<div class="bubbleWrap-left">
					<div class="textBubble">
						<p></p>
						<p>Author: Compa</p>
					</div>
				</div>
				<div class="bubbleWrap-right">
					<div class="textBubble">
						<p></p>
						<p>Author: Choveka</p>
					</div>
				</div>-->
			</div>

			<form id="chatForm" onsubmit="return false">
				<textarea id="inputTextArea" name="inputBox" placeholder="Напиши нещо..."></textarea>
				<button name="inputMic" id="inputMic" onclick="startArtyom()">&#xf131;</button> <!-- &#xf130; -->
				<button name="inputSend" id="inputSend" onclick="submitMessage()">&#xf1d8;</button>
			</form>
		</section>
		<script>
			window.onload = ()=>{
				document.getElementsByName("inputBox")[0].focus();
			};
			
			
			//Just testing something :)
			function tellScroll(){
				let elem = document.getElementsByName("inputBox")[0];
				
				console.log("Scroll: " + elem.scrollTop + " Scroll height: " + elem.scrollHeight + " Client height: " + elem.clientHeight);
			}
		</script>

		<script>
		    var userDialogueArray = [];
		    var numberOfUserInputs = 0;
		    var computerDialogueArray = [];
		    var numberOfComputerInputs = 0;

		    var wrapperSection = document.getElementById("chatWrapper");
			var holderDiv = document.getElementById("chatHolder");

		   
		    // Now we add the most important point of the plugin, the commands
		    // This library is very flexible and now we will see why :
		    // Every command is a literal object
		    var endingLine = "";
		    artyom.addCommands([
	        {
	            description:"Artyom can talk too, lets say something if we say hello",
	            indexes:["здравей","hey"],
	            action:function(i){
		            // i = the index of the array of indexes option

		            if(i == 0){
			            //You say : "hello"
			            //document.getElementById('time').innerHTML = "Hello ! How are you? I don't want to talk today";
			            //document.getElementById('user-computer-dialogue-lines').innerHTML += "Hello ! How are you? I don't want to talk today" + endingLine;
			            //document.getElementById('computer-dialogue-lines').innerHTML = "Hello ! How are you? I don't want to talk today" + endingLine;
			            createComputerDialogueBox("Hello ! How are you? I don't want to talk today" + endingLine);
		            }
	          	}
	        },
	        {
	          	description:"Say goodbye",
	          	indexes:["goodbye"],
	          	action:function(){
	            	alert("Now all is over.");
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
		        var span = document.getElementById('output');

		        var userDialogue = document.getElementById('user-computer-dialogue-lines');
		        //var userDialogue = document.getElementById('user-dialogue-lines');

		        if(isFinal){
		          // span.innerHTML += "<br><hr><br>";
		          // userDialogue.innerHTML += text;
		          // userDialogue.innerHTML += "<br><br>";
		          	createUserDialogueBox(text);
		        } else {
		          // span.innerHTML = text;
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
	        		createUserDialogueBox(textToSubmit);
	        		$("#inputTextArea").val("");

					artyom.simulateInstruction(textToSubmit);
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

	     	function createUserDialogueBox(userText) {
	     		var bubbleWrapperDiv = document.createElement("div");             
				bubbleWrapperDiv.classList.add('bubbleWrap-right'); 

				var textBubbleDiv = document.createElement("div");
				textBubbleDiv.classList.add('textBubble');                       
				var textP = document.createElement("p"); 
				var textChat = document.createTextNode(userText);      
				textP.appendChild(textChat);
				textBubbleDiv.appendChild(textP);

				var authorP =  document.createElement("p");
				var textAuthor = document.createTextNode("Author: User"); 
				authorP.appendChild(textAuthor);
				textBubbleDiv.appendChild(authorP);
					                           
				bubbleWrapperDiv.appendChild(textBubbleDiv);                          	              
				holderDiv.appendChild(bubbleWrapperDiv);	

				$('#chatHolder').scrollTop($('#chatHolder')[0].scrollHeight);
	     	}

	     	function createComputerDialogueBox(compText) {
	     		setTimeout(
			    function() {
			    	var bubbleWrapperDiv = document.createElement("div");             
					bubbleWrapperDiv.classList.add('bubbleWrap-left'); 

					var textBubbleDiv = document.createElement("div");
					textBubbleDiv.classList.add('textBubble');                       
					var textP = document.createElement("p"); 
					var textChat = document.createTextNode(compText);      
					textP.appendChild(textChat);
					textBubbleDiv.appendChild(textP);

					var authorP =  document.createElement("p");
					var textAuthor = document.createTextNode("Author: Computer"); 
					authorP.appendChild(textAuthor);
					textBubbleDiv.appendChild(authorP);
						                           
					bubbleWrapperDiv.appendChild(textBubbleDiv);                          	              
					holderDiv.appendChild(bubbleWrapperDiv);

					$('#chatHolder').scrollTop($('#chatHolder')[0].scrollHeight);
					/*$("#chatHolder").animate({ scrollTop: $('#chatHolder').prop("scrollHeight")}, 1000);*/
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