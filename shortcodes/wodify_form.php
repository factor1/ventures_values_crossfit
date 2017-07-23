<!-- INSERT THIS CODE INTO YOUR WEBSITE TO HAVE LEADS SUBMIT THEIR INFORMATION TO WODIFY REMOTELY -->
<script type='text/javascript'>
function validateWodifyLeadForm()
{
var reEmail = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/;
var returnValue = true;

var fieldname = document.forms['wodifyLeadForm']['name'].value;
if(fieldname == null || fieldname == '')
{
document.getElementById('errorname').style.display = 'inline';
returnValue = false;
}
else
{
document.getElementById('errorname').style.display = 'none';
}



var fieldemail = document.forms['wodifyLeadForm']['email'].value;
if(fieldemail == null || fieldemail == '' || !reEmail.test(fieldemail))
{
document.getElementById('erroremail').style.display = 'inline';
returnValue = false;
}
else
{
document.getElementById('erroremail').style.display = 'none';
}



var fieldphone = document.forms['wodifyLeadForm']['phone'].value;
if(fieldphone == null || fieldphone == '')
{
document.getElementById('errorphone').style.display = 'inline';
returnValue = false;
}
else
{
document.getElementById('errorphone').style.display = 'none';
}



var validationUrl = '//app.wodify.com/API/WebToLeadCaptchaVerificationEntry.aspx?ChallengeField=' + document.getElementById('recaptcha_challenge_field').value + String.fromCharCode(38) + 'ResponseField=' + document.getElementById('recaptcha_response_field').value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.open('GET', validationUrl, false);
xmlhttp.send();
var captchaResult = JSON.parse(xmlhttp.responseText);
if (captchaResult.result)
{
document.getElementById('errorCAPTCHA').style.display = 'none';
document.getElementById('usecaptcha').value = 'false';
}
else
{
document.getElementById('errorCAPTCHA').style.display = 'inline';
document.getElementById('usecaptcha').value = 'true';
returnValue = false;
}


return returnValue;
};
</script>
<form action="https://app.wodify.com/API/WebToLeadFormPostEntry_v1.aspx?" method="POST" id="wodifyLeadForm" name="wodifyLeadForm" onsubmit="return validateWodifyLeadForm();">

<div class="row">
<div class="small-3 columns">
<label for="name">Name *</label>
</div><div class="small-8 columns">
<input type="text" name="name" maxlength="50"></input>
<span id="errorname" name="errorname" style="display: none; color: #cc2626;"> Required field!</span>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="email">Email *</label>
</div><div class="small-8 columns">
<input type="email" name="email" maxlength="250"></input>
<span id="erroremail" name="erroremail" style="display: none; color: #cc2626;"> Required field!</span>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="phone">Phone *</label>
</div><div class="small-8 columns">
<input type="text" name="phone" maxlength="20"></input>
<span id="errorphone" name="errorphone" style="display: none; color: #cc2626;"> Required field!</span>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="city">City</label>
</div><div class="small-8 columns">
<input type="text" name="city" maxlength="50"></input>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="province">Province</label>
</div><div class="small-8 columns">
<input type="text" name="province" maxlength="50"></input>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="leadsource">How Did You Hear About Us</label>
</div><div class="small-8 columns">
<select name="leadsource">
<option value="">-</option>
<option value="41244">Friend/Family</option>
<option value="41245">Facebook</option>
<option value="41246">Google/Search Engine</option>
<option value="41247">Other</option>
</select>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="referredby">Referred By</label>
</div><div class="small-8 columns">
<input type="text" name="referredby" maxlength="1000"></input>
</div></div>

<div class="row">
<div class="small-3 columns">
<label for="comments">Comments</label>
</div><div class="small-8 columns">
<textarea name="comments" maxlength="2000" rows="4" cols="50"></textarea>
</div></div>



<input type="hidden" id="usecaptcha" name="usecaptcha" value="false"></input><br />
<input type="hidden" name="apikey" value="1hlx3034y8">
<input type="submit" value="Submit"></form>