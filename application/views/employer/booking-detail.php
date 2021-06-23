<!doctype html>
<html>

<head>
    <title>Booking Detail — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-employer'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-employer'); ?>


        <section id="booking" class="bookDtl">
            <div class="contain-fluid">
                <div class="blk">
                    <div class="itmBlk">
                        <div class="ico"><img src="<?= $base_url ?>images/stars/1.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Educated is even better than you’ve heard</h4>
                            <div class="rating">
                                <div class="rateYo"></div>
                                <strong>4.1<em>286 ratings</em></strong>
                            </div>
                            <ul class="list">
                                <li><strong>#:</strong><span>83692104</span></li>
                                <li><strong>Status:</strong><span><em class="badge yellow">Pending</em></span></li>
                                <li><strong>Model:</strong><span>Jennifer Kem</span></li>
                                <li><strong>Price:</strong><span>$19</span></li>
                                <li><strong>Date:</strong><span>March 20, 2019</span></li>
                                <li><strong>Time:</strong><span>5:20 pm</span></li>
                                <li><strong>Duration:</strong><span>2 hours</span></li>
                                <li><strong>Details:</strong><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus fugiat sapiente, eius facere neque maiores expedita quas aspernatur. Illo voluptatem obcaecati doloremque blanditiis, eius error odio possimus nulla eligendi.</span></li>
                                <li>
                                    <strong>&nbsp;</strong>
                                    <span class="blockBtn"><button class="webBtn labelBtn red-color popBtn" data-popup="cancel-booking">I want to cancel my booking</button></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="blk">
                    <h4>Booking Cancellation</h4>
                    <p>I am not able to attend this meeting due to conflict with another meeting.</p>
                    <div class="text-center">
                        <div class="bTn">
                            <button type="button" class="webBtn simpleBtn">Decline</button>
                            <button type="button" class="webBtn">Accept</button>
                        </div>
                    </div>
                </div>
                <div class="blk review">
                    <div class="ico"><img src="<?= $base_url ?>images/users/1.jpg" alt=""></div>
                    <div class="txt">
                        <form action="" method="post">
                            <div class="txtGrp">
                                <h5>Leave Review</h5>
                                <div class="rateYo" data-rateyo-star-width="20px" data-rateyo-read-only="false"></div>
                            </div>
                            <div class="txtGrp">
                                <label for="">Write a little description</label>
                                <textarea name="" id="" class="txtBox"></textarea>
                            </div>
                            <div class="bTn text-center">
                                <button type="submit" class="webBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="blk review">
                    <div class="ico"><img src="<?= $base_url ?>images/users/1.jpg" alt=""></div>
                    <div class="txt">
                        <div class="icoTxt">
                            <div class="title">
                                <h5>Jennifer Kem</h5>
                                <div class="rateYo"></div>
                            </div>
                            <div class="date">February 2018</div>
                        </div>
                        <p>Had a short stay with my dad and younger sis. Very comfortable and cozy room. The host Jeka is nice and prepared snacks for us in advance. The location is good and we particularly like the view of the room. Strongly recommend:)</p>
                        <div class="review">
                            <div class="ico"><img src="<?= $base_url ?>images/users/1.jpg" alt=""></div>
                            <div class="txt">
                                <h6>Model's Response</h6>
                                <p>Thank you for your kind comment, I will be waiting for your next call, hope we work for a long time together.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup small-popup" data-popup="cancel-booking">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Cancel Booking</h3>
                                <form action="" method="post">
                                    <div class="txtGrp">
                                        <ul class="radioLst">
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_personal" name="reason">
                                                <label for="reason_personal">Due to personal reasons, I am unable to attend.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_report" name="reason">
                                                <label for="reason_report">Due to having to finish a report on that day.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_matter" name="reason">
                                                <label for="reason_matter">I have had an urgent matter come up that I must take care of</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_topic" name="reason">
                                                <label for="reason_topic">Not involved in the artist to be discussed at the meeting.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_conflict" name="reason">
                                                <label for="reason_conflict">I am not able to attend this meeting due to conflict with another meeting.</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="txtGrp">
                                        <label for="">Description</label>
                                        <textarea name="" id="" class="txtBox"></textarea>
                                    </div>
                                    <div class="bTn text-center">
                                        <button type="submit" class="webBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>