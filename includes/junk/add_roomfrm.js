function validate_room(f)
{
    if(f.room_no.value==""||isNaN(f.room_no.value)==true)
    {
        f.room_no.value=="";
        alert("Please insert a valid room number");
        return false;
    }
    return true;
}

