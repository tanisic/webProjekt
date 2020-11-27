function validate() {
        var $valid = true;
        document.getElementById("#email").innerHTML = "";
        document.getElementById("#password").innerHTML = "";

        var userName = document.getElementById("#email").value;
        var password = document.getElementById("#password").value;
        if(userName == "")
        {
            document.getElementById("#email").innerHTML = "required";
        	$valid = false;
        }
        if(password == "")
        {
        	document.getElementById("#password").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
