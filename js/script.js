$("#buyersubmitform").submit( function(e) {

	e.preventDefault();


	var buyernameValue      =  document.getElementById("buyername").value;
	var buyeremailValue     =  document.getElementById("buyeremail").value;
	var buyercityValue      =  document.getElementById("buyercity").value;
	var buyerphoneValue     =  document.getElementById("buyerphone").value;
	var buyeramountValue    =  document.getElementById("buyeramount").value;
	var buyerreceiptidValue =  document.getElementById("buyerreceiptid").value;
	var buyenoteValue       =  document.getElementById("buyenote").value;

	var buyername       =     buyernameValue.trim();
	var buyeremail      =     buyeremailValue.trim();
	var buyercity       =     buyercityValue.trim();
	var buyerphone      =     buyerphoneValue.trim();
	var buyeramount     =     buyeramountValue.trim();
	var buyerreceiptid  =     buyerreceiptidValue.trim();
	var buyenote        =     buyenoteValue.trim();

	

	var namepattern    = /^[A-Za-z 0-9]+$/;
	var emailpattern   = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var citypattern    = /^[A-Za-z ]+$/;

	if ( ( namepattern.test(buyername) ) && ( buyername.length <= 20 )  && ( buyername != " " ) ) {

		document.getElementById("nameerror").innerHTML = " ";
	}

	else {

		document.getElementById("nameerror").innerHTML = "Only text, spaces and numbers, not more than 20 characters";
	}

	if ( ( emailpattern.test(buyeremail) ) && (buyeremail != " " ) ) {

		 document.getElementById("emailerror").innerHTML = " ";
	}

	else {

		document.getElementById("emailerror").innerHTML = "Invalid email, Eneter valid email";
	}


	if ( ( citypattern.test(buyercity) ) && (buyercity != " ") ) {

		document.getElementById("emailerror").innerHTML = " ";

	}

	else {

		document.getElementById("cityerror").innerHTML = "Only text and spaces";
	}


	var cityarr = buyercity.slice(" ,");
	console.log(cityarr);


});