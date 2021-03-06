<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Smartgrid | Homepage </title>
		<!-- add Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	
	
	<body>
		<!--1、头部-->
		<div id="header">
			<div class="header-content">
				<div class="logo">
					<a href="index.php"> <img src="img/a.png" height="75" width="280" /> </a> 

					<div class="key">
                        <p>Advanced Software Engineering Project</p>
					</div>
				</div>
				<div class="nav">
					<ul>
						<li class="active"> <a href="index.php">Home</a> </li>
						<li> <a href="html/success.php">Search</a> </li>
                        <li> <a href="html/about.php">About Us</a></li>
						<li> <a href="html/future.php">Future</a> </li>
					</ul>
				</div>
			</div>
		</div>
		
		<!--2、主体内容-->
		<div id="main">
				<div class="banner"></div>								
				<div class="our">
                    <div class="title"><h1>Our Main Focus</h1></div>
					
					<div class="show">
						<div class="section">
							<i></i>
							<h4>SmartGrid</h4>
							<p id="p1" >The modernized Smart Grid (SG) is expected to enable several new applications such as dynamic pricing, demand response, and fraud detection; however, a collection of such fine-grained data raises privacy issues.</p>
						</div>
						<div class="section" style="margin: 0 55px;">
							<i></i>
							<h4>Researchers</h4>
							<p id="p2" >Performing research, creating innovations, demonstrating advanced wireless communications, using internet and sense-and-control technologies to enable the development of the next generation of the electric utility grid.</p>
						</div>
						<div class="section" >
							<i></i>
							<h4>Educators</h4>
							<p id="p3" >The use of the testbed promises to make smart grid learning experiences more accessible, more personal, and more relevant. Educators can use the testbed and engage the students as an ideal socially constructed process.</p>
						</div>
					</div>
				</div>
				
				<div class="success">
					<h3 class="title">Basic Introduction</h3>
					<div class="fixBox clearfix">
					
						<div class="shop clearfix">
						
<!-- 							<a href="#"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="15"><img src="img/1.png" /></marquee></a> -->
                            <a href="#"><img src="img/1.png" /></a>
							<b>Smart Grid 101</b>
							
							<c class="hover_style"> The modernized Smart Grid (SG) is expected to enable several new applications such as dynamic pricing, demand response and fraud detection; however, collection of such fine-grained data raises privacy issues.</c>
						     
							
							<a href="#"><img src="img/2.png" /></a>
				            <b>Wireless Mesh Networking</b>
							<c class="hover_style">  A wireless mesh network (WMN) is a communication network which enables any two nodes in the network to communicate with each other even if they are not in each other’s coverage area. A collection of nodes builds a communication path in order to distribute messages between each other.</c>
							
							<a href="#"><img src="img/3.png" /></a>
							<b>Advanced Metering Infrastructure</b>
							<c class="hover_style">  Advanced metering infrastructure is a desegregated system of smart meters, data management systems, and communication network which facilitate two-way communication between user and utility.</c>
							
							<a href="#"><img src="img/4.png" /></a> 
							<b>Privacy in AMI</b>
							<c class="hover_style">  With the current deployment of smart meters (SMs), one of the concerns that started to be raised by the customers is on the privacy of their power consumption data. The exposure of these data can lead to several privacy problems that need to be addressed before the customers can be convinced for the use of SMs.</c>
							

						</div>
					</div>
				</div>
            </div>
				
		<!--3、尾部-->
		<div id="footer">
			<p>
				<a href="index.html">Home</a> |
				<a href="html/success.php">Search</a> |
				<a href="html/about.php">About Us</a> |
				<a href="html/future.php">Future</a> |
			</p>
			<p>
				E-mail: qz2302@columbia.edu
			</p>
		</div>
	</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs
/jquery/1.4.0/jquery.min.js"></script>
<!--     <script type="text/javascript" src="jq.js"></script> -->
    <script type="text/javascript">
    	var a;
    	function stoproll(){
    		// $(".hover_style").css("background-color": "grey");
    		a=document.querySelector(".hover_style");
    		a.style.marginLeft='0px';
    	}
    	// $(function(){
    	// 	$(".hover_style").click(function(e){
    	// 		$(this).stop(true,false).animate({"margin-left": "0px"},500);
    	// 	});
    	// });
    // $(function(){
    // $(".hover_style").mouseleave(function(e){
    // 	$(this).animate({"margin-left":"+10px"},500);
    // }).mouseover(function(e){
    // 	$(this).stop(true,false).css({"margin-left":"0px"},500);
    // });
    // });  
          
        // function AutoScroll(obj) {  
  
        //     $(obj).animate({  
        //         "margin-left": "-25px"  
        //     }, 500, function() {  
        //         $(this).css({ "margin-left": "0px" }).appendTo(this);  
        //     });  
        // }  
        // $(function() {  
        //     var myar = setInterval('AutoScroll(".hover_style")', 5000)  
        //     $(".hover_style").hover(function() { clearInterval(myar); }, function() { myar = setInterval('AutoScroll(".hover_style")', 5000) });  
        // });
    	// var s=1;
    	// function mouseover1(){
    	// 	// var p=document.getElementsByClassName("p_over");
    	// 	// for(var i=0;i<p.length;i++){
    	// 	// 	var ptext=p[i].getAttribute("value");
    	// 	// 	alert(ptext);
    	// 	// }
    	// 	if(s==1){
    	// 		s=0;
    	// 	}
    	// 	if(s==0){
    	// 		var p=document.getElementById("p1");
    	// 		// p.className="p_change";
    	// 		p.style.color="#800000";
    	// 		p.style.size="30px";
    	// 	}
    	// 	s=1;
    	// }
    	// $(function(){
    	// 	$("#p1").mouseover(function(){
    	// 		var p=document.getElementById("p1");
    	// 		p.style.color="#800000";
    	// 		$(this).unbind();
    	// 	});
    	// });
    	
    </script>


</html>
