<input id="textEmail">

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo" style="color: red;"></p>

<script>

function myFunction() {

    var email;

    email = document.getElementById("textEmail").value;

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(textEmail.value) == false) 

        {

            document.getElementById("demo").style.color = "red";

            document.getElementById("demo").innerHTML ="Invalid EMail ->"+ email;

            alert('Invalid Email Address ->'+email);

            return false;

        } else{

        document.getElementById("demo").style.color = "DarkGreen";      

        document.getElementById("demo").innerHTML ="Valid Email ->"+email;

        }

   return true;

}

</script>

