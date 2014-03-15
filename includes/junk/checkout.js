function agreement_checkout()
{
    if(document.checkout_frm.agree.checked=true)
    {
        document.checkout_frm.btn.disabled=false;
    }
    else
    {
        document.checkout_frm.btn.disabled=true;
    }
}


