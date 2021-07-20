<!doctype html>
<html>

<head>
    <title>My Earnings — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="trans">
            <div class="contain-fluid">
                <?php echo showMsg(); ?>
                <div class="blk">
                    <ul class="blans">
                        <li>Deliveries: <span><?=count($transactions)?></span></li>
                        <li>Total Payouts: <span class="price">$<?=round($totalPayouts, 1)?></span></li>
                    </ul>
                </div>
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Model Name</th>
                                <th width="140">Amount</th>
                                <th>Date</th>
                                <th width="80">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($transactions as $key => $value): ?>
                                <tr>
                                    <td><?= get_mem_name($value->booked_member); ?></td>
                                    <td class="price">$<?=$value->paidAmount?></td>
                                    <td><?=chat_message_time($value->date)?></td>
                                    <td><span class="badge <?=earning_status_badge($value->status)?>">Paid</span></td>
                                </tr>
                            <?php endforeach; ?>
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
                                <form action="<?=base_url()?>earnings/withdraw_request" method="post" id="withdrawForm">
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
    <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>