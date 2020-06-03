<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Add Item</title>
		<style type="text/css">
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
body{
font-family: sans-serif;
}
	body{
	font-family: sans-serif;
	background: #EAEAEA;
	}
	#container{
	background: #EAEAEA;
	width: 100%;
	}
	#header{
	text-align: center;
	font-weight: bold;
	font-size: 30px;
	background-image: linear-gradient(#01749e,#015877);
	padding: 20px;
	color: #FFFFFF;
	text-shadow: 0px 3px 1px black;
	}
	#header2{
	text-align: center;
	font-weight: bold;
	font-size: 25px;
	background-image: linear-gradient(#1bb9fc,#03A9F4);
	padding: 15px;
	color: white;
	text-shadow: 1px 2px 1px black;
	border-bottom: 5px ridge #1bb9fc;
	border-top: 5px ridge #1bb9fc;
	}
	.menu{
	float: left;
	display: inline-block;
	background: white;
	width: 20%;
	min-height: 20px;
	padding: 20px 0px 20px 0px;
	margin: 20px 25px 20px 25px;
	}
	.menu li a{
	display: inline-block;
	background-image: linear-gradient(#f7b409,#ECAB05);
	font-size: 20px;
	color: white;
	text-transform: uppercase;
	text-decoration: none; 
	margin: 20px 40px 20px 40px;
	width: 60%;
	padding: 15px;
	text-align: center;
	border-radius: 5px;
	font-weight: bold;
	box-shadow: 1px 2px 2px grey;
	text-shadow: 0px 1px 1px black;
	}
	.menu li a:hover{
	background-image: linear-gradient(#ECAB05,#f7b409);
	}
	.table{
	float: left;
	display: inline-block;
	width: 74%;
	margin: 20px 20px 20px 0px;
	background: white;
	font-size: 18px;
	}
	.table table{
	float: left;
	margin: 20px 50px 20px 50px;
	width: 90%;
	}
	.table table tr td{
	border-bottom: 5px double #ddd;
	text-align: left;
	padding: 10px;
	}
	.table input{
	border: 5px ridge #ddd;
	text-align: left;
	padding: 5px 10px 5px 10px;
	border-radius: 8px;
	width: 40%;
	background-image: linear-gradient(white,white);
	font-size: 18px;
	}
	.table select{
	text-align: left;
	padding: 5px 10px 5px 10px;
	border-radius: 3px;
	width: 40%;
	background-image: linear-gradient(#cccdce,#a6a7a8);
	border: none;
	box-shadow: 1px 2px 2px grey;
	font-size: 18px;
	color: black;
	font-weight: bold;
	}
	.table select:hover{
	cursor: pointer;
	}
	.submit input{
	background-image: linear-gradient(#f7b409,#ECAB05);
	font-size: 18px;
	color: white;
	text-transform: uppercase;
	width: 20%;
	padding: 5px 10px 5px 10px;
	text-align: center;
	border-radius: 5px;
	font-weight: bold;
	box-shadow: 1px 2px 2px grey;
	text-shadow: 0px 1px 1px black;
	border: 1px outset #ddd;
	}
	.submit input:hover{
	background-image: linear-gradient(#ECAB05,#f7b409);
	cursor: pointer;
	}
	#aktive a{
	background-image: linear-gradient(#1bb9fc,#03A9F4);
	}
	#aktive a:hover{background-image: linear-gradient(#03A9F4,#1bb9fc);}
	.table ul li a:hover{
	background-image: linear-gradient(#ECAB05,#f7b409);
	cursor: pointer;
	}
	.table ul li a{
	float: left;
	width: 8%;
	border-radius: 5px;
	box-shadow: 1px 2px 2px grey;
	background-image: linear-gradient(#f7b409,#ECAB05);
	text-align: center;
	text-transform: uppercase;
	text-decoration: none; 
	color: white;
	font-weight: bold;
	text-shadow: 0px 1px 1px black;
	padding: 10px 20px 10px 20px;
	margin: 20px 20px 0px 50px;
	font-size: 18px;
	}
	.radio input{
	width: 3%;	
	}
	</style>
	</head>
	<body>
	<div id="container">
		<div id="header">POINT OF SALE</div>
		<div id="header2">ADD ITEM</div>
		<div class="menu">
			<ul>
				<li><a href="../category/index_category.php" >Category</a></li>
				<li id="aktive"><a href="../item/index_item.php" >Item</a></li>
				<li><a href="../order/index_order.php" >Order</a></li>
			</ul>
		</div><!--menu-->
		<div class="table">
				<ul>
				<li><a href="../item/index_item.php">BACK</a></li>
				</ul>
				<form action="proses_input_item.php" method="POST">
				<table class="input">
					<tr>	    
					  	<td><label for="category">Category</label></td>
					  	<td><select name="category" id="category" class="col-10-b col-s-10" maxlength="11" required><option value="">Select</option>
									<?php
									include '../koneksi.php';
									$sql    = "SELECT * FROM category";
									$result = mysqli_query($connect,$sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
									if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
										while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
											echo "
											<option value=".$row['id'].">
												".$row['name']."
											</option>
											";
										}
									}
									?>
									</select>
							</td>
					</tr>
				<tr>
					<td><label for="nama">Name</label></td>
					<td><input type="text" name="nama" id="nama" class="col-10-b col-s-10" maxlength="100" required></td>
				</tr>	
				<tr>
					<td><label for="price">Price</label></td>
					<td><input type="text" name="price" id="price" class="col-10-b col-s-10" maxlength="11" required></td>
				</tr>	
				<tr class="radio">
					<td><label>Status</label></td>
					<td><input type="radio" name="status" id="status1" value="1" required>
							<label for="status1">Aktif</label>
							<input type="radio" name="status" id="status2" value="0" required>
							<label for="status2">Tidak Aktif</label>
					</td>
				</tr>		
				<tr class="submit">
					<td></td><td><input type="submit" value="Submit"></td>
				</tr>		
				</table>	
			</form>
		</div><!--table-->
	</div><!--container-->
	</body>
</html>
