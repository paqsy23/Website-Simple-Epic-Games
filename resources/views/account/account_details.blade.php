@extends('layout.my_account')

@section('title', 'Account Details')

@section('content')
    <div class="edit-account row">
        <p class="form-row form-row-first col-lg-7">
            <label for="account_name">
                First name
                <span class="required">*</span>
            </label>
            <input type="text" class="input-text form-control" name="account_name" id="account_name" value="{{ Session::get('user-login')->name }}" disabled/>
        </p>

    <div class="clear"></div>

        <p class="form-row form-row-wide col-lg-7">
            <label for="account_email">
                Email address
                <span class="required">*</span>
            </label>

            <input type="email" class="input-text form-control" name="account_email" id="account_email" value="{{ Session::get('user-login')->email }}" disabled/>
        </p>

        <fieldset class="col-lg-8 row">
            <legend>Password Change</legend>
            <p class="form-row form-row-wide col-lg-8">
                <label for="password_current">Current Password (leave blank to leave unchanged)</label>
                <input type="password" class="input-text form-control" name="password_current" id="password_current" disabled/>
            </p>

            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide col-lg-8">
                <label for="password_1">New Password (leave blank to leave unchanged)</label>
                <input type="password" class="input-text form-control" name="password_1" id="password_1" disabled/>
            </p>

            <p class="form-row form-row-wide col-lg-8">
                <label for="password_2">Confirm New Password</label>
                <input type="password" class="input-text form-control" name="password_2" id="password_2" disabled/>
            </p>
        </fieldset>

        <div class="clear"></div>
        <p class="col-lg-12">
            <input type="submit" class="button" onclick="changeMode(this)" value="Edit Profile" />
            <input type="submit" class="button hidden" id="btnSave" onclick="saveChange()" value="Save Changes" />
        </p>
    </div>

    <script>
        function changeMode(e) {
            if ($(e).val() == "Edit Profile") {
                $(e).val('Cancel')
                $('#btnSave').removeClass('hidden')

                $('#account_name').prop('disabled', false)
                $('#account_email').prop('disabled', false)
                $('#password_current').prop('disabled', false)
                $('#password_1').prop('disabled', false)
                $('#password_2').prop('disabled', false)
            } else {
                $(e).val('Edit Profile')
                $('#btnSave').addClass('hidden')

                $('#account_name').prop('disabled', true)
                $('#account_email').prop('disabled', true)
                $('#password_current').prop('disabled', true)
                $('#password_1').prop('disabled', true)
                $('#password_2').prop('disabled', true)
            }
        }
    </script>
@endsection
