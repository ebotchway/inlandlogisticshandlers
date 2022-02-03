<form method="POST" action="includes/mailer.php">
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
    <input type="submit" name="submit" class="text-center btn-sm btn-lg btn-block" style="color:white;background-color: black;padding: 15px;text-transform: uppercase;" value="Send Message" />
</form>
