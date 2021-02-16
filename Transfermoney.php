<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color:#C6E2FF ;
		}
	</style>
</head>
<body style="background-color:	#1874CD ;">

	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="home.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color:wheat;text-align: center;font-family: cursive;" >To transfer money from one user to another , Fill Up The Details </h2>
    


<fieldset align="center">
  <legend>Contact Form</legend>
  <form name="frmContact" method="post" action="final.html">
    <p>
      <label for="CustomerID">CustomerID </label>
      <input type="text" name="txtCustomerID" id="txtCustomerID">
    </p>
    <p>
      <label for="Name">Name</label>
      <input type="text" name="txtName" id="txtName">
    </p>
    <p>
      <label for="EmailID">EmailID</label>
      <input type="text" name="txtEmailID" id="txtEmailID">
    </p>
    <p>
      <label for="Transfermoney">Amount Transfer</label>
       <input type="text" name="txtTransfermoney" id="txtTransfermoney">
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Transfer" id="Transfer" value="Fund Transfer" action="final.html">
    </p>
  </form>
</fieldset>
</body>
</html>
</body>
</html>