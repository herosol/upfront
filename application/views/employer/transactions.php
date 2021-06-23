<!doctype html>
<html>

<head>
    <title>My Transactions — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-employer'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-employer'); ?>


        <section id="trans">
            <div class="contain-fluid">
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th width="140">Amount</th>
                                <th>Date</th>
                                <th width="80">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Wick</td>
                                <td class="price">$250</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Abraham Adam</td>
                                <td class="price">$220</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Jenifer Kem</td>
                                <td class="price">$150</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Samira Jones</td>
                                <td class="price">$140</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge red">Canceled</span></td>
                            </tr>
                            <tr>
                                <td>Preety Zinta</td>
                                <td class="price">$180</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Tai Chi</td>
                                <td class="price">$390</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Christoper Smith</td>
                                <td class="price">$280</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge red">Canceled</span></td>
                            </tr>
                            <tr>
                                <td>Julian Adam</td>
                                <td class="price">$170</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="popup" data-popup="withdraw-funds">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Add Payment method</h3>
                                <form action="" method="post">
                                    <div data-payment>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment" id="bank" class="tglBlk" value="bank-account" checked="">
                                            <label for="bank">Bank Account</label>
                                        </div>
                                        <div class="insideBlk active">
                                            <div class="txtGrp">
                                                <label for="" class="move">Bank Account</label>
                                                <select name="" id="" class="txtBox">
                                                    <option value="">Select</option>
                                                    <option value="">Wells Fargo Checking Account</option>
                                                    <option value="">SunTrust Checking Account</option>
                                                </select>
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
        <!-- trans -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>