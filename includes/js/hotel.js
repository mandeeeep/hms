/*Validation for add_roomfrm*/
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

/*Validation for checkin*/
function validate_checkin(f)
{
    if(f.name.value=="")
    {
        alert("Please insert the client's name");
        return false;
    }
    if(f.addr.value=="")
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

/*Validation for checkout*/
function agreement_checkout()
{
    if(document.checkout_frm.agree.checked==true)
    {
        document.checkout_frm.btn.disabled=false;
    }
    else
    {
        document.checkout_frm.btn.disabled=true;
    }
}

/*Validation for remove room*/
function back_remove_room()
{
    window.location="menu.php";
}

/*validation for services*/
function agreement_services()
{
    if(document.services_frm.agree.checked==true)
    {
        document.services_frm.submit.disabled=false;
    }
    else
    {
        document.services_frm.submit.disabled=true;
    }
}
function validate_services(f)
{
    if(f.service.value=="")
    {
        alert("Invalid service info");
        return false;
    }
    if(isNaN(f.amount.value)==true || f.amount.value=="")
    {
        f.amount.value="";
        alert("Invalid amount");
    }
    return true;
}

/*Manager login*/
function validate_manager(f)
{
    if(f.mgr.value=="" || f.mgr.value.length<6)
    {
        f.mgr.value="";
        alert("Invalid manager name!");
        return false;
    }

    if(f.pwd.value=="" || f.pwd.length<6)
    {
        f.pwd.value="";
        alert("Invalid password!");
        return false;
    }
    return true;
}

/*Add manager validation*/
function validate_add_manager(f)
{
   if(f.mgr_name.value=="" || f.mgr_name.value.length<6)
    {
        f.mgr_name.value="";
        alert("Invalid manager name!");
        return false;
    }

    if(f.mgr_pwd.value=="" || f.mgr_pwd.length<6)
    {
        f.mgr_pwd.value="";
        alert("Invalid password!");
        return false;
    }
    return true;
}

/*2nd validation for remove room*/
function agreement_remove_room()
{
    if(document.remove_room.agree.checked==true)
    {
        document.remove_room.btn.disabled=false;
    }
    else
    {
        document.remove_room.btn.disabled=true;
    }
}
/*validation for remove manager*/
function agreement_remove_manager()
{
    if(document.remove_manager.agree.checked==true)
    {
        document.remove_manager.btn.disabled=false;
    }
    else
    {
        document.remove_manager.btn.disabled=true;
    }
}
/*Validation for capacity validation*/
function validate_capacity(f)
{
    if(f.room_capacity.value=="")
    {        
        alert("Invalid capacity!");
        return false;
    }

    if(f.capacity_rates.value=="" || isNaN(f.capacity_rates.value)==true)
    {
        f.capacity_rates.value="";
        alert("Invalid Value adding rate!");
        return false;
    }
    return true;
}
/*Agreement for remove capacity*/
function agreement_remove_capacity()
{
    if(document.remove_capacity.agree.checked==true)
    {
        document.remove_capacity.btn.disabled=false;
    }
    else
    {
        document.remove_capacity.btn.disabled=true;
    }
}
/*Add category validation*/
function validate_category(f)
{
    if(f.room_category.value=="")
    {        
        alert("Invalid category!");
        return false;
    }

    if(f.category_rates.value=="" || isNaN(f.category_rates.value)==true)
    {
        f.category_rates.value="";
        alert("Invalid Value adding rate!");
        return false;
    }
    return true;
}

/*Agreement for remove category*/
function agreement_remove_category()
{
    if(document.remove_category.agree.checked==true)
    {
        document.remove_category.btn.disabled=false;
    }
    else
    {
        document.remove_category.btn.disabled=true;
    }
}

/*Validation for changing locker code*/
function validate_change_locker(f)
{
      if(f.code_1.value==""||f.code_1.value.length<6)
    {
        f.code_1.value="";
        f.code_2.value="";
        alert("Invalid code!");
        return false;
    }
    if(f.code_1.value!=f.code_2.value)
    {
        f.code_1.value="";
        f.code_2.value="";
        alert("Confirmation code do not match!");
        return false;
    }
    return true;
}


