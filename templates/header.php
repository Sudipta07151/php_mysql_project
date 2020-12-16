<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sudi's Pizza🍕</title>
</head>
<body>
	<nav>
		<ul>
			<li>Sudi's Pizza🍕</li>
			<li><a href="add.php">ADD A PIZZA</a></li>
		</ul>
	</nav>	
</body>

<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{
		height: 100vh;
		width: 100vw;
		background-color:yellow;
	}
	nav{
		height:8%;
		background-color: purple;
	}
	ul{
		height:100%;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	li{
		font-family: 'Courier New', Courier, monospace;
		font-weight: 800;
		font-size: 20px;
		list-style: none;
		color: white;
	}
	li:first-child{
		padding-left:20px;
	}
	li:last-child{
		padding-right:20px;
	}
	a{
		text-decoration: none;
		background-color: #eee1;
		padding: 10px;
		border-radius: 5%;
		color: white;
		border: 1px solid white;
	}
</style>
