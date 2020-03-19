    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if (keyCode != 8 && keyCode != 9 && (keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        {
            return false;
        }
        return true;
    }
    function ValidateNumber(evt)
    {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function checkPassword(){            
        var password = document.getElementById('Password').value;
        var conf_password = document.getElementById('c_Password').value;
        if(password!=conf_password){
            alert('Please verify password!');
            return false;
        }
        return true;        
    }
    function getState(countryId){
        alert(countryId);
    }
    function getCity(stateId){
        alert(stateId);
    }
