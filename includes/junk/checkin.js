function validate_checkin(f)
{
    if(f.name.value=="")
    {
        alert("Please insert the client's name");
        return false;
    }
    if(f.add.value="")
    {
        alert("Please insert the client's address");
        return false;
    }
    if(f.contact.value==""||isNaN(f.contact.value)==true)
    {
        f.contact.value="";
        alert("Please insert a valid contact number");
        return false;
    }
    return true;
}

