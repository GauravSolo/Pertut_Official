<style>
  *,:after,:before{box-sizing:border-box}
  .clearfix:after,.clearfix:before{content:'';display:table}
  .clearfix:after{clear:both;display:block}
  a{color:inherit;text-decoration:none}

  .login-wrap {
    width: 100%;
    margin: auto;
    position: relative;
    background: transparent;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .login-html {
    width: 100%;
    height: 100%;
    position: relative;
    padding: 0 2rem;
    border-radius: 25px;
    display: flex;
    flex-direction: column;
  }

  .sign-in-htm,
  .sign-up-htm {
    position: relative;
    display: flex;
    flex-direction: column;
    transition: all 0.4s linear;
  }

  .tab {
    font-size: 22px;
    padding-bottom: 5px;
    margin: 0 15px 0 0;
    display: inline-block;
    border-bottom: 2px solid transparent;
  }

  .sign-in:checked + .tab,
  .sign-up:checked + .tab {
    color: #fff;
    border-color: #1161ee;
  }

  .login-form {
    flex: 1;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
  }

  .login-form .group {
    margin-bottom: 15px;
  }

  .login-form .group .button {
    width: 100%;
    color: #fff;
    display: block;
    padding: 6px 15px;
    background: #1161ee !important;
    border-radius: 25px;
    border: none;
  }

  .login-form .group .label,
  .login-form .group .input {
    width: 100%;
    color: black;
    display: block;
    padding: 6px 15px;
    background: #e8f0fd !important;
    border-radius: 25px;
    border: none;
  }

  .login-form .group .label {
    color: white;
    font-size: 12px;
  }

  .hr {
    height: 2px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, .2);
  }

  .foot-lnk {
    text-align: center;
  }

  select {
    height: auto !important;
  }

  .toggle-password-eye {
    float: right;
    top: -25px;
    right: 20px;
    position: relative;
    cursor: pointer;
  }

  .tab:hover {
    cursor: pointer;
  }

  .modal-body {
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow-y: auto;
  }
  .modal-header{
    border:0;
  }
  .modal-content {
    background: transparent;
    border-radius: 25px;
    background: orange;
    overflow: hidden;
  }
  .modal-body{
    flex : 0 1 auto !important;
  }

</style>

