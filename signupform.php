
<div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-scdrollable">
    <div class="modal-content h-100" style="background:transparent;">
    <div class="modal-body">
    
      <style>


          *,:after,:before{box-sizing:border-box}
          .clearfix:after,.clearfix:before{content:'';display:table}
          .clearfix:after{clear:both;display:block}
          a{color:inherit;text-decoration:none}

          .login-wrap{
            width:100%;
            margin:auto;
            max-width:525px;
            min-height:670px;
            position:relative;
            background:transprent;
            box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
          }
          .login-html{
            width:100%;
            height:100%;
            position:absolute;
            padding:50px 70px 50px 70px;
            background:rgba(40,57,101,.9);
            background:orange;
            border-radius:25px;
          }
          .login-html .sign-in-htm,
          .login-html .sign-up-htm{
            top:0;
            left:0;
            right:0;
            bottom:0;
            position:absolute;
            transform:rotateY(180deg);
            backface-visibility:hidden;
            transition:all .4s linear;
          }
          .login-html .sign-in,
          .login-html .sign-up,
          .login-form .group .check{
            display:none;
          }
          .login-html .tab,
          .login-form .group .label,
          .login-form .group .button{
            text-transform:uppercase;
          }
          .login-html .tab{
            font-size:22px;
            margin-right:15px;
            padding-bottom:5px;
            margin:0 15px 10px 0;
            display:inline-block;
            border-bottom:2px solid transparent;
          }
          .login-html .sign-in:checked + .tab,
          .login-html .sign-up:checked + .tab{
            color:#fff;
            border-color:#1161ee;
          }
          .login-form{
            min-height:345px;
            position:relative;
            perspective:1000px;
            transform-style:preserve-3d;
          }
          .login-form .group{
            margin-bottom:15px;
          }

          .login-form .group .button{
            width:100%;
            color:#fff;
            display:block;
          }
          .login-form .group .label,
          .login-form .group .input{
            width:100%;
            color:black;
            display:block;
          }
          .login-form .group .input,
          .login-form .group .button{
            border:none;
            padding:15px 20px;
            border-radius:25px;
            background:#e8f0fd!important;
          }
          .login-form .group .label{
            color:white;
            font-size:12px;
          }
          .login-form .group .button{
            background:#1161ee!important;
          }
          .login-form .group label .icon{
            width:15px;
            height:15px;
            border-radius:2px;
            position:relative;
            display:inline-block;
            background:rgba(255,255,255,.1);
          }
          .login-form .group label .icon:before,
          .login-form .group label .icon:after{
            content:'';
            width:10px;
            height:2px;
            background:#fff;
            position:absolute;
            transition:all .2s ease-in-out 0s;
          }
          .login-form .group label .icon:before{
            left:3px;
            width:5px;
            bottom:6px;
            transform:scale(0) rotate(0);
          }
          .login-form .group label .icon:after{
            top:6px;
            right:0;
            transform:scale(0) rotate(0);
          }
          .login-form .group .check:checked + label{
            color:#fff;
          }
          .login-form .group .check:checked + label .icon{
            background:#1161ee;
          }
          .login-form .group .check:checked + label .icon:before{
            transform:scale(1) rotate(45deg);
          }
          .login-form .group .check:checked + label .icon:after{
            transform:scale(1) rotate(-45deg);
          }
          .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
            transform:rotate(0);
          }
          .login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
            transform:rotate(0);
          }

          .hr{
            height:2px;
            margin:60px 0 50px 0;
            background:rgba(255,255,255,.2);
          }
          .foot-lnk{
            text-align:center;
          } 
          select{
            height:auto !important;
          }
          .toggle-password-eye {
            float: right;
            top: -35px;
            right: 20px;
            position: relative;
            cursor: pointer;
        }
    </style>

    <div class="login-wrap  w-100 w-lg-75">
      
     <button type="button" onclick="closeRegisterModal()" class="close position-absolute" style="top:0;right:10px;z-index:20;background:transparent;border:0;outline:0;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="fs-2 text-dark">×</span>
    </button>
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked=""><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form h-100">
			<div class="sign-in-htm" style="top:50px;">
				<div class="group">
					<!-- <label for="user" class="label">Username</label> -->
					<input id="user" type="text" class="input" name="username" placeholder="Username" style="background:#e8f0fd!important;">
				</div>
				<div class="group">
					<!-- <label for="pass" class="label">Password</label> -->
					<input id="pass" type="password" class="input" data-type="password" placeholder="Password" value="">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked="">
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
        <div class="group d-flex justify-content-center align-items-center msgaftersignin">
              
        </div>
				<div class="group">
					<input type="submit" class="button" id="signinbtn" onclick="signIn(event)" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
	 </div>
        <div class="sign-up-htm" style="top:30px;overflow-y:auto;overflow-x:hidden;height:500px;">
          <div class="row">
            <div class="col-12 col-md-6">
            <div class="group">
            <!-- <label for="user" class="label">Username</label> -->
            <input id="fullname" type="text" class="input" placeholder="Full Name">
          </div>
          <div class="group">
            <!-- <label for="user" class="label">Username</label> -->
            <input id="phonenumber" type="text" class="input" placeholder="Phone Number">
          </div>
          <div class="group">
            <!-- <label for="pass" class="label">Email Address</label> -->
            <input id="email" type="text" class="input" placeholder="Email Address">
          </div>
          <div class="group">
              <select name="gender" id="gender" style="background: #e8f0fd;border-radius: 25px;padding:10px 20px;" class="form-select grey-text  browser-default custom-select">
                    <option class="grey-text" value="" disabled="" selected="">Select Gender</option>
                    <option class="text-black" value="Male">Male</option>
                    <option class="text-black" value="Female">Female</option>
                    <option class="text-black" value="Other">Other</option>
              </select>
          </div>
          <div class="group">
              <select name="category" id="category" style="background: #e8f0fd;border-radius: 25px;padding:10px 20px;" class="form-select grey-text  browser-default custom-select">
                    <option class="grey-text" value="" disabled="" selected="">Category</option>
                    <option class="text-black" value="Student">Student</option>
                    <option class="text-black" value="Teacher">Teacher</option>
              </select>
          </div>
        

            </div>
            <div class="col-12 col-md-6">
                              <div class="group">
                                <!-- <label for="user" class="label">Username</label> -->
                                <input id="username" type="text" class="input" placeholder="Username">
                              </div>
                              <div class="group">
                                <!-- <label for="pass" class="label">Password</label> -->
                                <input id="enteredpass" type="password" class="input" data-type="password" placeholder="Password">
                              </div>
                              <div class="group">
                                <!-- <label for="pass" class="label">Repeat Password</label> -->
                                <input id="enteredrepeatpass" type="password" class="input" data-type="password" placeholder="Repeat Password">
                              </div>
                              <div class="group">
                              <select name="state" style="background: #e8f0fd;border-radius: 25px;padding:10px 20px;" class="form-select grey-text  browser-default custom-select" id="inputState" aria-label="Default select example">
                                            <option value="" disabled="" selected="">Select State</option>
                                              <option value="Andra Pradesh">Andra Pradesh</option>
                                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                              <option value="Assam">Assam</option>
                                              <option value="Bihar">Bihar</option>
                                              <option value="Chhattisgarh">Chhattisgarh</option>
                                              <option value="Goa">Goa</option>
                                              <option value="Gujarat">Gujarat</option>
                                              <option value="Haryana">Haryana</option>
                                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                                              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                              <option value="Jharkhand">Jharkhand</option>
                                              <option value="Karnataka">Karnataka</option>
                                              <option value="Kerala">Kerala</option>
                                              <option value="Madya Pradesh">Madya Pradesh</option>
                                              <option value="Maharashtra">Maharashtra</option>
                                              <option value="Manipur">Manipur</option>
                                              <option value="Meghalaya">Meghalaya</option>
                                              <option value="Mizoram">Mizoram</option>
                                              <option value="Nagaland">Nagaland</option>
                                              <option value="Orissa">Orissa</option>
                                              <option value="Punjab">Punjab</option>
                                              <option value="Rajasthan">Rajasthan</option>
                                              <option value="Sikkim">Sikkim</option>
                                              <option value="Tamil Nadu">Tamil Nadu</option>
                                              <option value="Telangana">Telangana</option>
                                              <option value="Tripura">Tripura</option>
                                              <option value="Uttaranchal">Uttaranchal</option>
                                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                                              <option value="West Bengal">West Bengal</option>
                                              <option disabled="" style="background-color:#aaa; color:#fff">UNION Territories</option>
                                              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                              <option value="Chandigarh">Chandigarh</option>
                                              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                              <option value="Daman and Diu">Daman and Diu</option>
                                              <option value="Delhi">Delhi</option>
                                              <option value="Lakshadeep">Lakshadeep</option>
                                              <option value="Pondicherry">Pondicherry</option>
                                  </select>
                              </div>
                              <div class="group">
                                  <select name="inputDistrict" style="background: #e8f0fd;border-radius: 25px;padding:10px 20px;" class="form-select grey-text  browser-default custom-select" id="inputDistrict">
                                        <option value="" disabled="" selected="">-- select one -- </option>
                                  </select>
                              </div>
                                </div>
                              </div>
                              <div class="group d-flex justify-content-center align-items-center msgaftermath">
                                    
                              </div>
                              <div class="group">
                                <button type="submit" id="signupbtn" onclick="signUp(event)" class="button">Sign Up</button>
                              </div>
            </div>
      </div>
	</div>
</div>
