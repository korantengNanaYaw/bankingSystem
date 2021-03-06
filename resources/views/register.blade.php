
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SWISS International Bank</title>

    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">


</head>

<body style="background-color:#ECECEC;margin-top:50px;">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
    <tr style="background-color:#FFFFFF">
        <td><img src="images/OnlineBanking-logo.png"/></td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
                <tr>
                    <td class="contentArea">
                        @if($errors->any())
                            <h1 style="color: red;text-align: center">{{$errors->first()}}</h1>
                        @endif

                        <form action="/EbankingRegister" method="post" enctype="multipart/form-data" id="accregister">
                            {{ csrf_field() }}
                            <h2 align="center"><strong>Register Account: </strong></h2>
                            <p align="center">Please register your account with us to take the benefits of our Online Banking facelities.</p>
                            <div class="errorMessage" align="center">&nbsp;</div>

                            <table width="550" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#336699" class="entryTable">

                                <tr>
                                    <td class="contentArea">

                                        <table width="550" border="0" cellspacing="0" cellpadding="5" class="entryTable">
                                            <tr id="entryTableHeader">
                                                <th colspan="2">Personal Information</th>
                                            </tr>
                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>First Name</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_firstname">
            <input name="firstname" type="text" class="frmInputs" id="accno" size="40" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Firstname is required.</span>
			<span class="textfieldMinCharsMsg">Firstname must specify at least 6 characters.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Last Name</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_lastname">
            <input name="lastname" type="text" class="frmInputs" id="accno" size="40" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Lastname is required.</span>
			<span class="textfieldMinCharsMsg">Lastname must specify at least 6 characters.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td height="30" class="label"><label for="pass"><strong>Password</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprypwd">
              <input name="password" type="password" class="frmInputs" id="pass" size="30" /><br />
              <span class="passwordRequiredMsg">Password is required.</span>
			  <span class="passwordMinCharsMsg">You must specify at least 6 characters.</span>
			  <span class="passwordMaxCharsMsg">You must specify at max 10 characters.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td height="30" class="label"><label for="pass"><strong>Confirm Password</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprycpwd">
              <input name="cpassword" type="password" class="frmInputs" id="pass" size="30" /><br />
              <span class="confirmRequiredMsg">Confirm Password is required.</span>
			  <span class="confirmInvalidMsg">Confirm Password values don't match</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Email  ID</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_email">
            <input name="email" type="text" class="frmInputs" id="accno" size="30" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Email ID is required.</span>
			<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
			</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Phone Number</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_phone">
            <input name="phone" type="text" class="frmInputs" id="accno" size="20" maxlength="30" /><small> ie (XXX) XXX-XXXX</small>
            <br/>
            <span class="textfieldRequiredMsg">Phone Number is required.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Date of Birth</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_dob">
            <input name="dob" type="text" class="frmInputs" id="accno"  size="20" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Date of Birth is required.</span>
			<span class="textfieldInvalidFormatMsg">Please enter a valid date (mm-dd-yyyy).</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Profile Pics</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_lastname">
            <input name="pic" type="file" class="frmInputs"  size="30" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Lastname is required.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Gender</strong></label></td>
                                                <td height="30" class="content">
			<span id="spryselect_gender">
			  <select name="gender" id="gender">
                  <option value="">Please select your gender</option>
                  <option value="Male">Male</option>
                  <option value="Felame">Female</option>
              </select>
			 <br/>
			 <span class="selectRequiredMsg">Please select your gender.</span>
			</span>
                                                </td>
                                            </tr>



                                            <!-- Address Info -->
                                            <tr id="entryTableHeader">
                                                <th scope="col" colspan="2">Address Information</th>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Address</strong></label></td>
                                                <td height="30" class="content">
			<span id="spryta_address">
				<textarea name="address" id="textarea1" cols="35" rows="2"></textarea>
  			<br/>
            <span class="textareaRequiredMsg">Address is required.</span>
			<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>City Name</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_city">
            <input name="city" type="text" class="frmInputs" id="accno" size="30" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">City Name is required.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>State</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_state">
            <input name="state" type="text" class="frmInputs" id="accno"  size="30" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">State name is required.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Zip Code</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_zip">
            <input name="zipcode" type="text" class="frmInputs" id="accno" size="15" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Zip Code is required.</span>
			</span>
                                                </td>
                                            </tr>


                                            <!-- Account Information Info -->
                                            <tr id="entryTableHeader">
                                                <th colspan="2">Bank Account Information</th>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Account Type</strong></label></td>
                                                <td height="30" class="content">
			<span id="spryselect_acctype">
			  <select name="acctype" id="acctype">
                  <option value="">Please select Account Type</option>
                  <option value="CA">Checking Account</option>
                  <option value="SA">Saving Account</option>
                  <option value="FDA">Fixed deposit Account</option>
              </select>
			 <br/>
			 <span class="selectRequiredMsg">Please select Account Type.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Account Pin </strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_pin">
            <input name="pin" type="text" class="frmInputs" id="accno"  size="20" maxlength="30" />
            <br/>
            <span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="textfieldMinCharsMsg">Account Pin must specify at least 4 characters.</span>
			<span class="textfieldMaxCharsMsg">Account Pin must specify at max 6 characters.</span>
			<span class="textfieldInvalidFormatMsg">Account Pin must be Integer.</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label"><label for="accno"><strong>Verify Pin Number</strong></label></td>
                                                <td height="30" class="content">
			<span id="sprytf_cpin">
            <input name="cpin" type="text" class="frmInputs" id="accno" size="20" maxlength="30" />
            <br/>
           	<span class="confirmRequiredMsg">Confirm Password is required.</span>
			<span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="confirmInvalidMsg">Confirm Password values don't match</span>
			</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="120" height="30" class="label">&nbsp;</td>
                                                <td height="30" class="content">
                                                    If your are already register with us, please <a href="login.php">Login Now</a>.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="120" height="30">&nbsp;</td>
                                                <td height="30">
                                                    <input name="submitButton" type="submit" class="frmButton" id="submitButton" value="Register Account!" />
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                        </form></td>
                </tr>
                <tr>
                    <td class="contentArea" style="border-top:#999999 thin dashed;">
                        <p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px; margin-bottom:40px; text-align:center;">
                            SWISS International Bank   <br/>
                            Website: <a href="http://www.swiss-internationalbank.com">www.swiss-internationalbank.com</a>
                        </p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/moment.js"></script>
<script src="/js/script.js"></script>
<script src="/js/ajaxsearch.js"></script>
</html>