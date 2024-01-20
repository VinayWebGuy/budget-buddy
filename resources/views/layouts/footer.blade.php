@php
    $usr = DB::table('users')->where('id', Session::get('user_id'))->first();
@endphp
@if($usr->monthly_budget =="" || $usr->currency == "")
<div class="setup-form-box">
    <div class="setup-form">
        <h3>Setup your account first</h3>
        <p>Don't worry you can change it later.</p>
        <form id="setupForm">
                <div class="form_group">
                    <label for="setup_monthly_budget">Monthly Budget</label>
                    <input type="number" name="setup_monthly_budget" id="setup_monthly_budget" value="">
                </div>
                <div class="form_group">
                    <label for="setup_currency">Currency</label>
                   <select name="setup_currency" id="setup_currency">
                    <option value="₹">₹</option>
                    <option value="$">$</option>
                    <option value="€">€</option>
                    <option value="¥">¥</option>
                   </select>
                </div>
            <button id="setupBtn" disabled type="submit">Setup</button>
         </form>
    </div>
</div>
@endif
<div class="poppers">
    <img src="{{asset('assets/images/poppers.gif')}}" alt="">
</div>




<div class="success-modal">
    <div class="close-success-modal">
        <i class="fa fa-sync"></i>
    </div>
    <div class="success-gif">
        <img src="{{ asset('assets/images/success.gif') }}" alt="">
    </div>
    <div class="success-message"></div>
</div>

<div class="error-modal">
    <div class="close-error-modal">
        <i class="fa fa-close"></i>
    </div>
    <div class="error-gif">
        <img src="{{ asset('assets/images/error.gif') }}" alt="">
    </div>
    <div class="error-message"></div>
</div>

<div class="loader">
  <img src="{{ asset('assets/images/loader.gif') }}" alt="">
</div>

</section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/form.js') }}"></script>
<script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
