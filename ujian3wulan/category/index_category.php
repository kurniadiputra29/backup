<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Index Category </title>
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
	}
	.table ul li a:hover{
	background-image: linear-gradient(#ECAB05,#f7b409);
	cursor: pointer;
	}
	.table ul li a{
	float: left;
	width: 4%;
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
	#aktive a{
	background-image: linear-gradient(#1bb9fc,#03A9F4);
	}
	#aktive a:hover{background-image: linear-gradient(#03A9F4,#1bb9fc);}
	.table li a:hover{color: white;}
	.table table{
	float: left;
	margin: 20px 50px 20px 50px;
	width: 90%;
	}
	.table table tr td{
	border: 5px double #ddd;
	text-align: center;
	padding: 10px;
	}
	.table table tr th{
	border: 5px double #ddd;
	text-align: center;
	padding: 10px;
	font-weight: bold;
	}
	.table a{
	font-weight: bold;
	text-decoration: none; 
	color: blue;
	}
	.table a:hover{
	color: #FF6736;
	}
	.table tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
	</head>
	<body>
	<div id="container">
		<div id="header">POINT OF SALE</div>
		<div id="header2">INDEX CATEGORY</div>
		<div class="menu">
		<ul>
			<li id="aktive"><a href="../category/index_category.php" >Category</a></li>
			<li><a href="../item/index_item.php" >Item</a></li>
			<li><a href="../order/index_order.php" >Order</a></li>
		</ul>
		</div><!--menu-->
		<div class="table">
				<ul>
				<li><a href="tambah_category.php">Add</a></li>
				</ul>
				<table>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
					<?php
					include '../koneksi.php';
					$nomor  = 1;
					$sql    = "select * from category";
					$result = mysqli_query($connect,$sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
					if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
						while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
							echo "
							<tr>
								<td>".$nomor++."</td>
								<td>".$row['name']."</td>
								<td>
									<a href='update_category.php?id=".$row['id']."'>Update</a> |
									<a href='delete_category.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Delete</a>
								</td>
							</tr>
							";
						}
					}
					?>
				</table>
		</div><!--table-->
	</div><!--container-->
	</body>
</html>
