
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SWISS Intercontinental Bank</title>

    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">


</head>

<body style="background-color:#ECECEC;margin-top:50px;">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
    <tr style="background-color:#FFFFFF">
        <td><img src="images/OnlineBanking-logo.png" /></td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
                <tr>
                    <td class="contentArea">
                        <form  id="acclogin">
                            {{ csrf_field() }}
                            <h2 align="center"><strong> :</strong> Log in to Access your Account</h2>
                            <p align="center">Enter Your Account Login Details to proceed</p>
                            <div class="errorMessage" align="center">&nbsp;</div>
                            <table width="450" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
                                <tr id="entryTableHeader">
                                    <td><div align="center">:: Customer Login ::</div></td>
                                </tr>
                                <tr>
                                    <td class="contentArea">

                                        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr class="text">
                                                <td width="100" align="right">Account No#</td>
                                                <td width="10" >:</td>
                                                <td>
			<span id="sprytextfield1" style="text-align:left;">
            <input name="accno" type="text" id="accno" tabindex="10" size="30" maxlength="30" />
            <br/>

			</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100" align="right">Password</td>
                                                <td width="10" align="center">:</td>
                                                <td>
			<span id="sprypassword1" style="text-align:left;">
              <input name="pass" type="password" id="pass" tabindex="20" size="30" /><br />


			</span>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                                <td><input name="submitButton" type="submit" id="submitButton" value="Login Now ! " /></td>
                                            </tr>

                                            <tr>
                                                <td colspan="3">
                                                    If your account is not register with us, please <a href="/register">Register it Now</a>.
                                                </td>
                                            </tr>

                                        </table></td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                        </form></td>
                </tr>
                <tr>
                    <td class="contentArea" style="border-top:#999999 thin dashed;">
                        <p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px; margin-bottom:40px; text-align:center;">
                            SWISS Intercontinental Bank <br/>
                            Website: <a href="http://www.swiss-continentalbank.com">www.swiss-internationalbank.com</a>
                        </p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>



<!-- Modal -->



<div class="modal " id="myModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div style="display: inline-block;text-align: center;"  class="modal-content">
            <div style="position: relative;"  class="modal-header">
                <div style="position: relative;" >
                    <img src="/images/smartphone.png" alt="Smiley face" height="42" width="42">
                </div>


                <br>

                <div style="position: relative;" >
    <h5  id="modalheaderMessage" style="text-align: center"> A confirmation code has been sent to your phone number</h5>

</div>

            </div>
            <div  class="modal-body">




                <form    role="form">
                    <div  class="form-group">



                        <div class="col-md-12 " align="center">
                            <input type="email" class="form-control"
                                   id="inputEmail3" placeholder="Enter Code"/>
                        </div>

                        <div style="height: 20px"></div>



                    </div>


                </form>
            </div>
            <div class="modal-footer">


                <div  class="col-md-10 control-label">

                    <button type="button"  onclick="verifyPin(document.getElementById('inputEmail3').value)" class="btn btn-primary">Confirm Code</button>
                    <button type="button" onclick="resendPin()" class="btn btn-danger">Resend Code</button>


                </div>
            </div>
        </div>
    </div>
</div>


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/moment.js"></script>
<script src="/js/script.js"></script>
<script src="/js/ajaxsearch.js"></script>


</html>