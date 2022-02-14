<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="slide" style="background-image: url('img/banner/bg4.jpg');">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact ">
    <div class="container flex-center contact-content">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Your phone</label>
                        <input type="number" class="form-control" id="phonenumber" placeholder="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="fullname">Full name</label>
                            <input type="text" class="form-control" id="fullname">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="age">Ages</label>
                            <input type="number" class="form-control" id="age">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Gender</label>
                            <select id="inputState" class="form-control">
                                <option selected>---Choose---</option>
                                <option>Female</option>
                                <option>Male</option>
                                <option>Other...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">Would you like to become our member?</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send your message</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div>
                    <h2>We'd love to hear your feedback</h2>
                </div>
                <div>
                    <p>You can rest assured that any information you provide is kept confidential by us. We will contact you soon to hear all from you.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="location">
        <form action="#" onsubmit="showAddress(this.address.value); return false">
            <div class="row">
                <iframe src="//maps.google.com/maps?q=53.3381768,-6.2613077&z=15&output=embed"></iframe>
            </div>
        </form>
    </div>
</div>