<div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content" style="padding-bottom:2rem;">
    <div class="modal-header">
        <div class="row w-100">
          <div class="col-12 d-flex align-items-center">
              <input id="tab-1" type="radio" name="tab" class="sign-in" style="visibility:hidden;" checked=""><label for="tab-1" class="tab">Sign In</label>
              <input id="tab-2" type="radio" name="tab" class="sign-up" style="visibility:hidden;"><label for="tab-2" class="tab">Sign Up</label>
              <button type="button" class="btn-close  ms-auto"  onclick="closeRegisterModal()" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="login-wrap">
          <div class="login-html">
            <div class="login-form">
              <div class="sign-in-htm mt-4">
                <div class="group">
                  <input id="user" type="text" class="input" name="username" placeholder="Username">
                </div>
                <div class="group">
                  <input id="pass" type="password" class="input" data-type="password" placeholder="Password" value="">
                </div>
                <div class="group">
                  <select name="login-category" id="login-category" class="form-select" style="border-radius: 25px;">
                    <option class="text-black" value="student" selected>Student</option>
                    <option class="text-black" value="teacher">Teacher</option>
                  </select>
                </div>
                <div class="group">
                  <input id="check" type="checkbox" class="check" checked="">
                  <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="col-12">
                        <div class="group d-flex justify-content-center align-items-center msgaftersignin"></div>
                  </div>
                <div class="group">
                  <input type="submit" class="button" id="signinbtn" onclick="signIn(event)" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                  <a href="#forgot">Forgot Password?</a>
                </div>
              </div>

              <div class="sign-up-htm mt-4" style="display:none;">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="group">
                      <input id="username" type="text" class="input" placeholder="Username">
                    </div>
                    <div class="group">
                      <input id="fullname" type="text" class="input" placeholder="Full Name">
                    </div>
                    <div class="group">
                      <input id="phonenumber" type="text" class="input" placeholder="Phone Number">
                    </div>
                    <div class="group d-none">
                      <input id="email" type="text" class="input" placeholder="Email Address">
                    </div>
                    <div class="group d-none">
                      <select name="gender" id="gender" class="form-select" style="border-radius: 25px;">
                        <option class="text-black" value="male" selected>Male</option>
                        <option class="text-black" value="female">Female</option>
                      </select>
                    </div>
                    <div class="group">
                      <input id="experience" type="number" class="input" placeholder="Experience (in years)">
                    </div>
                    <!-- <div class="group">
                      <input id="monthly_rate" type="number" class="input" placeholder="Monthly Rate">
                    </div> -->
                    <div class="group">
                      <input id="enteredpass" type="password" class="input" data-type="password" placeholder="Password">
                    </div>
                    <div class="group">
                      <input id="enteredrepeatpass" type="password" class="input" data-type="password" placeholder="Repeat Password">
                    </div>
                  </div>

                  <div class="col-12 col-md-6">

                    <div class="group">
                      <select name="category" id="category" onchange="showInput()" class="form-select" style="border-radius: 25px;">
                        <option class="text-black" value="student" selected>Student</option>
                        <option class="text-black" value="teacher">Teacher</option>
                      </select>
                    </div>
                    
                    <div class="group">
                      <input id="bio" type="text" class="input" placeholder="Bio">
                    </div>
                    <div class="group">
                      <input id="education" type="text" class="input" placeholder="Education">
                    </div>
                     <div class="group">
                            <select id="subjects" name="subjects[]" multiple size="5" class="input">
                                  <option value="Mathematics">Mathematics</option>
                                  <option value="Science">Science</option>
                                  <option value="English">English</option>
                                  <option value="History">History</option>
                                  <option value="Geography">Geography</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Chemistry">Chemistry</option>
                                  <option value="Physics">Physics</option>
                                  <option value="Art">Art</option>
                                  <option value="Music">Music</option>
                                  <option value="Physical Education">Physical Education</option>
                                  <option value="Computer Science">Computer Science</option>
                                  <option value="Social Studies">Social Studies</option>
                                  <option value="Language Arts">Language Arts</option>
                                  <option value="French">French</option>
                                  <option value="Spanish">Spanish</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Psychology">Psychology</option>
                                  <option value="Business Studies">Business Studies</option>
                                  <option value="Health Education">Health Education</option>
                                  <option value="Philosophy">Philosophy</option>
                                  <option value="Religious Studies">Religious Studies</option>
                                  <option value="Civics">Civics</option>
                                  <option value="Engineering">Engineering</option>
                              </select>
                            </div>
                              <div class="group d-none">
                              <select name="state" style="border-radius: 25px;padding:6px 15px;" class="form-select grey-text  browser-default custom-select" id="inputState" aria-label="Default select example">
                                            <option value="" selected>Select State</option>
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
                              <div class="group d-none">
                                  <select name="inputDistrict" style="border-radius: 25px;padding:6px 15px;" class="form-select grey-text  browser-default custom-select" id="inputDistrict">
                                        <option value="" selected="">-- select one -- </option>
                                  </select>
                              </div>

                    <div class="group">
                      <input type="file" class="form-control input" id="profile-picture">
                    </div>
                  </div>
                  <div class="col-12">
                        <div class="group d-flex justify-content-center align-items-center msgaftermath"></div>
                  </div>
                  <div class="col-12">
                    <div class="group">
                        <button type="submit" id="signupbtn" onclick="signUp(event)" class="button">Sign Up</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    
        $("#tab-1").on("click",function(){
          $(".sign-in-htm").show();
          $(".sign-up-htm").hide();
        });

        $("#tab-2").on("click",function(){
          $(".sign-in-htm").hide();
          $(".sign-up-htm").show();
        });

  });
function showInput(){
  cat = $("#category option:selected").val();
  if(cat == 'teacher'){
    $("#bio").show();
    $("#experience").show();
    $("#education").show();
    $("#monthly_rate").show();
    $("#subjects").show();
  }else{
    $("#bio").hide();
    $("#experience").hide();
    $("#education").hide();
    $("#monthly_rate").hide();
    $("#subjects").hide();
  }
}
showInput();

</script>