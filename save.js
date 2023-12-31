function save(){

let saveFile = () => {

        // Get the data from each element on the form.
    	var name = document.getElementById('username');
         var email = document.getElementById('email');
        var pass = document.getElementById('password');


        // This variable stores all the data.
        let data =
            '\r Name: ' + name.value + ' \r\n ' +

            'Email: ' + email.value + ' \r\n ' +

            'Password: ' + pass.value;

        // Convert the text to BLOB.
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'SignUp.txt';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click();
    }
  }
