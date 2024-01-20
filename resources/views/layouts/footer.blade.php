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
