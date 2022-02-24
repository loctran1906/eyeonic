
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
            <div class="col-sm-6 contact-form">
                <form method="post">
                    <div class="form-group">
                        <h3>Your message</h3>
                        <i>(Information marked with <span style="color: red; font-weight: bold">*</span> is required)</i>
                        <?=$alert??''?>
                    </div>
                    <div class="form-group">
                        <label for="inputFullname">Fullname<sup><span style="color: red; font-weight: bold">*</span></sup></label>
                        <input type="text" class="form-control" id="inputFullname" placeholder="" name="fullname" require>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="" name="address">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Your phone<sup><span style="color: red; font-weight: bold">*</span></sup></label>
                        <input type="number" class="form-control" id="phonenumber" placeholder="" name="phone" require>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="mail">Email<sup><span style="color: red; font-weight: bold">*</span></sup></label>
                            <input type="text" class="form-control" id="mail" name="email" require>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="age">Ages</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Gender</label>
                            <select id="inputState" class="form-control" name="gender">
                                <option selected value="none">---Choose---</option>
                                <option value="ms">Female</option>
                                <option value="mr">Male</option>
                                <option value="other">Other...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message content</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="member" value="1">
                            <label class="form-check-label" for="gridCheck">Would you like to become our member?</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Send your message</button>
                </form>
            </div>
            <div class="col-sm-6 contact-desc">
                <div>
                    <h2>We'd love to hear your feedback</h2>
                </div>
                <div>
                    <p>You can rest assured that any information you provide is kept confidential by us. We will contact you soon to hear all from you.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="location">
    <div class="container">
        <div class="row">
            <div>
                <h3>You can find us at the location in the map below</h3>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.248289743231!2d105.86301031440793!3d21.06274329199434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa2fe7d91b15%3A0xab68fc7eea5b40a!2zNDEyIE5n4buNYyBUaHXhu7UsIE5n4buNYyBUaOG7pXksIExvbmcgQmnDqm4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1645621481287!5m2!1svi!2s" alt='fullscreen' style="width: 100%; height:300px; margin :30px 0"></iframe>
            <div>
                <ul class="row flex-center" style="list-style: none;">
                    <li class="col-md-4">
                        <div><i class="fa fa-map-marker"></i></div>
                        <label for="address">Address: </label>
                        <Address id="address"><a href="#">412 Ngọc Thuỵ, Ngọc Thụy, Long Biên, Hà Nội, Việt Nam</a></Address>
                    </li>
                    <li class="space col-md-4">
                        <div><i class="fa fa-envelope-o"></i></div>
                        <label for="email">Our email: </label>
                        <Address id="email"><a href="mailto:loc.td.1833@aptechlearning.com.vn">loc.td.1833@aptechlearning.com.vn</a><br>Shoot us an email and we'll get back to you within 24-48 hours.</Address>
                    </li>
                    <li class="col-md-4">
                        <div><i class="fa fa-phone"></i></div>
                        <label for="phone">Hotline: </label>
                        <Address id="phone"><a href="tel:855-393-2664">1-855-EYEONIC (855-393-2664)</a>
                            <br> Mon.- Sat. 7 a.m.- 5 p.m. <br>PST
                            Sun. Closed
                        </Address>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>