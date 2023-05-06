



function testResults (form) {
    var P = form.inputbox.value;
	var r = form.inputbox2.value;
	var n = form.inputbox3.value;
	
	if(isNaN(P) || (P<0)){
	alert("It has to be a postitive number");
	return false;}
	if(isNaN(r) || (r<0)){
	alert("It has to be a postitive number");
	return false;}
	if(isNaN(n) || (n<0)){
	alert("It has to be a postitive number");
	return false;}

	
	R = P * r / (1 - (1 / (1 + r)**n))
	var total_cost = R * n
	var interest_cost_total = (R * r) * n
	R = R.toFixed(2)
	total_cost = total_cost.toFixed(2)
	interest_cost_total = interest_cost_total.toFixed(2)

	document.getElementById("demo4").innerHTML = R
	document.getElementById("demo5").innerHTML = total_cost
	document.getElementById("demo6").innerHTML = interest_cost_total
}