@push('styles')
  <style media="screen">
    .emReg {
      color: red !important;
    }
  </style>
@endpush
<div class="login-registration-modal" id="loginRegCom">
    <div class="login-modal-wrapper"><!-- login modal warapper satart start-->
        <div class="modal" tabindex="-1" id="login-modal" role="dialog"><!-- #login modal-->
            <div class="modal-dialog" role="document">
                <div class="modal-content"><!-- modal content start -->
                    <nav>
                        <div class="nav nav-tabs login-modal-navigation" id="nav-tab" role="tablist"><!-- login modal navigation start -->
                            <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login"
                                aria-selected="true">login</a>
                            <a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup"
                                aria-selected="false">signup</a>
                        </div><!-- login modal navigation end -->
                    </nav>
                    <div class="tab-content" id="nav-tabContent"><!-- tab content-->
                        <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                            <div class="login-form-wrapper"><!-- login form wrapper start -->
                                <form>
                                    <div class="form-element square login"><!-- form element login start -->
                                        <label>Enter Email
                                            <span>**</span>
                                        </label>
                                        <input type="email" placeholder="Type your email...." class="input-field-square">
                                    </div><!-- form element login end -->
                                    <div class="form-element square login"><!-- form element login start -->
                                        <label>Password
                                            <span>**</span>
                                        </label>
                                        <input type="password" placeholder="Type your email...." class="input-field-square">
                                    </div><!-- form element login end -->
                                    <button type="button" class="submit-form-btn">login</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                        <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
                            <div class="singup-form-wrapper">
                                <form id="regForm" @submit.prevent="regUser">
                                    <div id="regForm" onsubmit="regUser()" class="form-element square login">
                                        <label>Username
                                            <span>**</span>
                                        </label>
                                        <input type="text" name="username" placeholder="Type your username...." class="input-field-square" v-model="username">
                                        <p class="text-danger" v-if="unExist">The username has already been taken.</p>
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>First Name
                                            <span>**</span>
                                        </label>
                                        <input type="text" name="firstname" placeholder="Type your first name...." class="input-field-square">
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>Last Name
                                            <span>**</span>
                                        </label>
                                        <input type="text" name="lastname" placeholder="Type your last name...." class="input-field-square">
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>Enter Email
                                            <span>**</span>
                                        </label>
                                        <input type="email" name="email" placeholder="Type your email...." class="input-field-square">
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>Enter Phone Number
                                            <span>**</span>
                                        </label>
                                        <input type="text" name="phone" placeholder="Type your phone...." class="input-field-square">
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>Password
                                            <span>**</span>
                                        </label>
                                        <input type="password" name="password" placeholder="Type your password...." class="input-field-square">
                                        <p class="emReg text-danger"></p>
                                    </div>
                                    <div class="form-element square login">
                                        <label>Confirm Password
                                            <span>**</span>
                                        </label>
                                        <input type="password" name="password_confirmation" placeholder="Type your password again...." class="input-field-square">
                                    </div>
                                    <input type="submit" class="submit-form-btn" value="Register">
                                </form>
                            </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>

@push('scripts')
  <script>
    var urlUsernames = '{{route('users.usernames')}}';
    var urlReg = '{{route('users.register')}}';
  </script>
  <script src="{{asset('core/public/js/user/reg-login.js')}}"></script>
@endpush
