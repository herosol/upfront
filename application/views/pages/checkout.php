<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Checkout - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical about>


        <section id="overview" class="checkout-blk">
            <div class="contain">
                <h2 class="heading text-center">Checkout</h2>
                <form class="flex">
                    <div class="col col1">
                        <div class="cntnt ivoice-outer">
                            <div class="invoice-header">
                               <h4>Order Invoice</h4>
                            </div>
                            <div class="ivoice-lbl">
                                <p>Remote opportunities, voiceover jobs, self-tape auditions, live webinars, and more.Explore new skills, deepen existing passions, and get lost in creativity. What you find just might surprise and inspire you.</p>
                                <div class="flex">
                                    <div><small>Amount:</small> <span>$7292<span></div>
                                    <div><small>Days:</small> <span>12 Working days<span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="inner">
                            <h3>Shipping Information</h3>
                            <div class="row">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="">First Name</label>
                                    <input type="text" name="first-name" id="f_name" class="txtBox" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="">Last Name</label>
                                    <input type="text" name="last-name" id="l_name" class="txtBox" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="">Email</label>
                                    <input type="text" name="email" id="email" class="txtBox" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="">Phone</label>
                                    <input type="text" name="phone" id="phone" class="txtBox" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 text-center txtGrp">
                                    <label for="" class="">Billing Address</label>
                                    <input type="text" name="billing-address" id="billing" class="txtBox" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="move">City</label>
                                    <select id="city" name="" class="txtBox" required="required">
                                            <option value="">- Select City -</option>
                                            <option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="9">District of Columbia</option><option value="10">Florida</option><option value="11">Georgia</option><option value="12">Hawaii</option><option value="13">Idaho</option><option value="14">Illinois</option><option value="15">Indiana</option><option value="16">Iowa</option><option value="17">Kansas</option><option value="18">Kentucky</option><option value="19">Louisiana</option><option value="20">Maine</option><option value="21">Maryland</option><option value="22">Massachusetts</option><option value="23">Michigan</option><option value="24">Minnesota</option><option value="25">Mississippi</option><option value="26">Missouri</option><option value="27">Montana</option><option value="28">Nebraska</option><option value="29">Nevada</option><option value="30">New Hampshire</option><option value="31">New Jersey</option><option value="32">New Mexico</option><option value="33">New York</option><option value="34">North Carolina</option><option value="35">North Dakota</option><option value="36">Ohio</option><option value="37">Oklahoma</option><option value="38">Oregon</option><option value="39">Pennsylvania</option><option value="40">Rhode Island</option><option value="41">South Carolina</option><option value="42">South Dakota</option><option value="43">Tennessee</option><option value="44">Texas</option><option value="45">Utah</option><option value="46">Vermont</option><option value="47">Virginia</option><option value="48">Washington</option><option value="49">West Virginia</option><option value="50">Wisconsin</option><option value="51">Wyoming</option>   
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="move">State</label>
                                    <select id="state_" name="" class="txtBox" required="required">
                                            <option value="">- Select State -</option>
                                            <option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="9">District of Columbia</option><option value="10">Florida</option><option value="11">Georgia</option><option value="12">Hawaii</option><option value="13">Idaho</option><option value="14">Illinois</option><option value="15">Indiana</option><option value="16">Iowa</option><option value="17">Kansas</option><option value="18">Kentucky</option><option value="19">Louisiana</option><option value="20">Maine</option><option value="21">Maryland</option><option value="22">Massachusetts</option><option value="23">Michigan</option><option value="24">Minnesota</option><option value="25">Mississippi</option><option value="26">Missouri</option><option value="27">Montana</option><option value="28">Nebraska</option><option value="29">Nevada</option><option value="30">New Hampshire</option><option value="31">New Jersey</option><option value="32">New Mexico</option><option value="33">New York</option><option value="34">North Carolina</option><option value="35">North Dakota</option><option value="36">Ohio</option><option value="37">Oklahoma</option><option value="38">Oregon</option><option value="39">Pennsylvania</option><option value="40">Rhode Island</option><option value="41">South Carolina</option><option value="42">South Dakota</option><option value="43">Tennessee</option><option value="44">Texas</option><option value="45">Utah</option><option value="46">Vermont</option><option value="47">Virginia</option><option value="48">Washington</option><option value="49">West Virginia</option><option value="50">Wisconsin</option><option value="51">Wyoming</option>   
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="">Zip</label>
                                    <input type="text" name="zip" id="zip" class="txtBox" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                    <label for="" class="move">Country</label>
                                    <select id="state_" name="" class="txtBox" required="required">
                                            <option value="">- Select Country -</option>
                                            <option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="9">District of Columbia</option><option value="10">Florida</option><option value="11">Georgia</option><option value="12">Hawaii</option><option value="13">Idaho</option><option value="14">Illinois</option><option value="15">Indiana</option><option value="16">Iowa</option><option value="17">Kansas</option><option value="18">Kentucky</option><option value="19">Louisiana</option><option value="20">Maine</option><option value="21">Maryland</option><option value="22">Massachusetts</option><option value="23">Michigan</option><option value="24">Minnesota</option><option value="25">Mississippi</option><option value="26">Missouri</option><option value="27">Montana</option><option value="28">Nebraska</option><option value="29">Nevada</option><option value="30">New Hampshire</option><option value="31">New Jersey</option><option value="32">New Mexico</option><option value="33">New York</option><option value="34">North Carolina</option><option value="35">North Dakota</option><option value="36">Ohio</option><option value="37">Oklahoma</option><option value="38">Oregon</option><option value="39">Pennsylvania</option><option value="40">Rhode Island</option><option value="41">South Carolina</option><option value="42">South Dakota</option><option value="43">Tennessee</option><option value="44">Texas</option><option value="45">Utah</option><option value="46">Vermont</option><option value="47">Virginia</option><option value="48">Washington</option><option value="49">West Virginia</option><option value="50">Wisconsin</option><option value="51">Wyoming</option>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="inner payment-method" data-payment>
                           <h3>Payment Method</h3>
                           <div class="lblBtn">
                               <input type="radio" name="payment" id="credit" class="tglBlk" value="credit-card" checked="">
                                <label for="credit">Credit card</label>
                            </div>
                            <div class="insideBlk active" data-block="credit">
                                <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 txtGrp">
                                      <label for="" class="">Card Number</label>
                                      <input type="text" name="" value="" class="txtBox">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 txtGrp">
                                      <label for="" class="">Card Holder</label>
                                      <input type="text" name="" value="" class="txtBox">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 txtGrp">
                                      <label for="" class="">Expiry (mm/dd/yy)</label>
                                      <input type="text" name="" value="" class="txtBox">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 txtGrp">
                                      <label for="" class="">CVC ?</label>
                                      <input type="text" name="" value="" class="txtBox">
                                        <div class="info">
	                                        <i class="fi-question"></i>
	                                        <div class="infoTip">3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front.</div>
	                                    </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="lblBtn">
                                <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                <label for="paypal">Paypal</label>
                            </div>
                            <div class="insideBlk" data-block="paypal">
                                <div class="txtGrp flex paypall-lsting">
                                   <div class="_ico"><i class="fi-paypal"></i></div>
                                   <p>After clicking "Complete order", you will be redirected to PayPal to complete your purchase securely.</p>
                                </div>
                            </div>

                            
                        </div>
                        <div class="sq-field text-center">
                            <button type="submit" class="webBtn lgBtn" id="sq-creditcard">Place Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>