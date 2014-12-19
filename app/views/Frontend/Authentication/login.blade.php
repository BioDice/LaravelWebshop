<div class="row">
    <div class="small-10 medium-6 large-6 small-centered columns">
        <section id="loginForm" class="panel" style="padding: 20px; min-width: 300px; min-height: 300px;">

                <div class="row">
                    <div class="small-12 small-centered columns">
                        <img src="/images/HighFive_logo_small.png" style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-bottom: 20px;" />
                    </div>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="small-12 small-centered columns">
                        @Html.LabelFor(m => m.Email)
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        @Html.TextBoxFor(m => m.Email, new { @Value = "admin@infobridge.com" })
                        @Html.ValidationMessageFor(m => m.Email)
                    </div>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="small-12 small-centered columns">
                        @Html.LabelFor(m => m.Password)
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        @Html.PasswordFor(m => m.Password, new { value = "Admin@123456" })
                        @Html.ValidationMessageFor(m => m.Password)
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <div class="switch">
                            <input type="checkbox" id="RememberMe" value="true" name="RememberMe" />
                            <label for="RememberMe"></label>
                            <input type="hidden" value="false" id="RememberMe" name="RememberMe" />
                        </div>
                    </div>
                    <div class="small-9 columns">
                        <label style="text-align: initial;" class="inline">Remember me?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 small-centered columns">
                        <input type="submit" value="Log in" class="button" style="width:100%;" />
                    </div>
                </div>
        </section>
    </div>
</div>