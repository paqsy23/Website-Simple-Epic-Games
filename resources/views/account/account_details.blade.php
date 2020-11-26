@extends('layout.my_account')

@section('title', 'Account Details')

@section('content')
    <div class="edit-account row">
        <input type="hidden" id="url" value="{{ url('account/detail') }}">
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <p class="form-row form-row-first col-lg-7">
            <label for="account_name">
                Name
                <span class="required">*</span>
            </label>
            <input type="text" class="input-text form-control" name="account_name" id="account_name" value="{{ Session::get('user-login')->name }}" disabled/>
            <small class="text-danger hidden" id="error_name">This field is required</small>
        </p>

        <div class="clear"></div>

        <p class="form-row form-row-wide col-lg-7">
            <label for="account_email">
                Email address
                <span class="required">*</span>
            </label>
            <input type="email" class="input-text form-control" name="account_email" id="account_email" value="{{ Session::get('user-login')->email }}" disabled/>
            <small class="text-danger hidden" id="error_email">This field is required</small>
        </p>

        <div class="clear"></div>
        <p class="col-lg-12">
            <input type="submit" class="button" onclick="changeMode(this)" value="Edit Profile" />
            <input type="submit" class="button hidden" id="btnSave" target="{{ url('account/edit') }}" onclick="saveChange(this)" value="Save Changes" />
        </p>

        <fieldset class="col-lg-8 row">
            <legend class="col-lg-12">Password Change</legend>
            <p class="form-row form-row-wide col-lg-8">
                <label for="password_current">Current Password</label>
                <input type="password" class="input-text form-control" name="password_current" id="password_current" disabled/>
                @if (Session::get('password'))
                    <small class="text-danger">{{ Session::get('password') }}</small>
                @endif
                <small class="text-danger hidden" id="error_password">This field is required</small>
            </p>

            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide col-lg-8">
                <label for="password_1">New Password</label>
                <input type="password" class="input-text form-control" name="password_1" id="password_1" disabled/>
                <small class="text-danger hidden" id="error_new_password">This field is required</small>
            </p>

            <p class="form-row form-row-wide col-lg-8">
                <label for="password_2">Confirm New Password</label>
                <input type="password" class="input-text form-control" name="password_2" id="password_2" disabled/>
                <small class="text-danger hidden" id="error_confirm_password"></small>
            </p>
        </fieldset>

        <div class="clear"></div>
        <p class="col-lg-12">
            <input type="submit" class="button" onclick="changeModePassword(this)" value="Change Password" />
            <input type="submit" class="button hidden" id="btnSavePassword" target="{{ url('account/edit-password') }}" onclick="saveChangePassword(this)" value="Save Changes" />
        </p>
    </div>
    <script type="text/javascript">
        function changeMode(e) {
            if ($(e).val() == "Edit Profile") {
                $(e).val('Cancel')
                $('#btnSave').removeClass('hidden')

                $('#account_name').prop('disabled', false)
                $('#account_email').prop('disabled', false)
            } else {
                $(e).val('Edit Profile')
                $('#btnSave').addClass('hidden')

                $('#account_name').prop('disabled', true)
                $('#account_email').prop('disabled', true)
            }
        }

        function changeModePassword(e) {
            if ($(e).val() == "Change Password") {
                $(e).val('Cancel')
                $('#btnSavePassword').removeClass('hidden')

                $('#password_current').prop('disabled', false)
                $('#password_1').prop('disabled', false)
                $('#password_2').prop('disabled', false)
            } else {
                $(e).val('Change Password')
                $('#btnSavePassword').addClass('hidden')

                $('#password_current').prop('disabled', true)
                $('#password_1').prop('disabled', true)
                $('#password_2').prop('disabled', true)
            }
        }

        function saveChange(e) {
            var token = $('#token').val()

            var name = $('#account_name').val()
            var email = $('#account_email').val()

            var check = true

            if (name == '') {
                $('#error_name').removeClass('hidden')
                check = false
            } else {
                $('#error_name').addClass('hidden')
                check = true
            }

            if (email == '') {
                $('#error_email').removeClass('hidden')
                check = false
            } else {
                $('#error_email').addClass('hidden')
                check = true
            }

            if (check) {
                $.post(
                    $(e).attr('target'),
                    {
                        '_token' : token,
                        'name' : name,
                        'email' : email
                    }, function() {
                        window.location = $('#url').val()
                    }
                )
            }
        }

        function saveChangePassword(e) {
            var token = $('#token').val()

            var current = $('#password_current').val()
            var newPass = $('#password_1').val()
            var confirm = $('#password_2').val()

            var check = true

            if (current == '') {
                check = false
                $('#error_password').removeClass('hidden')
            } else {
                check = true
                $('#error_password').addClass('hidden')
            }

            if (newPass == '') {
                check = false
                $('#error_new_password').removeClass('hidden')
            } else {
                check = true
                $('#error_new_password').addClass('hidden')
            }

            if (confirm == '') {
                check = false
                $('#error_confirm_password').removeClass('hidden')
                $('#error_confirm_password').html('This field is required')
            } else if (confirm != newPass) {
                check = false
                $('#error_confirm_password').removeClass('hidden')
                $('#error_confirm_password').html('Confirm password must be as same as new password')
            } else {
                check = true
                $('#error_confirm_password').addClass('hidden')
            }

            if (check) {
                $.post(
                    $(e).attr('target'),
                    {
                        '_token' : token,
                        'current_password' : current,
                        'new_password' : newPass,
                        'confirm_password' : confirm
                    }, function() {
                        window.location = $('#url').val()
                    }
                )
            }
        }
    </script>
@endsection
