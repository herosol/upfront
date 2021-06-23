<!doctype html>
<html>

<head>
    <title>Payment Method — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="method">
            <div class="contain-fluid">
                <div class="topHead">
                    <h4 class="heading">Payment Method</h4>
                    <div class="bTn"><button type="button" class="webBtn smBtn popBtn" data-popup="add-method">Add new method</button></div>
                </div>
                <div class="blk blockLst">
                    <table>
                        <tbody>
                            <tr>
                                <td>● ● ● ● ● 7860 <span class="badge green">Default</span></td>
                                <td>September 25, 2018</td>
                                <td width="50">
                                    <div class="dropDown">
                                        <div class="more dropBtn"><span></span></div>
                                        <ul class="dropCnt dropLst right">
                                            <li><a href="?">Make Default</a></li>
                                            <li><a href="?">Delete Account</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>● ● ● ● ● 5740</td>
                                <td>September 25, 2018</td>
                                <td width="50">
                                    <div class="dropDown">
                                        <div class="more dropBtn"><span></span></div>
                                        <ul class="dropCnt dropLst right">
                                            <li><a href="?">Make Default</a></li>
                                            <li><a href="?">Delete Account</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>● ● ● ● ● 2981</td>
                                <td>September 25, 2018</td>
                                <td width="50">
                                    <div class="dropDown">
                                        <div class="more dropBtn"><span></span></div>
                                        <ul class="dropCnt dropLst right">
                                            <li><a href="?">Make Default</a></li>
                                            <li><a href="?">Delete Account</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Cleared Payouts</th>
                                <th width="140">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$250</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$220</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$150</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$140</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$180</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$390</td>
                            </tr>
                            <tr>
                                <td>September 25, 2018</td>
                                <td class="price">$280</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="popup" data-popup="add-method">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Add new Payment method</h3>
                                <form action="" method="post">
                                    <div data-payment>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment" id="credit" class="tglBlk" value="credit-card" checked="">
                                            <label for="credit">Credit card</label>
                                        </div>
                                        <div class="insideBlk active">
                                            <div class="row formRow">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                    <div class="txtGrp">
                                                        <label for="">Card Number</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                    <div class="txtGrp">
                                                        <label for="">Card Holder</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="" class="move">Month</label>
                                                        <select name="" id="" class="txtBox">
                                                            <option value="">Select</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="" class="move">Year</label>
                                                        <select name="" id="" class="txtBox">
                                                            <option value="">Select</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="">CVC?</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                            <label for="paypal">Paypal</label>
                                        </div>
                                        <div class="insideBlk">
                                            <div class="txtGrp">
                                                <label for="">PayPal Address</label>
                                                <input type="email" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-center">
                                        <button type="submit" class="webBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- method -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>