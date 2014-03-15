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


