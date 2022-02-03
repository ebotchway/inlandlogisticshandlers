<form method="post" action="mailer.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="John Doe" />
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" />
        </div>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" />
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <input class="form-control" id="message" name="message" rows="3" placeholder="Comment"></input>
    </div>
    <button name="submit" type="submit" class="form-group btn-sm btn-lg btn-block background-dark text-white text-center text-uppercase rounded-0 padding-15px">SUBMIT</button>
</form>
