<!--Background พื้นหลัง -->
	<style type="text/css">	
		body{
			background-image:url(pic/BG1.jpg);
			background-size:cover;
			background-attachment:fixed;	
		}
		.content{
			background:black;
			width : 50%;
			padding:40px;
			margin:100px auto;
		}
		p{
			font-size :25px;
			color :black;
		}

		/* The switch - the box around the slider */
		.switch {
		  	position: relative;
		  	display: inline-block;
		  	width: 60px;
		  	height: 34px;
		}

		/* Hide default HTML checkbox */
		.switch input {display:none;}

		/* The slider */
		.slider {
		  	position: absolute;
		  	cursor: pointer;
		  	top: 0;
		  	left: 0;
		  	right: 0;
		  	bottom: 0;
		  	background-color: #FF6347;
		  	-webkit-transition: .4s;
		  	transition: .4s;
		}

		.slider:before {
  			position: absolute;
			content: "";
  			height: 26px;
  			width: 26px;
  			left: 4px;
  			bottom: 4px;
  			background-color: white;
  			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
		  	background-color: #00FF7F;
		}

		input:focus + .slider {
		  	box-shadow: 0 0 1px #00FF7F;
		}

		input:checked + .slider:before {
  			-webkit-transform: translateX(26px);
  			-ms-transform: translateX(26px);
  			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
  			border-radius: 34px;
		}

		.slider.round:before {
		  	border-radius: 50%;
		}
	</style>