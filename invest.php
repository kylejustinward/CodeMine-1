
<html>

	
	<!-- USING JS -->
	  
	<form>
		Address<input type = "text" name = "address" id="address"/>
		Square Feet<input type = "number" name = "squareFeet" id="squareFeet">
		Price<input type = "number" name = "price" id="price"><br>
		Price Per Square Feet<p  id="pricePerSquareFeet"></p>
		
		Closing Cost<p  id="closingCost"></p>
		Agents Fee<p  id="agentFee"></p>
		Cost of Repairs<input type = "number" name = "repairCost" id="repairs"/>
		<hr>
		Net<p  id="net"></p>
		Closing Cost<p  id="closingCost"></p>
		Holding Cost<p  id="holdingCost"></p>
		Profit<p  id="profit"></p>
		Offer<p  id="offer"></p>

		<button onclick="return CalcPrice();">Test button</button>
		<script>
			function CalcPrice(){
				alert("Not this again!!");
				var address = document.getElementById("address").value;
				var price   = document.getElementById("price").value;
				var sqrFt   = document.getElementById("squareFeet").value;
				var priceSqrFt = price / sqrFt;
				var closingCost = 0.03 * price;
				var agentFee = 0.06 * price;
				//var repairCost = document.getElementById("repair").value;
				//var net = price - ( closingCost + agentFee + repairCost);
				document.getElementById("pricePerSquareFeet").innerHTML =  priceSqrFt;
				
				document.getElementById("closingCost").innerHTML = closingCost;

				document.getElementById("agentFee").innerHTML = agentFee;

				//document.getElementById("net").innerHTML = repairCost;
				return false;
			}

		</script>	
	</form>
</html>

